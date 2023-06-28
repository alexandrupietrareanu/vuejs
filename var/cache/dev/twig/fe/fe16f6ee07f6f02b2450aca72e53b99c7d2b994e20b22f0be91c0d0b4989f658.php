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

/* checkout/confirmation.html.twig */
class __TwigTemplate_b96d202dd764aa484d7319af8eacb00c1edbee72aabacc8d518671b49812823e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "checkout/confirmation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "checkout/confirmation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "checkout/confirmation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"app\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <aside class=\"col-xs-12 col-lg-3\"></aside>

                <div class=\"col-xs-12 col-lg-9\">
                    <div class=\"row\">
                        <div class=\"top-bar\">
                            <h1 class=\"ml-2\">
                                Thank you for your purchase!
                            </h1>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"component-light purchase\">
                            <p>
                                To complete the transaction, please print this page and mail it together
                                with a check or money order to the following address:
                            </p>
                            <code>
                                1233 Nineties Dr.<br />
                                10443 Vintage City, VN<br />
                                USA
                            </code>
                            <p>
                                Your products will arrive within 12-24 weeks.
                            </p>

                            <hr />

                            <code>
                                Order Details<br /><br />

                                Customer Name: ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 37, $this->source); })()), "customerName", [], "any", false, false, false, 37), "html", null, true);
        echo "<br />
                                Address: ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 38, $this->source); })()), "customerAddress", [], "any", false, false, false, 38), "html", null, true);
        echo "<br />
                                Zip: ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 39, $this->source); })()), "customerZip", [], "any", false, false, false, 39), "html", null, true);
        echo "<br />
                                City: ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 40, $this->source); })()), "customerCity", [], "any", false, false, false, 40), "html", null, true);
        echo "<br />
                                Phone: ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 41, $this->source); })()), "customerPhone", [], "any", false, false, false, 41), "html", null, true);
        echo "<br />
                            </code>
                            <hr />

                            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 45, $this->source); })()), "purchaseItems", [], "any", false, false, false, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 46
            echo "                                <div class=\"row flex-row purchase-row\">
                                    <code>
                                        ";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 48), "html", null, true);
            echo " |
                                    </code>
                                    <code class=\"flex-grow-1\">
                                        ";
            // line 51
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["item"], "color", [], "any", false, false, false, 51))) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "color", [], "any", false, false, false, 51), "name", [], "any", false, false, false, 51), "html", null, true);
            }
            // line 52
            echo "                                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 52), "name", [], "any", false, false, false, 52), "html", null, true);
            echo "
                                    </code>
                                    <code>
                                        | \$ ";
            // line 55
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 55), "price", [], "any", false, false, false, 55) / 100), 2), "html", null, true);
            echo " <br />
                                    </code>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
                            <hr />

                            <div class=\"row flex-row purchase-row\">
                                <code class=\"flex-grow-1\">
                                    Total Price:
                                </code>
                                <code>
                                    \$ ";
        // line 67
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 67, $this->source); })()) / 100), 2), "html", null, true);
        echo "
                                </code>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "checkout/confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 67,  161 => 59,  151 => 55,  144 => 52,  140 => 51,  134 => 48,  130 => 46,  126 => 45,  119 => 41,  115 => 40,  111 => 39,  107 => 38,  103 => 37,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div id=\"app\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <aside class=\"col-xs-12 col-lg-3\"></aside>

                <div class=\"col-xs-12 col-lg-9\">
                    <div class=\"row\">
                        <div class=\"top-bar\">
                            <h1 class=\"ml-2\">
                                Thank you for your purchase!
                            </h1>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"component-light purchase\">
                            <p>
                                To complete the transaction, please print this page and mail it together
                                with a check or money order to the following address:
                            </p>
                            <code>
                                1233 Nineties Dr.<br />
                                10443 Vintage City, VN<br />
                                USA
                            </code>
                            <p>
                                Your products will arrive within 12-24 weeks.
                            </p>

                            <hr />

                            <code>
                                Order Details<br /><br />

                                Customer Name: {{ purchase.customerName }}<br />
                                Address: {{ purchase.customerAddress }}<br />
                                Zip: {{ purchase.customerZip }}<br />
                                City: {{ purchase.customerCity }}<br />
                                Phone: {{ purchase.customerPhone }}<br />
                            </code>
                            <hr />

                            {% for item in purchase.purchaseItems %}
                                <div class=\"row flex-row purchase-row\">
                                    <code>
                                        {{ item.quantity }} |
                                    </code>
                                    <code class=\"flex-grow-1\">
                                        {% if item.color is not null %}{{ item.color.name }}{% endif %}
                                        {{ item.product.name }}
                                    </code>
                                    <code>
                                        | \$ {{ (item.product.price / 100)|number_format(2) }} <br />
                                    </code>
                                </div>
                            {% endfor %}

                            <hr />

                            <div class=\"row flex-row purchase-row\">
                                <code class=\"flex-grow-1\">
                                    Total Price:
                                </code>
                                <code>
                                    \$ {{ (totalPrice / 100)|number_format(2) }}
                                </code>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "checkout/confirmation.html.twig", "/var/www/html/vue/templates/checkout/confirmation.html.twig");
    }
}
