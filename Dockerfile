# Utilise l'image PHP avec Apache
FROM php:8.0-apache

# Installe les dépendances nécessaires
RUN apt-get update && apt-get install -y \
    libicu-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    && docker-php-ext-install intl pdo pdo_mysql opcache zip

# Installe Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copie le code source dans le conteneur
COPY . /var/www/html

# Définir le répertoire de travail
WORKDIR /var/www/html

# Installe les dépendances Symfony
RUN composer install

# Donne les droits à Apache sur le dossier
RUN chown -R www-data:www-data /var/www/html

# Active le module Apache mod_rewrite
RUN a2enmod rewrite

# Expose le port 80
EXPOSE 80

# Lance Apache en mode foreground
CMD ["apache2-foreground"]
