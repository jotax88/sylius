<?php

/* @SyliusAdmin/Dashboard/_customers.html.twig */
class __TwigTemplate_eb68669d4643633b8c2d6e454c2b950949006daf44646984b1d28d044b82357d extends Twig_Template
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
        $context["messages"] = $this->loadTemplate("SyliusUiBundle:Macro:messages.html.twig", "@SyliusAdmin/Dashboard/_customers.html.twig", 1);
        // line 2
        $context["buttons"] = $this->loadTemplate("SyliusUiBundle:Macro:buttons.html.twig", "@SyliusAdmin/Dashboard/_customers.html.twig", 2);
        // line 3
        $context["labels"] = $this->loadTemplate("SyliusUiBundle:Macro:labels.html.twig", "@SyliusAdmin/Dashboard/_customers.html.twig", 3);
        // line 4
        echo "
<div class=\"ui segment\">
    <h3 class=\"ui dividing header\">";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.new_customers"), "html", null, true);
        echo "</h3>

    ";
        // line 8
        if ((twig_length_filter($this->env, ($context["customers"] ?? null)) > 0)) {
            // line 9
            echo "        <table class=\"ui stackable table\" id=\"customers\">
            <thead>
                <th>";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.name"), "html", null, true);
            echo "</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
            ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
                // line 17
                echo "                <tr>
                    <td>
                        <strong>";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer"], "fullName", array()), "html", null, true);
                echo "</strong><br>
                        ";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer"], "email", array()), "html", null, true);
                echo "
                    </td>
                    <td>
                        ";
                // line 23
                if ((null === twig_get_attribute($this->env, $this->source, $context["customer"], "user", array()))) {
                    // line 24
                    echo "                            <span class=\"ui icon label\">
                                <i class=\"spy icon\"></i> ";
                    // line 25
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.guest"), "html", null, true);
                    echo "
                            </span>
                        ";
                }
                // line 28
                echo "                    </td>
                    <td>
                        <div class=\"ui right floated buttons\">
                            ";
                // line 31
                echo $context["buttons"]->macro_show($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_customer_show", array("id" => twig_get_attribute($this->env, $this->source, $context["customer"], "id", array()))));
                echo "
                        </div>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
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
        return "@SyliusAdmin/Dashboard/_customers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 41,  102 => 39,  97 => 36,  86 => 31,  81 => 28,  75 => 25,  72 => 24,  70 => 23,  64 => 20,  60 => 19,  56 => 17,  52 => 16,  44 => 11,  40 => 9,  38 => 8,  33 => 6,  29 => 4,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusAdmin/Dashboard/_customers.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Dashboard/_customers.html.twig");
    }
}
