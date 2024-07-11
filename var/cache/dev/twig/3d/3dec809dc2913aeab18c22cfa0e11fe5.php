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

/* home/index.html.twig */
class __TwigTemplate_fdb8115a0c263d6970de3a9b7c964f3e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <article>
        <section class=\"slideshowHome\">
            <div class=\"sliderHomeContainer clearfix\">
                <div class=\"rsContent\">
                    <a class=\"sliderMobile\" href=\"http://www.forest-hill.pro/web/medias/planning-meudon-bds.pdf\" title=\"Je consulte le planning\" ><img  src=\"/images/SliderPicture/7/5//images/sliderMobile/32fd4495-7e95-4b9b-a8d1-27077f0399aa.jpg\" alt=\"NOUVEAU CLUB FOREST HILL BORD DE SEINE! OUVERT 7 J/7, A 5 MIN DE CHEZ VOUS !\" title=\"NOUVEAU CLUB FOREST HILL BORD DE SEINE! OUVERT 7 J/7, A 5 MIN DE CHEZ VOUS !\" /></a>
                    <img src=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/SliderPicture/32fd4495-7e95-4b9b-a8d1-27077f0399aa.jpg"), "html", null, true);
        yield "\" class=\"rsImg\" alt=\"NOUVEAU CLUB FOREST HILL BORD DE SEINE! OUVERT 7 J/7, A 5 MIN DE CHEZ VOUS !\" title=\"NOUVEAU CLUB FOREST HILL BORD DE SEINE! OUVERT 7 J/7, A 5 MIN DE CHEZ VOUS !\" />
                    <div class=\"absoluteContainer\">
                        <div class=\"InnerContent\">
                             <div class=\"infoBlock\">
                                <div class=\"titleSlider\">NOUVEAU CLUB FOREST HILL BORD DE SEINE! OUVERT 7 J/7, A 5 MIN DE CHEZ VOUS !</div>

                                <div class=\"action-cta\">
                                     <a href=\"http://www.forest-hill.pro/web/medias/planning-meudon-bds.pdf\" title=\"Je consulte le planning\" >Je consulte le planning</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"rsContent\">
                    <a class=\"sliderMobile\" href=\"https://www.forest-hill.fr/activite/padel\" title=\"Réservez dès maintenant\" ><img  src=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/SliderPicture/affiche-fh-padel-2023-09-2-page-0001.png"), "html", null, true);
        yield "\" alt=\"N°1 du Padel à Paris &amp; en Île-de-France, Forest Hill vous offre 30 pistes dans 3 clubs\" title=\"N°1 du Padel à Paris &amp; en Île-de-France, Forest Hill vous offre 30 pistes dans 3 clubs\" /></a>
                    <img src=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/SliderPicture/affiche-fh-padel-2023-09-2-page-0001.png"), "html", null, true);
        yield "\" class=\"rsImg\" alt=\"N°1 du Padel à Paris &amp; en Île-de-France, Forest Hill vous offre 30 pistes dans 3 clubs\" title=\"N°1 du Padel à Paris &amp; en Île-de-France, Forest Hill vous offre 30 pistes dans 3 clubs\" />
                    <div class=\"absoluteContainer\">
                        <div class=\"InnerContent\">
                            <div class=\"infoBlock\">
                                <div class=\"titleSlider\">N°1 du Padel à Paris &amp; en Île-de-France, Forest Hill vous offre 30 pistes dans 3 clubs</div>

                                <div class=\"action-cta\">
                                        <a href=\"https://www.forest-hill.fr/activite/padel\" title=\"Réservez dès maintenant\" >Réservez dès maintenant</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class=\"highlight\">
            <h2>Forest Hill : le club aux multiples avantages</h2>
            <div class=\"sliderHighlightContainer clearfix\">
                <div class=\"rsContent\">
                    <div class=\"iconHighlight\"><i class=\"icon-friends\"></i></div> 
                    <h3 class=\"titleHighlight\">vos amis sont nos amis</h3>
                    <div class=\"descriptionHighlight\">Avec l’option Friends, emmenez gratuitement la personne de votre choix à votre séance !</div>
                </div>
                <div class=\"rsContent\">
                    <div class=\"iconHighlight\"><i class=\"icon-open\"></i></div>
                    <h3 class=\"titleHighlight\">Ouvert de 7h à minuit</h3>
                    <div class=\"descriptionHighlight\">Tôt le matin, ou tard le soir, les portes de votre club sont ouvertes même les jours fériés !</div>
                </div>
                <div class=\"rsContent\">
                    <div class=\"iconHighlight\"><i class=\"icon-sifflet\"></i></div>
                    <h3 class=\"titleHighlight\">120 coachs disponibles</h3>
                    <div class=\"descriptionHighlight\">À votre écoute, nos coachs vous feront progresser et seront là pour vous accompagner tout au long de votre séance</div>
                </div>
                <div class=\"rsContent\">
                    <div class=\"iconHighlight\"><i class=\"icon-plane\"></i></div>
                    <h3 class=\"titleHighlight\">la formule lib’</h3>
                    <div class=\"descriptionHighlight\">La formule Lib’ vous permet de suspendre votre abonnement dès que vous le souhaitez</div>
                </div>
                <div class=\"rsContent\">
                    <div class=\"iconHighlight\"><i class=\"icon-swimming-pool\"></i></div>
                    <h3 class=\"titleHighlight\">aquaboulevard</h3>
                    <div class=\"descriptionHighlight\">Rendez-vous gratuit et en illimité dans le célèbre parc aquatique !</div>
                </div>
            </div>
        </section>

        <section class=\"selectClubs\">
            <h2>Trouvez votre club Forest Hill</h2>
            <div class=\"InnerContent\">
                <div class=\"itemClub\">
                    <figure>
                        <a href=\"https://www.forest-hill.fr/club/forest-hill-aquaboulevard\" title=\"Forest Hill Aquaboulevard\">
                            <img src=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/club/club.jpg"), "html", null, true);
        yield "\" alt=\"Forest Hill Aquaboulevard#}\" />
                        </a>
                    </figure>
                    <h3 class=\"titleHighlight\">Forest Hill Aquaboulevard</h3>
                    <a href=\"https://www.forest-hill.fr/club/forest-hill-aquaboulevard\" title=\"Découvrir le club\">Découvrir le club</a>
                </div>
                <div class=\"itemClub\">
                    <figure>
                        <a href=\"https://www.forest-hill.fr/club/forest-hill-la-defense\" title=\"Forest Hill La Défense\">
                            <img src=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/Club/img-fh-defense-1-ok.jpg"), "html", null, true);
        yield "\" alt=\"Forest Hill La Défense#}\" />
                        </a>
                    </figure>
                    <h3 class=\"titleHighlight\">Forest Hill La Défense</h3>
                    <a href=\"https://www.forest-hill.fr/club/forest-hill-la-defense\" title=\"Découvrir le club\">Découvrir le club</a>
                </div>
                <div class=\"itemClub\">
                    <figure>
                        <a href=\"https://www.forest-hill.fr/club/forest-hill-timing-paris-sud\" title=\"Forest Hill Timing Paris Sud\">
                            <img src=\"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/Club/img-fh-timing-1-ok.jpg"), "html", null, true);
        yield "\" alt=\"Forest Hill Timing Paris Sud#}\" />
                        </a>
                    </figure>
                    <h3 class=\"titleHighlight\">Forest Hill Timing Paris Sud</h3>
                    <a href=\"https://www.forest-hill.fr/club/forest-hill-timing-paris-sud\" title=\"Découvrir le club\">Découvrir le club</a>
                </div>
            </div>
            <div class=\"action-cta\"><a href=\"https://www.forest-hill.fr/vos-clubs-a-paris\" title=\"6 clubs en Île de France\">6 clubs en Île de France</a></div>
        </section>

    <section class=\"listActivities\">
        <h2>Plus de 80 cours et activités à découvrir !</h2>
        <div class=\"InnerContent\">
            <div class=\"activities\">
                <div class=\"activitiesContainer\">
                    <div class=\"itemActivity\">
                        <figure class=\"banner--activities\">
                            <a href=\"https://www.forest-hill.fr/activite/dance-hall\" title=\"Ragga Dance Hall\">
                                <img src=\"";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Activity/1200x474-zumba.jpg"), "html", null, true);
        yield "\" alt=\"Ragga Dance Hall\" />
                            </a>
                        </figure>
                        <h3>
                            <a href=\"https://www.forest-hill.fr/activite/dance-hall\" title=\"Ragga Dance Hall\">Zumba</a>
                        </h3>
                    </div>
                    <div class=\"itemActivity\">
                        <figure class=\"banner--activities\">
                            <a href=\"https://www.forest-hill.fr/activite/aqua-impact\" title=\"Tai Chi Chuan\">
                                <img class=\"img-double\" src=\"";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Activity/1200x474-tai-chi-chuan.jpg"), "html", null, true);
        yield "\" alt=\"Tai Chi Chuan\" />
                                <img src=\"";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Activity/1200x474-tai-chi-chuan.jpg"), "html", null, true);
        yield "\" alt=\"Tai Chi Chuan\" />
                            </a>
                        </figure>
                        <h3>
                            <a href=\"https://www.forest-hill.fr/activite/aqua-impact\" title=\"Tai Chi Chuan\">Tai Chi Chuan</a>
                        </h3>
                    </div>
                </div>
                <div class=\"activitiesContainer\">
                    <div class=\"itemActivity\">
                        <figure class=\"banner--activities\">
                            <a href=\"https://www.forest-hill.fr/activite/badminton-heures-pleines\" title=\"yoga\">
                                <img src=\"";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Activity/1200x474-yoga.jpg"), "html", null, true);
        yield "\" alt=\"yoga\" />
                            </a>
                        </figure>
                        <h3>
                            <a href=\"https://www.forest-hill.fr/activite/badminton-heures-pleines\" title=\"yoga\">yoga</a>
                        </h3>
                    </div>
                    <div class=\"itemActivity\">
                        <figure class=\"banner--activities\">
                            <a href=\"https://www.forest-hill.fr/activite/yoga-ashtanga\" title=\"Cross Training\">
                                <img src=\"";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Activity/1200x474-crosstraining.jpg"), "html", null, true);
        yield "\" alt=\"Cross Training\" />
                            </a>
                        </figure>
                        <h3>
                            <a href=\"https://www.forest-hill.fr/activite/yoga-ashtanga\" title=\"Cross Training\">Cross Training</a>
                        </h3>
                    </div>
                    <div class=\"itemActivity\">
                        <figure class=\"banner--activities\">
                            <a href=\"https://www.forest-hill.fr/activite/aqua-sculpt\" title=\"Lia\">
                                <img src=\"";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Activity/1200x474-lia.jpg"), "html", null, true);
        yield "\" alt=\"Lia\" />
                            </a>
                        </figure>
                        <h3>
                            <a href=\"https://www.forest-hill.fr/activite/aqua-sculpt\" title=\"Lia\">Lia</a>
                        </h3>
                    </div>
                </div>
                <div class=\"activitiesContainer\">
                    <div class=\"itemActivity\">
                        <figure class=\"banner--activities\">
                            <a href=\"https://www.forest-hill.fr/activite/meditation\" title=\"Meditation\">
                                <img class=\"img-double\" src=\"";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Activity/1200x474-afro.jpg"), "html", null, true);
        yield "\" alt=\"Afro\" />
                                <img src=\"";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Activity/1200x474-afro.jpg"), "html", null, true);
        yield "\" alt=\"Afro\" />
                            </a>
                        </figure>
                        <h3>
                            <a href=\"https://www.forest-hill.fr/activite/meditation\" title=\"Meditation\">Afro</a>
                        </h3>
                    </div>
                    <div class=\"itemActivity\">
                        <figure class=\"banner--activities\">
                            <a href=\"https://www.forest-hill.fr/activite/hiit-strong\" title=\"Posturall Ball\">
                                <img src=\"";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/img-activity-400x200.jpg"), "html", null, true);
        yield "\" alt=\"Posturall Ball\" />
                            </a>
                        </figure>
                        <h3>
                            <a href=\"https://www.forest-hill.fr/activite/hiit-strong\" title=\"Posturall Ball\">Posturall Ball</a>
                        </h3>
                    </div>
                </div>                
            </div>

        </div>

    </section>
</article>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/index.html.twig";
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
        return array (  310 => 182,  297 => 172,  293 => 171,  278 => 159,  265 => 149,  252 => 139,  237 => 127,  233 => 126,  220 => 116,  199 => 98,  187 => 89,  175 => 80,  118 => 26,  114 => 25,  97 => 11,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Clubs Forest Hill : Remise en forme, fitness, Les Mills, zumba, tennis, squash, sauna, hammam et piscines{% endblock %}

{% block body %}
    <article>
        <section class=\"slideshowHome\">
            <div class=\"sliderHomeContainer clearfix\">
                <div class=\"rsContent\">
                    <a class=\"sliderMobile\" href=\"http://www.forest-hill.pro/web/medias/planning-meudon-bds.pdf\" title=\"Je consulte le planning\" ><img  src=\"/images/SliderPicture/7/5//images/sliderMobile/32fd4495-7e95-4b9b-a8d1-27077f0399aa.jpg\" alt=\"NOUVEAU CLUB FOREST HILL BORD DE SEINE! OUVERT 7 J/7, A 5 MIN DE CHEZ VOUS !\" title=\"NOUVEAU CLUB FOREST HILL BORD DE SEINE! OUVERT 7 J/7, A 5 MIN DE CHEZ VOUS !\" /></a>
                    <img src=\"{{asset('images/SliderPicture/32fd4495-7e95-4b9b-a8d1-27077f0399aa.jpg')}}\" class=\"rsImg\" alt=\"NOUVEAU CLUB FOREST HILL BORD DE SEINE! OUVERT 7 J/7, A 5 MIN DE CHEZ VOUS !\" title=\"NOUVEAU CLUB FOREST HILL BORD DE SEINE! OUVERT 7 J/7, A 5 MIN DE CHEZ VOUS !\" />
                    <div class=\"absoluteContainer\">
                        <div class=\"InnerContent\">
                             <div class=\"infoBlock\">
                                <div class=\"titleSlider\">NOUVEAU CLUB FOREST HILL BORD DE SEINE! OUVERT 7 J/7, A 5 MIN DE CHEZ VOUS !</div>

                                <div class=\"action-cta\">
                                     <a href=\"http://www.forest-hill.pro/web/medias/planning-meudon-bds.pdf\" title=\"Je consulte le planning\" >Je consulte le planning</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"rsContent\">
                    <a class=\"sliderMobile\" href=\"https://www.forest-hill.fr/activite/padel\" title=\"Réservez dès maintenant\" ><img  src=\"{{asset('images/SliderPicture/affiche-fh-padel-2023-09-2-page-0001.png')}}\" alt=\"N°1 du Padel à Paris &amp; en Île-de-France, Forest Hill vous offre 30 pistes dans 3 clubs\" title=\"N°1 du Padel à Paris &amp; en Île-de-France, Forest Hill vous offre 30 pistes dans 3 clubs\" /></a>
                    <img src=\"{{asset('/images/SliderPicture/affiche-fh-padel-2023-09-2-page-0001.png')}}\" class=\"rsImg\" alt=\"N°1 du Padel à Paris &amp; en Île-de-France, Forest Hill vous offre 30 pistes dans 3 clubs\" title=\"N°1 du Padel à Paris &amp; en Île-de-France, Forest Hill vous offre 30 pistes dans 3 clubs\" />
                    <div class=\"absoluteContainer\">
                        <div class=\"InnerContent\">
                            <div class=\"infoBlock\">
                                <div class=\"titleSlider\">N°1 du Padel à Paris &amp; en Île-de-France, Forest Hill vous offre 30 pistes dans 3 clubs</div>

                                <div class=\"action-cta\">
                                        <a href=\"https://www.forest-hill.fr/activite/padel\" title=\"Réservez dès maintenant\" >Réservez dès maintenant</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class=\"highlight\">
            <h2>Forest Hill : le club aux multiples avantages</h2>
            <div class=\"sliderHighlightContainer clearfix\">
                <div class=\"rsContent\">
                    <div class=\"iconHighlight\"><i class=\"icon-friends\"></i></div> 
                    <h3 class=\"titleHighlight\">vos amis sont nos amis</h3>
                    <div class=\"descriptionHighlight\">Avec l’option Friends, emmenez gratuitement la personne de votre choix à votre séance !</div>
                </div>
                <div class=\"rsContent\">
                    <div class=\"iconHighlight\"><i class=\"icon-open\"></i></div>
                    <h3 class=\"titleHighlight\">Ouvert de 7h à minuit</h3>
                    <div class=\"descriptionHighlight\">Tôt le matin, ou tard le soir, les portes de votre club sont ouvertes même les jours fériés !</div>
                </div>
                <div class=\"rsContent\">
                    <div class=\"iconHighlight\"><i class=\"icon-sifflet\"></i></div>
                    <h3 class=\"titleHighlight\">120 coachs disponibles</h3>
                    <div class=\"descriptionHighlight\">À votre écoute, nos coachs vous feront progresser et seront là pour vous accompagner tout au long de votre séance</div>
                </div>
                <div class=\"rsContent\">
                    <div class=\"iconHighlight\"><i class=\"icon-plane\"></i></div>
                    <h3 class=\"titleHighlight\">la formule lib’</h3>
                    <div class=\"descriptionHighlight\">La formule Lib’ vous permet de suspendre votre abonnement dès que vous le souhaitez</div>
                </div>
                <div class=\"rsContent\">
                    <div class=\"iconHighlight\"><i class=\"icon-swimming-pool\"></i></div>
                    <h3 class=\"titleHighlight\">aquaboulevard</h3>
                    <div class=\"descriptionHighlight\">Rendez-vous gratuit et en illimité dans le célèbre parc aquatique !</div>
                </div>
            </div>
        </section>

        <section class=\"selectClubs\">
            <h2>Trouvez votre club Forest Hill</h2>
            <div class=\"InnerContent\">
                <div class=\"itemClub\">
                    <figure>
                        <a href=\"https://www.forest-hill.fr/club/forest-hill-aquaboulevard\" title=\"Forest Hill Aquaboulevard\">
                            <img src=\"{{asset('images/club/club.jpg')}}\" alt=\"Forest Hill Aquaboulevard#}\" />
                        </a>
                    </figure>
                    <h3 class=\"titleHighlight\">Forest Hill Aquaboulevard</h3>
                    <a href=\"https://www.forest-hill.fr/club/forest-hill-aquaboulevard\" title=\"Découvrir le club\">Découvrir le club</a>
                </div>
                <div class=\"itemClub\">
                    <figure>
                        <a href=\"https://www.forest-hill.fr/club/forest-hill-la-defense\" title=\"Forest Hill La Défense\">
                            <img src=\"{{asset('/images/Club/img-fh-defense-1-ok.jpg')}}\" alt=\"Forest Hill La Défense#}\" />
                        </a>
                    </figure>
                    <h3 class=\"titleHighlight\">Forest Hill La Défense</h3>
                    <a href=\"https://www.forest-hill.fr/club/forest-hill-la-defense\" title=\"Découvrir le club\">Découvrir le club</a>
                </div>
                <div class=\"itemClub\">
                    <figure>
                        <a href=\"https://www.forest-hill.fr/club/forest-hill-timing-paris-sud\" title=\"Forest Hill Timing Paris Sud\">
                            <img src=\"{{asset('/images/Club/img-fh-timing-1-ok.jpg')}}\" alt=\"Forest Hill Timing Paris Sud#}\" />
                        </a>
                    </figure>
                    <h3 class=\"titleHighlight\">Forest Hill Timing Paris Sud</h3>
                    <a href=\"https://www.forest-hill.fr/club/forest-hill-timing-paris-sud\" title=\"Découvrir le club\">Découvrir le club</a>
                </div>
            </div>
            <div class=\"action-cta\"><a href=\"https://www.forest-hill.fr/vos-clubs-a-paris\" title=\"6 clubs en Île de France\">6 clubs en Île de France</a></div>
        </section>

    <section class=\"listActivities\">
        <h2>Plus de 80 cours et activités à découvrir !</h2>
        <div class=\"InnerContent\">
            <div class=\"activities\">
                <div class=\"activitiesContainer\">
                    <div class=\"itemActivity\">
                        <figure class=\"banner--activities\">
                            <a href=\"https://www.forest-hill.fr/activite/dance-hall\" title=\"Ragga Dance Hall\">
                                <img src=\"{{asset('images/Activity/1200x474-zumba.jpg')}}\" alt=\"Ragga Dance Hall\" />
                            </a>
                        </figure>
                        <h3>
                            <a href=\"https://www.forest-hill.fr/activite/dance-hall\" title=\"Ragga Dance Hall\">Zumba</a>
                        </h3>
                    </div>
                    <div class=\"itemActivity\">
                        <figure class=\"banner--activities\">
                            <a href=\"https://www.forest-hill.fr/activite/aqua-impact\" title=\"Tai Chi Chuan\">
                                <img class=\"img-double\" src=\"{{asset('images/Activity/1200x474-tai-chi-chuan.jpg')}}\" alt=\"Tai Chi Chuan\" />
                                <img src=\"{{asset('images/Activity/1200x474-tai-chi-chuan.jpg')}}\" alt=\"Tai Chi Chuan\" />
                            </a>
                        </figure>
                        <h3>
                            <a href=\"https://www.forest-hill.fr/activite/aqua-impact\" title=\"Tai Chi Chuan\">Tai Chi Chuan</a>
                        </h3>
                    </div>
                </div>
                <div class=\"activitiesContainer\">
                    <div class=\"itemActivity\">
                        <figure class=\"banner--activities\">
                            <a href=\"https://www.forest-hill.fr/activite/badminton-heures-pleines\" title=\"yoga\">
                                <img src=\"{{asset('images/Activity/1200x474-yoga.jpg')}}\" alt=\"yoga\" />
                            </a>
                        </figure>
                        <h3>
                            <a href=\"https://www.forest-hill.fr/activite/badminton-heures-pleines\" title=\"yoga\">yoga</a>
                        </h3>
                    </div>
                    <div class=\"itemActivity\">
                        <figure class=\"banner--activities\">
                            <a href=\"https://www.forest-hill.fr/activite/yoga-ashtanga\" title=\"Cross Training\">
                                <img src=\"{{asset('images/Activity/1200x474-crosstraining.jpg')}}\" alt=\"Cross Training\" />
                            </a>
                        </figure>
                        <h3>
                            <a href=\"https://www.forest-hill.fr/activite/yoga-ashtanga\" title=\"Cross Training\">Cross Training</a>
                        </h3>
                    </div>
                    <div class=\"itemActivity\">
                        <figure class=\"banner--activities\">
                            <a href=\"https://www.forest-hill.fr/activite/aqua-sculpt\" title=\"Lia\">
                                <img src=\"{{asset('images/Activity/1200x474-lia.jpg')}}\" alt=\"Lia\" />
                            </a>
                        </figure>
                        <h3>
                            <a href=\"https://www.forest-hill.fr/activite/aqua-sculpt\" title=\"Lia\">Lia</a>
                        </h3>
                    </div>
                </div>
                <div class=\"activitiesContainer\">
                    <div class=\"itemActivity\">
                        <figure class=\"banner--activities\">
                            <a href=\"https://www.forest-hill.fr/activite/meditation\" title=\"Meditation\">
                                <img class=\"img-double\" src=\"{{asset('images/Activity/1200x474-afro.jpg')}}\" alt=\"Afro\" />
                                <img src=\"{{asset('images/Activity/1200x474-afro.jpg')}}\" alt=\"Afro\" />
                            </a>
                        </figure>
                        <h3>
                            <a href=\"https://www.forest-hill.fr/activite/meditation\" title=\"Meditation\">Afro</a>
                        </h3>
                    </div>
                    <div class=\"itemActivity\">
                        <figure class=\"banner--activities\">
                            <a href=\"https://www.forest-hill.fr/activite/hiit-strong\" title=\"Posturall Ball\">
                                <img src=\"{{asset('images/img-activity-400x200.jpg')}}\" alt=\"Posturall Ball\" />
                            </a>
                        </figure>
                        <h3>
                            <a href=\"https://www.forest-hill.fr/activite/hiit-strong\" title=\"Posturall Ball\">Posturall Ball</a>
                        </h3>
                    </div>
                </div>                
            </div>

        </div>

    </section>
</article>
{% endblock %}
", "home/index.html.twig", "/Users/hantour/Documents/FERIEL/forest-hill/templates/home/index.html.twig");
    }
}
