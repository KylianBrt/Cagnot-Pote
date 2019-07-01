<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_bba37f563a5e776d38bf009e5eb5758fe244c8d7e87958a2d3f9274361dbccac extends \Twig\Template
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
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\" name=\"viewport\">
        <meta
        content=\"ie=edge\" http-equiv=\"X-UA-Compatible\">

        <!--Import Google Icon Font-->
        <link
        href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <!--Import materialize.css-->
        <link
        href=\"/assets/css/materialize.min.css\" media=\"screen,projection\" rel=\"stylesheet\" type=\"text/css\"/>
        <!--Custom styles-->
        <link href=\"/assets/css/styles.css\" media=\"screen,projection\" rel=\"stylesheet\" type=\"text/css\"/>

        <title>
            ";
        // line 19
        $this->displayBlock('title', $context, $blocks);
        // line 21
        echo "        </title>
        ";
        // line 22
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "    </head>
    <body>
        <div class=\"navbar-fixed\">
            <nav class=\"white\">
                <div class=\"nav-wrapper\">
                    <a class=\"brand-logo center\" href=\"/\">Cagnot'Potes</a>
                    <ul class=\"right hide-on-med-and-down\">
                        <li>
                            <a class=\"waves-effect waves-light btn pink lighten-1\" href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("campaign_new");
        echo "\">Créer une campagne</a>
                        </li>
                    </ul>
                    <ul class=\"sidenav\" id=\"nav-mobile\">
                        <li>
                            <a class=\"waves-effect waves-light btn pink lighten-1\" href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("campaign_new");
        echo "\">Créer une campagne</a>
                        </li>
                    </ul>
                    <a class=\"sidenav-trigger\" data-target=\"nav-mobile\" href=\"#\">
                        <i class=\"material-icons\">menu</i>
                    </a>
                </div>
            </nav>
        </div>
        ";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "        <footer class=\"page-footer teal\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col l6 s12\">
                        <h5 class=\"white-text\">Cagnot'Potes</h5>
                        <p class=\"grey-text text-lighten-4\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo.</p>
                    </div>
                    <div class=\"col l3 s12 offset-l3\">
                        <h5 class=\"white-text\">Liens</h5>
                        <ul class=\"footer-links\">
                            <li>
                                <a class=\"white-text\" href=\"#!\">Comment ça marche ?</a>
                            </li>
                            <li>
                                <a class=\"white-text\" href=\"#!\">Voir les campagnes</a>
                            </li>
                            <li>
                                <a class=\"white-text\" href=\"#!\">Créer une campagne</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"footer-copyright\">
                <div class=\"container\">
                    Made with love by
                    <a class=\"white-text\" href=\"http://trombi.simplon-roanne.com/\">Simplon Roanne</a>
                </div>
            </div>
        </footer>
        ";
        // line 76
        $this->displayBlock('javascripts', $context, $blocks);
        // line 77
        echo "        <script src=\"/assets/js/materialize.min.js\" type=\"text/javascript\"></script>
        <!--Init & custom scripts-->
        <script src=\"/assets/js/scripts.js\" type=\"text/javascript\"></script>
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 19
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Cagnot'Potes!
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 45
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 76,  193 => 45,  175 => 22,  155 => 19,  140 => 77,  138 => 76,  106 => 46,  104 => 45,  92 => 36,  84 => 31,  74 => 23,  72 => 22,  69 => 21,  67 => 19,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\" name=\"viewport\">
        <meta
        content=\"ie=edge\" http-equiv=\"X-UA-Compatible\">

        <!--Import Google Icon Font-->
        <link
        href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <!--Import materialize.css-->
        <link
        href=\"/assets/css/materialize.min.css\" media=\"screen,projection\" rel=\"stylesheet\" type=\"text/css\"/>
        <!--Custom styles-->
        <link href=\"/assets/css/styles.css\" media=\"screen,projection\" rel=\"stylesheet\" type=\"text/css\"/>

        <title>
            {% block title %}Cagnot'Potes!
            {% endblock %}
        </title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        <div class=\"navbar-fixed\">
            <nav class=\"white\">
                <div class=\"nav-wrapper\">
                    <a class=\"brand-logo center\" href=\"/\">Cagnot'Potes</a>
                    <ul class=\"right hide-on-med-and-down\">
                        <li>
                            <a class=\"waves-effect waves-light btn pink lighten-1\" href=\"{{path('campaign_new')}}\">Créer une campagne</a>
                        </li>
                    </ul>
                    <ul class=\"sidenav\" id=\"nav-mobile\">
                        <li>
                            <a class=\"waves-effect waves-light btn pink lighten-1\" href=\"{{path('campaign_new')}}\">Créer une campagne</a>
                        </li>
                    </ul>
                    <a class=\"sidenav-trigger\" data-target=\"nav-mobile\" href=\"#\">
                        <i class=\"material-icons\">menu</i>
                    </a>
                </div>
            </nav>
        </div>
        {% block body %}{% endblock %}
        <footer class=\"page-footer teal\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col l6 s12\">
                        <h5 class=\"white-text\">Cagnot'Potes</h5>
                        <p class=\"grey-text text-lighten-4\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo.</p>
                    </div>
                    <div class=\"col l3 s12 offset-l3\">
                        <h5 class=\"white-text\">Liens</h5>
                        <ul class=\"footer-links\">
                            <li>
                                <a class=\"white-text\" href=\"#!\">Comment ça marche ?</a>
                            </li>
                            <li>
                                <a class=\"white-text\" href=\"#!\">Voir les campagnes</a>
                            </li>
                            <li>
                                <a class=\"white-text\" href=\"#!\">Créer une campagne</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"footer-copyright\">
                <div class=\"container\">
                    Made with love by
                    <a class=\"white-text\" href=\"http://trombi.simplon-roanne.com/\">Simplon Roanne</a>
                </div>
            </div>
        </footer>
        {% block javascripts %}{% endblock %}
        <script src=\"/assets/js/materialize.min.js\" type=\"text/javascript\"></script>
        <!--Init & custom scripts-->
        <script src=\"/assets/js/scripts.js\" type=\"text/javascript\"></script>
    </body>
</html>
", "base.html.twig", "/shared/httpd/Symfony/templates/base.html.twig");
    }
}
