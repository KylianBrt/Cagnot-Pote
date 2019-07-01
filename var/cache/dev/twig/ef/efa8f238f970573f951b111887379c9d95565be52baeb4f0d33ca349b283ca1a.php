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

/* home/index.html.twig */
class __TwigTemplate_770e235fd43b5f9efc48905c0586bcbf674fe8b37bd4913de40d4335b140dc70 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello HomeController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<!doctype html>
<html lang=\"fr\">
<body>

    <div class=\"parallax-container hero-banner valign-wrapper\">
        <div class=\"section no-pad-bot\">
            <div class=\"container\">
                <div class=\"hide-on-med-and-down\">
                    <h1 class=\"header center white-text light\">Un cadeau commun à organiser?</h1>
                    <div class=\"row center\">
                        <h5 class=\"header col s12 light\">Anniversaire, pot de départ, crémaillère... N'avancez plus les frais !</h5>
                    </div>
                </div>
                <div class=\"hide-on-large-only\">
                    <div class=\"row center\">
                        <h5 class=\"header col s12 light\">Un cadeau commun à organiser ?</h5>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"card col s12 m12 l8 offset-l2\">
                        <div class=\"card-content\">
                            <div class=\"input-field col s12 l8\">
                                <input id=\"cag_name\" type=\"text\" class=\"validate\">
                                <label for=\"cag_name\">Nommez votre nouvelle campagne</label>
                            </div>
                            <a href=\"create.html\" class=\"btn-large waves-effect waves-light pink lighten-1 col s12 l4\">Valider</a>
                        </div>
                    </div>
                </div>
                <br><br>

            </div>
        </div>
        <div class=\"parallax\"><img src=\"assets/images/11.jpg\" alt=\"Anniversaire, pot de départ, crémaillère... N'avancez plus les frais !\"></div>
    </div>

    <div class=\"container\">
        <div class=\"section\">
            <div class=\"row\">
                <div class=\"col s12 center\">
                    <h4>Comment ça marche ?</h4>
                </div>
            </div>
            <!--   Icon Section   -->
            <div class=\"row\">
                <div class=\"col s12 m4\">
                    <div class=\"icon-block center\">
                        <div class=\"btn-large btn-floating white\"><i class=\"material-icons teal-text\">create</i></div>
                        <h5 class=\"center\">Créez</h5>
                        <p class=\"light\">et personnalisez votre campagne commune en 30 secondes !</p>
                    </div>
                </div>

                <div class=\"col s12 m4\">
                    <div class=\"icon-block center\">
                        <div class=\"btn-large btn-floating white\"><i class=\"material-icons teal-text\">wc</i></div>
                        <h5 class=\"center\">Invitez</h5>
                        <p class=\"light\">vos amis en utilisant les réseaux sociaux, mail, etc.</p>
                    </div>
                </div>

                <div class=\"col s12 m4\">
                    <div class=\"icon-block center\">
                        <div class=\"btn-large btn-floating white\"><i class=\"material-icons teal-text\">shopping_cart</i></div>
                        <h5 class=\"center\">Collectez</h5>
                        <p class=\"light\">et utilisez l'argent comme bon vous semble avec vos amis.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class=\"parallax-container valign-wrapper\">
        <div class=\"section no-pad-bot\">
            <div class=\"container\">
                <div class=\"row center\">
                    <h4 class=\"header col s12 light\">Une campagne pensée pour vous<br>et pour toutes les occasions</h4>
                </div>
            </div>
        </div>
        <div class=\"parallax\"><img src=\"assets/images/10.jpg\" alt=\"Une campagne pensée pour vous\"></div>
    </div>

    <div class=\"container\">
        <div class=\"section\">

            <div class=\"row\">
                <div class=\"col s12 center\">
                    <h4>les campagnes du moment</h4>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col s12\">
                    <div class=\"carousel\">
                        <a class=\"carousel-item\" href=\"#one!\">
                            <div class=\"card center\">
                                <div class=\"card-content\">
                                    <span class=\"card-title teal-text\">Titre campagne</span>
                                    <p class=\"black-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                </div>
                                <div class=\"card-action\">
                                    <div class=\"row black-text\">
                                        <div class=\"col s6\">
                                            <i class=\"material-icons teal-text\">account_circle</i> <b>12</b>
                                        </div>
                                        <div class=\"col s6\">
                                            <i class=\"material-icons teal-text\">euro_symbol</i> <b>350</b>
                                        </div>
                                    </div>

                                </div>
                                <div class=\"progress\">
                                    <div class=\"determinate\" style=\"width: 70%\"></div>
                                </div>
                            </div>
                        </a>
                        <a class=\"carousel-item\" href=\"#two!\">
                            <div class=\"card center\">
                                <div class=\"card-content\">
                                    <span class=\"card-title teal-text\">Titre campagne</span>
                                    <p class=\"black-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                </div>
                                <div class=\"card-action\">
                                    <div class=\"row black-text\">
                                        <div class=\"col s6\">
                                            <i class=\"material-icons teal-text\">account_circle</i> <b>12</b>
                                        </div>
                                        <div class=\"col s6\">
                                            <i class=\"material-icons teal-text\">euro_symbol</i> <b>350</b>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"progress\">
                                    <div class=\"determinate\" style=\"width: 70%\"></div>
                                </div>
                            </div>
                        </a>
                        <a class=\"carousel-item\" href=\"#three!\">
                            <div class=\"card center\">
                                <div class=\"card-content\">
                                    <span class=\"card-title teal-text\">Titre campagne</span>
                                    <p class=\"black-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                </div>
                                <div class=\"card-action\">
                                    <div class=\"row black-text\">
                                        <div class=\"col s6\">
                                            <i class=\"material-icons teal-text\">account_circle</i> <b>12</b>
                                        </div>
                                        <div class=\"col s6\">
                                            <i class=\"material-icons teal-text\">euro_symbol</i> <b>350</b>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"progress\">
                                    <div class=\"determinate\" style=\"width: 70%\"></div>
                                </div>
                            </div>
                        </a>
                        <a class=\"carousel-item\" href=\"#four!\">
                            <div class=\"card center\">
                                <div class=\"card-content\">
                                    <span class=\"card-title teal-text\">Titre campagne</span>
                                    <p class=\"black-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                </div>
                                <div class=\"card-action\">
                                    <div class=\"row black-text\">
                                        <div class=\"col s6\">
                                            <i class=\"material-icons teal-text\">account_circle</i> <b>12</b>
                                        </div>
                                        <div class=\"col s6\">
                                            <i class=\"material-icons teal-text\">euro_symbol</i> <b>350</b>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"progress\">
                                    <div class=\"determinate\" style=\"width: 70%\"></div>
                                </div>
                            </div>
                        </a>
                        <a class=\"carousel-item\" href=\"#five!\">
                            <div class=\"card center\">
                                <div class=\"card-content\">
                                    <span class=\"card-title teal-text\">Titre campagne</span>
                                    <p class=\"black-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                </div>
                                <div class=\"card-action\">
                                    <div class=\"row black-text\">
                                        <div class=\"col s6\">
                                            <i class=\"material-icons teal-text\">account_circle</i> <b>12</b>
                                        </div>
                                        <div class=\"col s6\">
                                            <i class=\"material-icons teal-text\">euro_symbol</i> <b>350</b>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"progress\">
                                    <div class=\"determinate\" style=\"width: 70%\"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--JavaScript at end of body for optimized loading-->
</body>
</html>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!{% endblock %}

{% block body %}
<!doctype html>
<html lang=\"fr\">
<body>

    <div class=\"parallax-container hero-banner valign-wrapper\">
        <div class=\"section no-pad-bot\">
            <div class=\"container\">
                <div class=\"hide-on-med-and-down\">
                    <h1 class=\"header center white-text light\">Un cadeau commun à organiser?</h1>
                    <div class=\"row center\">
                        <h5 class=\"header col s12 light\">Anniversaire, pot de départ, crémaillère... N'avancez plus les frais !</h5>
                    </div>
                </div>
                <div class=\"hide-on-large-only\">
                    <div class=\"row center\">
                        <h5 class=\"header col s12 light\">Un cadeau commun à organiser ?</h5>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"card col s12 m12 l8 offset-l2\">
                        <div class=\"card-content\">
                            <div class=\"input-field col s12 l8\">
                                <input id=\"cag_name\" type=\"text\" class=\"validate\">
                                <label for=\"cag_name\">Nommez votre nouvelle campagne</label>
                            </div>
                            <a href=\"create.html\" class=\"btn-large waves-effect waves-light pink lighten-1 col s12 l4\">Valider</a>
                        </div>
                    </div>
                </div>
                <br><br>

            </div>
        </div>
        <div class=\"parallax\"><img src=\"assets/images/11.jpg\" alt=\"Anniversaire, pot de départ, crémaillère... N'avancez plus les frais !\"></div>
    </div>

    <div class=\"container\">
        <div class=\"section\">
            <div class=\"row\">
                <div class=\"col s12 center\">
                    <h4>Comment ça marche ?</h4>
                </div>
            </div>
            <!--   Icon Section   -->
            <div class=\"row\">
                <div class=\"col s12 m4\">
                    <div class=\"icon-block center\">
                        <div class=\"btn-large btn-floating white\"><i class=\"material-icons teal-text\">create</i></div>
                        <h5 class=\"center\">Créez</h5>
                        <p class=\"light\">et personnalisez votre campagne commune en 30 secondes !</p>
                    </div>
                </div>

                <div class=\"col s12 m4\">
                    <div class=\"icon-block center\">
                        <div class=\"btn-large btn-floating white\"><i class=\"material-icons teal-text\">wc</i></div>
                        <h5 class=\"center\">Invitez</h5>
                        <p class=\"light\">vos amis en utilisant les réseaux sociaux, mail, etc.</p>
                    </div>
                </div>

                <div class=\"col s12 m4\">
                    <div class=\"icon-block center\">
                        <div class=\"btn-large btn-floating white\"><i class=\"material-icons teal-text\">shopping_cart</i></div>
                        <h5 class=\"center\">Collectez</h5>
                        <p class=\"light\">et utilisez l'argent comme bon vous semble avec vos amis.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class=\"parallax-container valign-wrapper\">
        <div class=\"section no-pad-bot\">
            <div class=\"container\">
                <div class=\"row center\">
                    <h4 class=\"header col s12 light\">Une campagne pensée pour vous<br>et pour toutes les occasions</h4>
                </div>
            </div>
        </div>
        <div class=\"parallax\"><img src=\"assets/images/10.jpg\" alt=\"Une campagne pensée pour vous\"></div>
    </div>

    <div class=\"container\">
        <div class=\"section\">

            <div class=\"row\">
                <div class=\"col s12 center\">
                    <h4>les campagnes du moment</h4>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col s12\">
                    <div class=\"carousel\">
                        <a class=\"carousel-item\" href=\"#one!\">
                            <div class=\"card center\">
                                <div class=\"card-content\">
                                    <span class=\"card-title teal-text\">Titre campagne</span>
                                    <p class=\"black-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                </div>
                                <div class=\"card-action\">
                                    <div class=\"row black-text\">
                                        <div class=\"col s6\">
                                            <i class=\"material-icons teal-text\">account_circle</i> <b>12</b>
                                        </div>
                                        <div class=\"col s6\">
                                            <i class=\"material-icons teal-text\">euro_symbol</i> <b>350</b>
                                        </div>
                                    </div>

                                </div>
                                <div class=\"progress\">
                                    <div class=\"determinate\" style=\"width: 70%\"></div>
                                </div>
                            </div>
                        </a>
                        <a class=\"carousel-item\" href=\"#two!\">
                            <div class=\"card center\">
                                <div class=\"card-content\">
                                    <span class=\"card-title teal-text\">Titre campagne</span>
                                    <p class=\"black-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                </div>
                                <div class=\"card-action\">
                                    <div class=\"row black-text\">
                                        <div class=\"col s6\">
                                            <i class=\"material-icons teal-text\">account_circle</i> <b>12</b>
                                        </div>
                                        <div class=\"col s6\">
                                            <i class=\"material-icons teal-text\">euro_symbol</i> <b>350</b>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"progress\">
                                    <div class=\"determinate\" style=\"width: 70%\"></div>
                                </div>
                            </div>
                        </a>
                        <a class=\"carousel-item\" href=\"#three!\">
                            <div class=\"card center\">
                                <div class=\"card-content\">
                                    <span class=\"card-title teal-text\">Titre campagne</span>
                                    <p class=\"black-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                </div>
                                <div class=\"card-action\">
                                    <div class=\"row black-text\">
                                        <div class=\"col s6\">
                                            <i class=\"material-icons teal-text\">account_circle</i> <b>12</b>
                                        </div>
                                        <div class=\"col s6\">
                                            <i class=\"material-icons teal-text\">euro_symbol</i> <b>350</b>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"progress\">
                                    <div class=\"determinate\" style=\"width: 70%\"></div>
                                </div>
                            </div>
                        </a>
                        <a class=\"carousel-item\" href=\"#four!\">
                            <div class=\"card center\">
                                <div class=\"card-content\">
                                    <span class=\"card-title teal-text\">Titre campagne</span>
                                    <p class=\"black-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                </div>
                                <div class=\"card-action\">
                                    <div class=\"row black-text\">
                                        <div class=\"col s6\">
                                            <i class=\"material-icons teal-text\">account_circle</i> <b>12</b>
                                        </div>
                                        <div class=\"col s6\">
                                            <i class=\"material-icons teal-text\">euro_symbol</i> <b>350</b>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"progress\">
                                    <div class=\"determinate\" style=\"width: 70%\"></div>
                                </div>
                            </div>
                        </a>
                        <a class=\"carousel-item\" href=\"#five!\">
                            <div class=\"card center\">
                                <div class=\"card-content\">
                                    <span class=\"card-title teal-text\">Titre campagne</span>
                                    <p class=\"black-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                </div>
                                <div class=\"card-action\">
                                    <div class=\"row black-text\">
                                        <div class=\"col s6\">
                                            <i class=\"material-icons teal-text\">account_circle</i> <b>12</b>
                                        </div>
                                        <div class=\"col s6\">
                                            <i class=\"material-icons teal-text\">euro_symbol</i> <b>350</b>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"progress\">
                                    <div class=\"determinate\" style=\"width: 70%\"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--JavaScript at end of body for optimized loading-->
</body>
</html>

{% endblock %}

", "home/index.html.twig", "/shared/httpd/Symfony/templates/home/index.html.twig");
    }
}
