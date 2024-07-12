<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_ee1671be0d67f8748273e24d1ee00d0c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'importmap' => [$this, 'block_importmap'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html lang=\"fr\">

<head>
    <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <meta name=\"description\" content=\"Les 6 clubs Forest Hill vous accueillent toute l&#039;année, à Paris et en Ile de France pour pratiquer zumba, aquabike, RPM, boxe et 60 autres activités de remise en forme\" />  
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\" />

    <link rel=\"icon\" type=\"image/png\" href=\"/bundles/chorusfront/img/favicon.png\" />
     

    <link rel=\"stylesheet\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/cbdcfe9.css"), "html", null, true);
        yield "\" />
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/override.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>
    <script>
    (
        function(w,d,s,l,i){
            w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});
            var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            }
        )
         
        (window,document,'script','dataLayer','GTM-P6WR3VQ');
    </script>
        
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NS2JMZSK');
    </script>
       
\t<script async src=\"https://www.googletagmanager.com/gtag/js?id=AW-948388217\"></script>
\t<script>
  \t\twindow.dataLayer = window.dataLayer || [];
  \t\tfunction gtag(){dataLayer.push(arguments);}
  \t\tgtag('js', new Date());
  \t\tgtag('config', 'AW-948388217');
\t</script>
\t\t
    <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.3.1.min.js\" integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\" crossorigin=\"anonymous\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugins/jquery/jquery.magnific-popup.js"), "html", null, true);
        yield "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/includes/popup-modal.js"), "html", null, true);
        yield "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/includes/consts.js"), "html", null, true);
        yield "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/includes/core.js"), "html", null, true);
        yield "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/includes/panel.js"), "html", null, true);
        yield "\"></script>
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.4/js.cookie.min.js\" ></script>
    
    <script type=\"text/javascript\" defer=\"defer\" src=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/includes/slider.js"), "html", null, true);
        yield "\"></script>


    ";
        // line 58
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 60
        yield "
    ";
        // line 61
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 64
        yield "    <scrip src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/script.js"), "html", null, true);
        yield "\"></script>
    
</head>

<body class=\"templateHome\">
<!-- Google Tag Manager (noscript) -->
<style>
    a:focus, button:focus, input:focus {
        outline: 5px solid #00cc11!important;
        outline-offset: 2px!important;
    }
</style>
<div id=\"overbeau\"></div>
<div id=\"cookies-infos\" style=\"display:none;\">
    <div class=\"InnerContent\">
        <p>
            En poursuivant votre navigation sur ce site, vous acceptez l'utilisation de cookies nous permettant de réaliser des statistiques de visites et de gérer votre connexion. <a href=\"https://www.forest-hill.fr/pages/cookies\" title=\"CGU\">En savoir plus</a>
            <span class=\"off\"><i class=\"icon-close\"></i></span>
        </p>
    </div>
</div>
<header>
    <div class=\"headerTop\">
        <div class=\"InnerContent\">
            <ul class=\"log-btn\">
                <li><a href=\"https://reservation.forest-hill.fr/\" ><i class=\"icon-log-in-plein\"></i>Je réserve</a></li>
                <li><a href=\"http://www.forest-hill.pro/espacepro.html\" target=\"_blank\"><i class=\"icon-suitcase\"></i>Espace pro</a></li>
            </ul>

            <ul class=\"blockSocial\">
                <li><a href=\"https://www.facebook.com/ForestHill.fb/\" target=\"_blank\"><i class=\"icon-facebook\"></i></a></li>
                <li><a href=\"https://twitter.com/clubsforesthill\" target=\"_blank\"><i class=\"icon-twitter\"></i></a></li>
                <li><a href=\"https://www.instagram.com/clubsforesthill/\" target=\"_blank\"><i class=\"icon-instagram\"></i></a></li>
            </ul>
        </div>
    </div>
    <div class=\"header\">
        <div class=\"InnerContent\">
            <div id=\"btn-navigation\" class=\"btn-navigation\" >
                <a href=\"\">
                    <span class=\"line line-01\"></span>
                    <span class=\"line line-02\"></span>
                    <span class=\"line line-03\"></span>
                </a>
            </div>
            <div class=\"logo\">
                <a href=\"https://www.forest-hill.fr/\" title=\"Forest Hill\">
                    <i class=\"icon-forest-hill\"></i>
                </a>
            </div>

            <div class=\"log-btn--mobile\">
                <a href=\"https://www.forest-hill.fr/profil/\" ><i class=\"icon-log-in-plein\"></i></a>
            </div>
        </div>
    </div>
</header>

<nav id=\"nav-mobile\" class=\"main-menu\">
    <div class=\"InnerContent\">
        <div class=\"headerMobileNav\">
            <div class=\"logo--mobile\">
                <a href=\"https://www.forest-hill.fr/\" title=\"Forest Hill\">
                    <i class=\"icon-forest-hill\"></i>
                </a>
            </div>
            <div class=\"close-nav\">
                <i class=\"dripicon-cross\"></i>
            </div>
        </div>
        <ul class=\"log-nav--mobile\">
            <li>
                <a href=\"https://www.forest-hill.fr/profil/\" ><i class=\"icon-log-in-plein\"></i> Mon compte</a>
            </li>
            <li>
                <a href=\"http://www.forest-hill.pro/espacepro.html\" target=\"_blank\" ><i class=\"icon-suitcase\"></i> Espace Pro</a>
            </li>
        </ul>
        <ul class=\"primary-nav\">
            <li >
                <a href=\"https://www.forest-hill.fr/vos-clubs-a-paris\" title=\"Les Clubs\">Clubs</a>
            </li>
            <li >
                <a href=\"#\">Activités</a>
                <ul class=\"sub-nav\">
                                            <li>
                            <a href=\"https://www.forest-hill.fr/activites/cardio\" title=\"Cardio\"><span>Cardio</span></a>
                        </li>
                                            <li>
                            <a href=\"https://www.forest-hill.fr/activites/renforcement-musculaire\" title=\"Renforcement musculaire\"><span>Renforcement musculaire</span></a>
                        </li>
                                            <li>
                            <a href=\"https://www.forest-hill.fr/activites/team-training\" title=\"Team training\"><span>Team training</span></a>
                        </li>
                                            <li>
                            <a href=\"https://www.forest-hill.fr/activites/danse\" title=\"Danse\"><span>Danse</span></a>
                        </li>
                                            <li>
                            <a href=\"https://www.forest-hill.fr/activites/sports-de-raquette\" title=\"Sports de raquette\"><span>Sports de raquette</span></a>
                        </li>
                                            <li>
                            <a href=\"https://www.forest-hill.fr/activites/aquagym\" title=\"Aquagym\"><span>Aquagym</span></a>
                        </li>
                                            <li>
                            <a href=\"https://www.forest-hill.fr/activites/detente-et-bien-etre\" title=\"Détente et bien-être\"><span>Détente et bien-être</span></a>
                        </li>
                                            <li>
                            <a href=\"https://www.forest-hill.fr/activites/boxe-grappling\" title=\"Boxe / Grappling\"><span>Boxe / Grappling</span></a>
                        </li>
                                    </ul>
            </li>
            <li><a href=\"#\">Planning</a>
                <ul class=\"sub-nav\">
                                            <li>
                            <a href=\"https://www.forest-hill.fr/club/forest-hill-aquaboulevard#planning\" title=\"Forest Hill Aquaboulevard\"><span>Forest Hill Aquaboulevard</span></a>
                        </li>
                                            <li>
                            <a href=\"https://www.forest-hill.fr/club/forest-hill-la-defense#planning\" title=\"Forest Hill La Défense\"><span>Forest Hill La Défense</span></a>
                        </li>
                                            <li>
                            <a href=\"https://www.forest-hill.fr/club/forest-hill-timing-paris-sud#planning\" title=\"Forest Hill Timing Paris Sud\"><span>Forest Hill Timing Paris Sud</span></a>
                        </li>
                                            <li>
                            <a href=\"https://www.forest-hill.fr/club/forest-hill-la-marche-marnes-la-coquette#planning\" title=\"Forest Hill La Marche-Marnes-La-Coquette\"><span>Forest Hill La Marche-Marnes-La-Coquette</span></a>
                        </li>
                                            <li>
                            <a href=\"https://www.forest-hill.fr/club/forest-hill-versailles#planning\" title=\"Forest Hill Versailles\"><span>Forest Hill Versailles</span></a>
                        </li>
                                            <li>
                            <a href=\"https://www.forest-hill.fr/club/meudon-bord-de-seine#planning\" title=\"Meudon Bord de Seine\"><span>Meudon Bord de Seine</span></a>
                        </li>
                                    </ul>
            </li>
            <li ><a href=\"https://www.forest-hill.fr/Formules\" title=\"Nos formules\">Formules</a></li>

            <li ><a href=\"https://www.forest-hill.fr/contact\" title=\"Contact\">Contact</a></li>

            <li><a target=\"_blank\" href=\"https://www.sport-booking.com/1__clubs-forest-hill?groupcode=FORESTHILL\" class=\"login cf\" target=\"_blank\">Je m'abonne</a></li>
        </ul>
        <div class=\"action-cta\">
                            <a href=\"https://www.forest-hill.fr/profitez-dune-seance-decouverte-gratuite\" title=\"Séance découverte gratuite\">Séance découverte gratuite</a>
                    </div>

        <ul class=\"blockSocial\">
            <li>Suivez-nous :</li>
            <li><a href=\"https://www.facebook.com/ForestHill.fb/\" target=\"_blank\"><i class=\"icon-facebook\"></i></a></li>
            <li><a href=\"https://www.instagram.com/clubsforesthill/\" target=\"_blank\"><i class=\"icon-instagram\"></i></a></li>
        </ul>
    </div>
</nav>
<main id=\"content\" class=\"main-wrap home\">
    ";
        // line 215
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 216
        yield "    
</main>
<footer class=\"footer\">
    <div class=\"apps-footer\">
        <div>
            <ul>
                <li>Réservez vos cours sur notre application</li>
                <li><a href=\"https://itunes.apple.com/fr/app/forest-hill/id1191775516?l=fr&ls=1&mt=8\"><img src=\"";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/app-store-footer.png"), "html", null, true);
        yield "\" alt=\"Application Apple\"></a></li>
                <li><a href=\"https://play.google.com/store/apps/details?id=fr.foresthill.foresthill\"><img src=\"";
        // line 224
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/google-play-footer.png"), "html", null, true);
        yield "\" alt=\"Application Androïd\"></a></li>
            </ul>
        </div>
    </div>
    <div class=\"linkFooter\">
            <div>
                <div class=\"title-footer\">Nos clubs</div>
                <ul>
                    <li><a href=\"https://www.forest-hill.fr/club/forest-hill-aquaboulevard\" title=\"Forest Hill Aquaboulevard\">Forest Hill Aquaboulevard</a></li>
                    <li><a href=\"https://www.forest-hill.fr/club/forest-hill-la-defense\" title=\"Forest Hill La Défense\">Forest Hill La Défense</a></li>
                    <li><a href=\"https://www.forest-hill.fr/club/forest-hill-timing-paris-sud\" title=\"Forest Hill Timing Paris Sud\">Forest Hill Timing Paris Sud</a></li>
                    <li><a href=\"https://www.forest-hill.fr/club/forest-hill-la-marche-marnes-la-coquette\" title=\"Forest Hill La Marche-Marnes-La-Coquette\">Forest Hill La Marche-Marnes-La-Coquette</a></li>
                    <li><a href=\"https://www.forest-hill.fr/club/forest-hill-versailles\" title=\"Forest Hill Versailles\">Forest Hill Versailles</a></li>
                    <li><a href=\"https://www.forest-hill.fr/club/meudon-bord-de-seine\" title=\"Meudon Bord de Seine\">Meudon Bord de Seine</a></li>
                </ul>
            </div>
            <div>
                <div class=\"title-footer\">L'esprit forest hill</div>
                <ul>
                    <li><a href=\"https://www.sport-booking.com/1__clubs-forest-hill?groupcode=FORESTHILL\"  target=\"_blank\"  title=\"Sport Booking\">Sport Booking</a></li>
                    <li><a href=\"http://www.golftennisjardy.com/\"  target=\"_blank\"  title=\"Haras de Jardy - Vaucresson\">Haras de Jardy - Vaucresson</a></li>
                    <li><a href=\"https://www.foresthill-hotels.com/\"  target=\"_blank\"  title=\"Hôtel Paris Meudon Velizy\">Hôtel Paris Meudon Velizy</a></li>
                    <li><a href=\"https://www.aquaboulevard.fr/\"  target=\"_blank\"  title=\"Le parc Aquaboulevard\">Le parc Aquaboulevard</a></li>
                    <li><a href=\"https://www.forest-hill.fr/list/evenements\"  title=\"Nos événements\">Nos événements</a></li>
                    <li><a href=\"https://www.forest-hill.fr/pages/cookies\"  title=\"Cookies\">Cookies</a></li>
                </ul>
            </div>
            <div>
                <div class=\"title-footer\">Contact</div>
                <ul>
                    <li><a href=\"https://www.forest-hill.fr/contact\"  title=\"Nous contacter\">Nous contacter</a></li>
                    <li><a href=\"https://www.forest-hill.fr/pages/mentions-legales\"  title=\"Mentions légales\">Mentions légales</a></li>
                    <li><a href=\"https://www.forest-hill.fr/pages/cgu\"  title=\"Conditions générales de ventes et d&#039;utilisations\">CGU</a></li>
                    <li><a href=\"https://www.forest-hill.fr/pages/rgpd\"  title=\"Politique de protection des donnees personnelles\">Politique de protection des donnees personnelles</a></li>
                    <li><a href=\"http://www.forest-hill.pro/espacepro.html\"  target=\"_blank\"  title=\"Espace Pro\">Espace Pro</a></li>
                </ul>
                <ul class=\"blockSocial\">
                    <li><a href=\"https://www.facebook.com/ForestHill.fb/\" target=\"_blank\"><i class=\"icon-facebook\"></i></a></li>
                    <li><a href=\"https://twitter.com/clubsforesthill\" target=\"_blank\"><i class=\"icon-twitter\"></i></a></li>
                    <li><a href=\"https://www.instagram.com/clubsforesthill/\" target=\"_blank\"><i class=\"icon-instagram\"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>


<script src=\"/bundles/chorusfront/js/includes/menu.js\"></script>
<script src=\"/bundles/chorusfront/js/includes/nav-mobile.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js\" integrity=\"sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js\" integrity=\"sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy\" crossorigin=\"anonymous\"></script>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Clubs Forest Hill : Remise en forme, fitness, Les Mills, zumba, tennis, squash, sauna, hammam et piscines";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 58
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 59
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 61
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        yield "        ";
        yield from $this->unwrap()->yieldBlock('importmap', $context, $blocks);
        // line 63
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 62
    public function block_importmap($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\ImportMapRuntime')->importmap("app");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 215
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  462 => 215,  442 => 62,  431 => 63,  428 => 62,  418 => 61,  407 => 59,  397 => 58,  377 => 5,  312 => 224,  308 => 223,  299 => 216,  297 => 215,  142 => 64,  140 => 61,  137 => 60,  135 => 58,  129 => 55,  122 => 51,  118 => 50,  114 => 49,  110 => 48,  106 => 47,  71 => 15,  66 => 13,  55 => 5,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html lang=\"fr\">

<head>
    <title>{% block title %}Clubs Forest Hill : Remise en forme, fitness, Les Mills, zumba, tennis, squash, sauna, hammam et piscines{% endblock %}</title>
    <meta name=\"description\" content=\"Les 6 clubs Forest Hill vous accueillent toute l&#039;année, à Paris et en Ile de France pour pratiquer zumba, aquabike, RPM, boxe et 60 autres activités de remise en forme\" />  
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\" />

    <link rel=\"icon\" type=\"image/png\" href=\"/bundles/chorusfront/img/favicon.png\" />
     

    <link rel=\"stylesheet\" href=\"{{asset('css/cbdcfe9.css')}}\" />
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('css/override.css')}}\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>
    <script>
    (
        function(w,d,s,l,i){
            w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});
            var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            }
        )
         
        (window,document,'script','dataLayer','GTM-P6WR3VQ');
    </script>
        
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NS2JMZSK');
    </script>
       
\t<script async src=\"https://www.googletagmanager.com/gtag/js?id=AW-948388217\"></script>
\t<script>
  \t\twindow.dataLayer = window.dataLayer || [];
  \t\tfunction gtag(){dataLayer.push(arguments);}
  \t\tgtag('js', new Date());
  \t\tgtag('config', 'AW-948388217');
\t</script>
\t\t
    <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.3.1.min.js\" integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\" crossorigin=\"anonymous\"></script>
    <script type=\"text/javascript\" src=\"{{asset('js/plugins/jquery/jquery.magnific-popup.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{asset('js/includes/popup-modal.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{asset('js/includes/consts.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{asset('js/includes/core.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{asset('js/includes/panel.js')}}\"></script>
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.4/js.cookie.min.js\" ></script>
    
    <script type=\"text/javascript\" defer=\"defer\" src=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.min.js\"></script>
    <script type=\"text/javascript\" src=\"{{asset('js/includes/slider.js')}}\"></script>


    {% block stylesheets %}
    {% endblock %}

    {% block javascripts %}
        {% block importmap %}{{ importmap('app') }}{% endblock %}
    {% endblock %}
    <scrip src=\"{{asset('js/script.js')}}\"></script>
    
</head>

<body class=\"templateHome\">
<!-- Google Tag Manager (noscript) -->
<style>
    a:focus, button:focus, input:focus {
        outline: 5px solid #00cc11!important;
        outline-offset: 2px!important;
    }
</style>
<div id=\"overbeau\"></div>
<div id=\"cookies-infos\" style=\"display:none;\">
    <div class=\"InnerContent\">
        <p>
            En poursuivant votre navigation sur ce site, vous acceptez l'utilisation de cookies nous permettant de réaliser des statistiques de visites et de gérer votre connexion. <a href=\"https://www.forest-hill.fr/pages/cookies\" title=\"CGU\">En savoir plus</a>
            <span class=\"off\"><i class=\"icon-close\"></i></span>
        </p>
    </div>
</div>
<header>
    <div class=\"headerTop\">
        <div class=\"InnerContent\">
            <ul class=\"log-btn\">
                <li><a href=\"https://reservation.forest-hill.fr/\" ><i class=\"icon-log-in-plein\"></i>Je réserve</a></li>
                <li><a href=\"http://www.forest-hill.pro/espacepro.html\" target=\"_blank\"><i class=\"icon-suitcase\"></i>Espace pro</a></li>
            </ul>

            <ul class=\"blockSocial\">
                <li><a href=\"https://www.facebook.com/ForestHill.fb/\" target=\"_blank\"><i class=\"icon-facebook\"></i></a></li>
                <li><a href=\"https://twitter.com/clubsforesthill\" target=\"_blank\"><i class=\"icon-twitter\"></i></a></li>
                <li><a href=\"https://www.instagram.com/clubsforesthill/\" target=\"_blank\"><i class=\"icon-instagram\"></i></a></li>
            </ul>
        </div>
    </div>
    <div class=\"header\">
        <div class=\"InnerContent\">
            <div id=\"btn-navigation\" class=\"btn-navigation\" >
                <a href=\"\">
                    <span class=\"line line-01\"></span>
                    <span class=\"line line-02\"></span>
                    <span class=\"line line-03\"></span>
                </a>
            </div>
            <div class=\"logo\">
                <a href=\"https://www.forest-hill.fr/\" title=\"Forest Hill\">
                    <i class=\"icon-forest-hill\"></i>
                </a>
            </div>

            <div class=\"log-btn--mobile\">
                <a href=\"https://www.forest-hill.fr/profil/\" ><i class=\"icon-log-in-plein\"></i></a>
            </div>
        </div>
    </div>
</header>

<nav id=\"nav-mobile\" class=\"main-menu\">
    <div class=\"InnerContent\">
        <div class=\"headerMobileNav\">
            <div class=\"logo--mobile\">
                <a href=\"https://www.forest-hill.fr/\" title=\"Forest Hill\">
                    <i class=\"icon-forest-hill\"></i>
                </a>
            </div>
            <div class=\"close-nav\">
                <i class=\"dripicon-cross\"></i>
            </div>
        </div>
        <ul class=\"log-nav--mobile\">
            <li>
                <a href=\"https://www.forest-hill.fr/profil/\" ><i class=\"icon-log-in-plein\"></i> Mon compte</a>
            </li>
            <li>
                <a href=\"http://www.forest-hill.pro/espacepro.html\" target=\"_blank\" ><i class=\"icon-suitcase\"></i> Espace Pro</a>
            </li>
        </ul>
        <ul class=\"primary-nav\">
            <li >
                <a href=\"https://www.forest-hill.fr/vos-clubs-a-paris\" title=\"Les Clubs\">Clubs</a>
            </li>
            <li >
                <a href=\"#\">Activités</a>
                <ul class=\"sub-nav\">
                                            <li>
                            <a href=\"https://www.forest-hill.fr/activites/cardio\" title=\"Cardio\"><span>Cardio</span></a>
                        </li>
                                            <li>
                            <a href=\"https://www.forest-hill.fr/activites/renforcement-musculaire\" title=\"Renforcement musculaire\"><span>Renforcement musculaire</span></a>
                        </li>
                                            <li>
                            <a href=\"https://www.forest-hill.fr/activites/team-training\" title=\"Team training\"><span>Team training</span></a>
                        </li>
                                            <li>
                            <a href=\"https://www.forest-hill.fr/activites/danse\" title=\"Danse\"><span>Danse</span></a>
                        </li>
                                            <li>
                            <a href=\"https://www.forest-hill.fr/activites/sports-de-raquette\" title=\"Sports de raquette\"><span>Sports de raquette</span></a>
                        </li>
                                            <li>
                            <a href=\"https://www.forest-hill.fr/activites/aquagym\" title=\"Aquagym\"><span>Aquagym</span></a>
                        </li>
                                            <li>
                            <a href=\"https://www.forest-hill.fr/activites/detente-et-bien-etre\" title=\"Détente et bien-être\"><span>Détente et bien-être</span></a>
                        </li>
                                            <li>
                            <a href=\"https://www.forest-hill.fr/activites/boxe-grappling\" title=\"Boxe / Grappling\"><span>Boxe / Grappling</span></a>
                        </li>
                                    </ul>
            </li>
            <li><a href=\"#\">Planning</a>
                <ul class=\"sub-nav\">
                                            <li>
                            <a href=\"https://www.forest-hill.fr/club/forest-hill-aquaboulevard#planning\" title=\"Forest Hill Aquaboulevard\"><span>Forest Hill Aquaboulevard</span></a>
                        </li>
                                            <li>
                            <a href=\"https://www.forest-hill.fr/club/forest-hill-la-defense#planning\" title=\"Forest Hill La Défense\"><span>Forest Hill La Défense</span></a>
                        </li>
                                            <li>
                            <a href=\"https://www.forest-hill.fr/club/forest-hill-timing-paris-sud#planning\" title=\"Forest Hill Timing Paris Sud\"><span>Forest Hill Timing Paris Sud</span></a>
                        </li>
                                            <li>
                            <a href=\"https://www.forest-hill.fr/club/forest-hill-la-marche-marnes-la-coquette#planning\" title=\"Forest Hill La Marche-Marnes-La-Coquette\"><span>Forest Hill La Marche-Marnes-La-Coquette</span></a>
                        </li>
                                            <li>
                            <a href=\"https://www.forest-hill.fr/club/forest-hill-versailles#planning\" title=\"Forest Hill Versailles\"><span>Forest Hill Versailles</span></a>
                        </li>
                                            <li>
                            <a href=\"https://www.forest-hill.fr/club/meudon-bord-de-seine#planning\" title=\"Meudon Bord de Seine\"><span>Meudon Bord de Seine</span></a>
                        </li>
                                    </ul>
            </li>
            <li ><a href=\"https://www.forest-hill.fr/Formules\" title=\"Nos formules\">Formules</a></li>

            <li ><a href=\"https://www.forest-hill.fr/contact\" title=\"Contact\">Contact</a></li>

            <li><a target=\"_blank\" href=\"https://www.sport-booking.com/1__clubs-forest-hill?groupcode=FORESTHILL\" class=\"login cf\" target=\"_blank\">Je m'abonne</a></li>
        </ul>
        <div class=\"action-cta\">
                            <a href=\"https://www.forest-hill.fr/profitez-dune-seance-decouverte-gratuite\" title=\"Séance découverte gratuite\">Séance découverte gratuite</a>
                    </div>

        <ul class=\"blockSocial\">
            <li>Suivez-nous :</li>
            <li><a href=\"https://www.facebook.com/ForestHill.fb/\" target=\"_blank\"><i class=\"icon-facebook\"></i></a></li>
            <li><a href=\"https://www.instagram.com/clubsforesthill/\" target=\"_blank\"><i class=\"icon-instagram\"></i></a></li>
        </ul>
    </div>
</nav>
<main id=\"content\" class=\"main-wrap home\">
    {% block body %}{% endblock %}
    
</main>
<footer class=\"footer\">
    <div class=\"apps-footer\">
        <div>
            <ul>
                <li>Réservez vos cours sur notre application</li>
                <li><a href=\"https://itunes.apple.com/fr/app/forest-hill/id1191775516?l=fr&ls=1&mt=8\"><img src=\"{{asset('images/app-store-footer.png')}}\" alt=\"Application Apple\"></a></li>
                <li><a href=\"https://play.google.com/store/apps/details?id=fr.foresthill.foresthill\"><img src=\"{{asset('images/google-play-footer.png')}}\" alt=\"Application Androïd\"></a></li>
            </ul>
        </div>
    </div>
    <div class=\"linkFooter\">
            <div>
                <div class=\"title-footer\">Nos clubs</div>
                <ul>
                    <li><a href=\"https://www.forest-hill.fr/club/forest-hill-aquaboulevard\" title=\"Forest Hill Aquaboulevard\">Forest Hill Aquaboulevard</a></li>
                    <li><a href=\"https://www.forest-hill.fr/club/forest-hill-la-defense\" title=\"Forest Hill La Défense\">Forest Hill La Défense</a></li>
                    <li><a href=\"https://www.forest-hill.fr/club/forest-hill-timing-paris-sud\" title=\"Forest Hill Timing Paris Sud\">Forest Hill Timing Paris Sud</a></li>
                    <li><a href=\"https://www.forest-hill.fr/club/forest-hill-la-marche-marnes-la-coquette\" title=\"Forest Hill La Marche-Marnes-La-Coquette\">Forest Hill La Marche-Marnes-La-Coquette</a></li>
                    <li><a href=\"https://www.forest-hill.fr/club/forest-hill-versailles\" title=\"Forest Hill Versailles\">Forest Hill Versailles</a></li>
                    <li><a href=\"https://www.forest-hill.fr/club/meudon-bord-de-seine\" title=\"Meudon Bord de Seine\">Meudon Bord de Seine</a></li>
                </ul>
            </div>
            <div>
                <div class=\"title-footer\">L'esprit forest hill</div>
                <ul>
                    <li><a href=\"https://www.sport-booking.com/1__clubs-forest-hill?groupcode=FORESTHILL\"  target=\"_blank\"  title=\"Sport Booking\">Sport Booking</a></li>
                    <li><a href=\"http://www.golftennisjardy.com/\"  target=\"_blank\"  title=\"Haras de Jardy - Vaucresson\">Haras de Jardy - Vaucresson</a></li>
                    <li><a href=\"https://www.foresthill-hotels.com/\"  target=\"_blank\"  title=\"Hôtel Paris Meudon Velizy\">Hôtel Paris Meudon Velizy</a></li>
                    <li><a href=\"https://www.aquaboulevard.fr/\"  target=\"_blank\"  title=\"Le parc Aquaboulevard\">Le parc Aquaboulevard</a></li>
                    <li><a href=\"https://www.forest-hill.fr/list/evenements\"  title=\"Nos événements\">Nos événements</a></li>
                    <li><a href=\"https://www.forest-hill.fr/pages/cookies\"  title=\"Cookies\">Cookies</a></li>
                </ul>
            </div>
            <div>
                <div class=\"title-footer\">Contact</div>
                <ul>
                    <li><a href=\"https://www.forest-hill.fr/contact\"  title=\"Nous contacter\">Nous contacter</a></li>
                    <li><a href=\"https://www.forest-hill.fr/pages/mentions-legales\"  title=\"Mentions légales\">Mentions légales</a></li>
                    <li><a href=\"https://www.forest-hill.fr/pages/cgu\"  title=\"Conditions générales de ventes et d&#039;utilisations\">CGU</a></li>
                    <li><a href=\"https://www.forest-hill.fr/pages/rgpd\"  title=\"Politique de protection des donnees personnelles\">Politique de protection des donnees personnelles</a></li>
                    <li><a href=\"http://www.forest-hill.pro/espacepro.html\"  target=\"_blank\"  title=\"Espace Pro\">Espace Pro</a></li>
                </ul>
                <ul class=\"blockSocial\">
                    <li><a href=\"https://www.facebook.com/ForestHill.fb/\" target=\"_blank\"><i class=\"icon-facebook\"></i></a></li>
                    <li><a href=\"https://twitter.com/clubsforesthill\" target=\"_blank\"><i class=\"icon-twitter\"></i></a></li>
                    <li><a href=\"https://www.instagram.com/clubsforesthill/\" target=\"_blank\"><i class=\"icon-instagram\"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>


<script src=\"/bundles/chorusfront/js/includes/menu.js\"></script>
<script src=\"/bundles/chorusfront/js/includes/nav-mobile.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js\" integrity=\"sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js\" integrity=\"sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy\" crossorigin=\"anonymous\"></script>
</body>
</html>
", "base.html.twig", "/Users/hantour/Documents/FERIEL/forest-hill/templates/base.html.twig");
    }
}
