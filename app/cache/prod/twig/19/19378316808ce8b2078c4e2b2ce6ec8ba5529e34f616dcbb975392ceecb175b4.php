<?php

/* @SyliusUi/Macro/table.html.twig */
class __TwigTemplate_4e29fc36b25c1075e9218b860ab1c035a17a02fe2f7ea22f849d3af3d255586c extends Twig_Template
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
        // line 21
        echo "
";
    }

    // line 1
    public function macro_headers($__grid__ = null, $__definition__ = null, $__requestAttributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "grid" => $__grid__,
            "definition" => $__definition__,
            "requestAttributes" => $__requestAttributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["sorting"] = $this->loadTemplate("@SyliusUi/Macro/sorting.html.twig", "@SyliusUi/Macro/table.html.twig", 2);
            // line 3
            echo "
    ";
            // line 4
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "actionGroups", array(), "any", false, true), "bulk", array(), "any", true, true)) {
                // line 5
                echo "        <th></th>
    ";
            }
            // line 7
            echo "
    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->extensions['Sylius\Bundle\UiBundle\Twig\SortByExtension']->sortBy(twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "fields", array()), "position"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 9
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["field"], "enabled", array())) {
                    // line 10
                    echo "            ";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "isSortable", array())) {
                        // line 11
                        echo "                ";
                        echo $context["sorting"]->macro_tableHeader(($context["grid"] ?? null), $context["field"], ($context["requestAttributes"] ?? null));
                        echo "
            ";
                    } else {
                        // line 13
                        echo "                <th class=\"sylius-table-column-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["field"], "label", array())), "html", null, true);
                        echo "</th>
            ";
                    }
                    // line 15
                    echo "        ";
                }
                // line 16
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "actionGroups", array(), "any", false, true), "item", array(), "any", true, true) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "getEnabledActions", array(0 => "item"), "method")) > 0))) {
                // line 18
                echo "        <th class=\"sylius-table-column-actions\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.actions"), "html", null, true);
                echo "</th>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 22
    public function macro_row($__grid__ = null, $__definition__ = null, $__row__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "grid" => $__grid__,
            "definition" => $__definition__,
            "row" => $__row__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 23
            echo "    <tr class=\"item\">
    ";
            // line 24
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "actionGroups", array(), "any", false, true), "bulk", array(), "any", true, true)) {
                // line 25
                echo "        <td><input class=\"bulk-select-checkbox\" type=\"checkbox\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "id", array()), "html", null, true);
                echo "\" /></td>
    ";
            }
            // line 27
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->extensions['Sylius\Bundle\UiBundle\Twig\SortByExtension']->sortBy(twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "enabledFields", array()), "position"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 28
                echo "        <td>";
                echo call_user_func_array($this->env->getFunction('sylius_grid_render_field')->getCallable(), array(($context["grid"] ?? null), $context["field"], ($context["row"] ?? null)));
                echo "</td>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "actionGroups", array(), "any", false, true), "item", array(), "any", true, true) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "getEnabledActions", array(0 => "item"), "method")) > 0))) {
                // line 31
                echo "        <td>
            <div class=\"ui buttons\">
                ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->extensions['Sylius\Bundle\UiBundle\Twig\SortByExtension']->sortBy(twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "getEnabledActions", array(0 => "item"), "method"), "position"));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 34
                    echo "                    ";
                    echo call_user_func_array($this->env->getFunction('sylius_grid_render_action')->getCallable(), array(($context["grid"] ?? null), $context["action"], ($context["row"] ?? null)));
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "            </div>
            ";
                // line 37
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "actionGroups", array(), "any", false, true), "subitem", array(), "any", true, true) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "getEnabledActions", array(0 => "subitem"), "method")) > 0))) {
                    // line 38
                    echo "            <div class=\"ui divider\"></div>
            <div class=\"ui buttons\">
                ";
                    // line 40
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->extensions['Sylius\Bundle\UiBundle\Twig\SortByExtension']->sortBy(twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "getEnabledActions", array(0 => "subitem"), "method"), "position"));
                    foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                        // line 41
                        echo "                    ";
                        echo call_user_func_array($this->env->getFunction('sylius_grid_render_action')->getCallable(), array(($context["grid"] ?? null), $context["action"], ($context["row"] ?? null)));
                        echo "
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 43
                    echo "            </div>
            ";
                }
                // line 45
                echo "        </td>
    ";
            }
            // line 47
            echo "    </tr>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SyliusUi/Macro/table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 47,  191 => 45,  187 => 43,  178 => 41,  174 => 40,  170 => 38,  168 => 37,  165 => 36,  156 => 34,  152 => 33,  148 => 31,  145 => 30,  136 => 28,  131 => 27,  125 => 25,  123 => 24,  120 => 23,  106 => 22,  93 => 18,  90 => 17,  84 => 16,  81 => 15,  73 => 13,  67 => 11,  64 => 10,  61 => 9,  57 => 8,  54 => 7,  50 => 5,  48 => 4,  45 => 3,  42 => 2,  28 => 1,  23 => 21,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusUi/Macro/table.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Macro/table.html.twig");
    }
}
