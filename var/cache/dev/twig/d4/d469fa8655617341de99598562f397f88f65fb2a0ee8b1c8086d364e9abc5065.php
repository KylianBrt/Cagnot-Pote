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

/* campaign/show.html.twig */
class __TwigTemplate_0ca43c2eb45005b7ca560e4fb18309ffcf1e177dfe1c48dd726879e67ebfdda7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "campaign/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "campaign/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "campaign/show.html.twig", 1);
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

        echo "Campaign
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"parallax-container valign-wrapper\">
        <div class=\"section no-pad-bot\">
            <div class=\"container\">
                <h1 class=\"header center white-text light\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), "html", null, true);
        echo "</h1>
                <div class=\"row center\">
                    <h5 class=\"header col s12 light\">- Organisée par : ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12), "html", null, true);
        echo " -</h5>
                </div>
            </div>
        </div>
        <div class=\"parallax\"><img alt=\"Titre de la campagne\" src=\"/assets/images/8.jpg\"></div>
    </div>
    <section class=\"progress-section\">
        <div class=\"progress\">
            <div class=\"determinate\" style=\"width: 70%\">
                <span>70% de l'objectif</span>
            </div>
        </div>
    </section>
    <div class=\"container participe\">
        <div
            class=\"section\">
            <!-- Participation section -->
            <div class=\"row\">
                <div class=\"card col s12 m12 l8 offset-l2\">
                    <div class=\"card-content\">
                        <div class=\"input-field col s12 l6\">
                            <input class=\"validate\" id=\"mount\" type=\"number\">
                            <label for=\"mount\">Votre participation</label>
                        </div>
                        <a class=\"btn-large waves-effect waves-light pink lighten-1 col s12 l6\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payment_new", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36)]), "html", null, true);
        echo "\">Participer</a>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col s12 center\">
                    <h4>A propos de la campagne</h4>
                </div>
            </div>
            <!--   Icon Section   -->
            <div class=\"row\">
                <div class=\"col s12 m6 l3 offset-l3\">
                    <div class=\"icon-block center\">
                        <div class=\"btn-large btn-floating white\">
                            <i class=\"material-icons teal-text\">person</i>
                        </div>
                        <h3 class=\"center\">12</h3>
                        <p class=\"light\">Participants</p>
                    </div>
                </div>

                <div class=\"col s12 m6 l3\">
                    <div class=\"icon-block center\">
                        <div class=\"btn-large btn-floating white\">
                            <i class=\"material-icons teal-text\">redeem</i>
                        </div>
                        <h3 class=\"center\">220</h3>
                        <p class=\"light\">euros récoltés</p>
                    </div>
                </div>
            </div>
            <!-- Form section -->
            <div class=\"row\">
                <form action=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("campaign_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 70, $this->source); })()), "id", [], "any", false, false, false, 70)]), "html", null, true);
        echo "\">
                    <div class=\"input-field col s12\">
                        <label for=\"description\">Description</label>
                        <textarea class=\"materialize-textarea\" id=\"description\" readonly=\"readonly\">";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 73, $this->source); })()), "content", [], "any", false, false, false, 73), "html", null, true);
        echo "</textarea>
                    </div>
                    <div class=\"input-field col s12 l6\">
                        <input id=\"goal\" readonly=\"readonly\" type=\"number\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 76, $this->source); })()), "goal", [], "any", false, false, false, 76), "html", null, true);
        echo "\">
                        <label for=\"goal\">Objectif</label>
                    </div>
                    <div class=\"col s12 l6 offset-l3\">
                        <button class=\"btn btn-large waves-effect waves-light col s12\" type=\"submit\">
                            Modifiez la campagne
                            <i class=\"material-icons right\">edit</i>
                        </button>
                    </div>
                </form>
            </div>
            <!-- List -->
            <div class=\"row\">
                <div class=\"col s12 center\">
                    <h4>Liste des participants</h4>
                </div>
                <div class=\"col s12\">
                    <table class=\"highlight responsive-table\">
                        <thead>
                            <tr>
                                <th>Email</th>
                                <th>Participation</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Alvin@live.net</td>
                                <td>5€</td>
                            </tr>
                            <tr>
                                <td>Alan@live.net</td>
                                <td>12€</td>
                            </tr>
                            <tr>
                                <td>Jonathan@live.net</td>
                                <td>7€</td>
                            </tr>
                        </tbody>
                    </table>
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
        <div class=\"parallax\"><img alt=\"Une campagne pensée pour vous\" src=\"/assets/images/10.jpg\"></div>
    </div>

    <a href=\"";
        // line 132
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("campaign_index");
        echo "\">retour</a>

    <a href=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("campaign_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 134, $this->source); })()), "id", [], "any", false, false, false, 134)]), "html", null, true);
        echo "\">éditer</a>

    ";
        // line 136
        echo twig_include($this->env, $context, "campaign/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "campaign/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 136,  239 => 134,  234 => 132,  175 => 76,  169 => 73,  163 => 70,  126 => 36,  99 => 12,  94 => 10,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Campaign
{% endblock %}

{% block body %}
    <div class=\"parallax-container valign-wrapper\">
        <div class=\"section no-pad-bot\">
            <div class=\"container\">
                <h1 class=\"header center white-text light\">{{campaign.title}}</h1>
                <div class=\"row center\">
                    <h5 class=\"header col s12 light\">- Organisée par : {{campaign.name}} -</h5>
                </div>
            </div>
        </div>
        <div class=\"parallax\"><img alt=\"Titre de la campagne\" src=\"/assets/images/8.jpg\"></div>
    </div>
    <section class=\"progress-section\">
        <div class=\"progress\">
            <div class=\"determinate\" style=\"width: 70%\">
                <span>70% de l'objectif</span>
            </div>
        </div>
    </section>
    <div class=\"container participe\">
        <div
            class=\"section\">
            <!-- Participation section -->
            <div class=\"row\">
                <div class=\"card col s12 m12 l8 offset-l2\">
                    <div class=\"card-content\">
                        <div class=\"input-field col s12 l6\">
                            <input class=\"validate\" id=\"mount\" type=\"number\">
                            <label for=\"mount\">Votre participation</label>
                        </div>
                        <a class=\"btn-large waves-effect waves-light pink lighten-1 col s12 l6\" href=\"{{path('payment_new', {id:campaign.id}) }}\">Participer</a>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col s12 center\">
                    <h4>A propos de la campagne</h4>
                </div>
            </div>
            <!--   Icon Section   -->
            <div class=\"row\">
                <div class=\"col s12 m6 l3 offset-l3\">
                    <div class=\"icon-block center\">
                        <div class=\"btn-large btn-floating white\">
                            <i class=\"material-icons teal-text\">person</i>
                        </div>
                        <h3 class=\"center\">12</h3>
                        <p class=\"light\">Participants</p>
                    </div>
                </div>

                <div class=\"col s12 m6 l3\">
                    <div class=\"icon-block center\">
                        <div class=\"btn-large btn-floating white\">
                            <i class=\"material-icons teal-text\">redeem</i>
                        </div>
                        <h3 class=\"center\">220</h3>
                        <p class=\"light\">euros récoltés</p>
                    </div>
                </div>
            </div>
            <!-- Form section -->
            <div class=\"row\">
                <form action=\"{{ path('campaign_edit', {'id': campaign.id}) }}\">
                    <div class=\"input-field col s12\">
                        <label for=\"description\">Description</label>
                        <textarea class=\"materialize-textarea\" id=\"description\" readonly=\"readonly\">{{campaign.content}}</textarea>
                    </div>
                    <div class=\"input-field col s12 l6\">
                        <input id=\"goal\" readonly=\"readonly\" type=\"number\" value=\"{{campaign.goal}}\">
                        <label for=\"goal\">Objectif</label>
                    </div>
                    <div class=\"col s12 l6 offset-l3\">
                        <button class=\"btn btn-large waves-effect waves-light col s12\" type=\"submit\">
                            Modifiez la campagne
                            <i class=\"material-icons right\">edit</i>
                        </button>
                    </div>
                </form>
            </div>
            <!-- List -->
            <div class=\"row\">
                <div class=\"col s12 center\">
                    <h4>Liste des participants</h4>
                </div>
                <div class=\"col s12\">
                    <table class=\"highlight responsive-table\">
                        <thead>
                            <tr>
                                <th>Email</th>
                                <th>Participation</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Alvin@live.net</td>
                                <td>5€</td>
                            </tr>
                            <tr>
                                <td>Alan@live.net</td>
                                <td>12€</td>
                            </tr>
                            <tr>
                                <td>Jonathan@live.net</td>
                                <td>7€</td>
                            </tr>
                        </tbody>
                    </table>
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
        <div class=\"parallax\"><img alt=\"Une campagne pensée pour vous\" src=\"/assets/images/10.jpg\"></div>
    </div>

    <a href=\"{{ path('campaign_index') }}\">retour</a>

    <a href=\"{{ path('campaign_edit', {'id': campaign.id}) }}\">éditer</a>

    {{ include('campaign/_delete_form.html.twig') }}
{% endblock %}
", "campaign/show.html.twig", "/shared/httpd/Symfony/templates/campaign/show.html.twig");
    }
}
