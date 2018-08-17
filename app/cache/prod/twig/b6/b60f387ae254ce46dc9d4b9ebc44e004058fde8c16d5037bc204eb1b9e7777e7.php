<?php

/* @SyliusAdmin/Dashboard/_orders.html.twig */
class __TwigTemplate_2054595807b9ec99c6f2568ae17e630c6fa1bdc64b03e07cd31101e47db48ce2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["messages"] = $this->loadTemplate("SyliusUiBundle:Macro:messages.html.twig", "@SyliusAdmin/Dashboard/_orders.html.twig", 1);
        // line 2
        $context["buttons"] = $this->loadTemplate("SyliusUiBundle:Macro:buttons.html.twig", "@SyliusAdmin/Dashboard/_orders.html.twig", 2);
        // line 3
        $context["money"] = $this->loadTemplate("@SyliusAdmin/Common/Macro/money.html.twig", "@SyliusAdmin/Dashboard/_orders.html.twig", 3);
        // line 4
        echo "
<div class=\"ui segment\">
    <h3 class=\"ui dividing header\">";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.new_orders"), "html", null, true);
        echo "</h3>

    ";
        // line 8
        if ((twig_length_filter($this->env, ($context["orders"] ?? null)) > 0)) {
            // line 9
            echo "        <table class=\"ui stackable table\" id=\"orders\">
            <thead>
                <th>";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.order"), "html", null, true);
            echo "</th>
                <th>";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.items"), "html", null, true);
            echo "</th>
                <th>";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.total"), "html", null, true);
            echo "</th>
                <th></th>
            </thead>
            <tbody>
            ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 18
                echo "                <tr>
                    <td>
                        <strong>";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "customer", array()), "fullName", array()), "html", null, true);
                echo "</strong><br>
                        ";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "customer", array()), "email", array()), "html", null, true);
                echo "
                    </td>
                    <td>
                        ";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "totalQuantity", array()), "html", null, true);
                echo "
                    </td>
                    <td>
                        ";
                // line 27
                echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->source, $context["order"], "total", array()), twig_get_attribute($this->env, $this->source, $context["order"], "currencyCode", array()));
                echo "
                    </td>
                    <td>
                        <div class=\"ui right floated buttons\">
                            ";
                // line 31
                echo $context["buttons"]->macro_show($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_order_show", array("id" => twig_get_attribute($this->env, $this->source, $context["order"], "id", array()))));
                echo "
                        </div>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 39
            echo "        ";
            echo $context["messages"]->macro_info("sylius.ui.no_results_to_display");
            echo "
    ";
        }
        // line 41
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Dashboard/_orders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 41,  106 => 39,  101 => 36,  90 => 31,  83 => 27,  77 => 24,  71 => 21,  67 => 20,  63 => 18,  59 => 17,  52 => 13,  48 => 12,  44 => 11,  40 => 9,  38 => 8,  33 => 6,  29 => 4,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusAdmin/Dashboard/_orders.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Dashboard/_orders.html.twig");
    }
}
