<?php

/* @SyliusUi/Grid/_default.html.twig */
class __TwigTemplate_4d2915b52794893632665d853612e8146c7b6afab57631d6fd2fa849417cfe26 extends Twig_Template
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
        $context["pagination"] = $this->loadTemplate("@SyliusUi/Macro/pagination.html.twig", "@SyliusUi/Grid/_default.html.twig", 1);
        // line 2
        $context["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "@SyliusUi/Grid/_default.html.twig", 2);
        // line 3
        $context["messages"] = $this->loadTemplate("@SyliusUi/Macro/messages.html.twig", "@SyliusUi/Grid/_default.html.twig", 3);
        // line 4
        $context["table"] = $this->loadTemplate("@SyliusUi/Macro/table.html.twig", "@SyliusUi/Grid/_default.html.twig", 4);
        // line 5
        echo "
";
        // line 6
        $context["definition"] = twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "definition", array());
        // line 7
        $context["data"] = twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "data", array());
        // line 8
        echo "
";
        // line 9
        $context["path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"));
        // line 10
        echo "
";
        // line 11
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "enabledFilters", array())) > 0)) {
            // line 12
            echo "    <div class=\"ui hidden divider\"></div>
    <div class=\"ui styled fluid accordion\">
        <div class=\"title active\">
            <i class=\"dropdown icon\"></i>
            ";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.filters"), "html", null, true);
            echo "
        </div>
        <div class=\"content active\">
            <form method=\"get\" action=\"";
            // line 19
            echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
            echo "\" class=\"ui loadable form\">
                <div class=\"two fields\">
                ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->extensions['Sylius\Bundle\UiBundle\Twig\SortByExtension']->sortBy(twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "enabledFilters", array()), "position"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                if (twig_get_attribute($this->env, $this->source, $context["filter"], "enabled", array())) {
                    // line 22
                    echo "                    ";
                    echo call_user_func_array($this->env->getFunction('sylius_grid_render_filter')->getCallable(), array(($context["grid"] ?? null), $context["filter"]));
                    echo "

                    ";
                    // line 24
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()) % 2)) {
                        // line 25
                        echo "                        </div>
                        <div class=\"two fields\">
                    ";
                    }
                    // line 28
                    echo "                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                </div>
                ";
            // line 30
            echo $context["buttons"]->macro_filter();
            echo "
                ";
            // line 31
            echo $context["buttons"]->macro_resetFilters(($context["path"] ?? null));
            echo "
            </form>
        </div>
    </div>
";
        }
        // line 36
        echo "
";
        // line 37
        if (((twig_length_filter($this->env, ($context["data"] ?? null)) > 0) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "actionGroups", array(), "any", false, true), "bulk", array(), "any", true, true))) {
            // line 38
            echo "    <div class=\"ui hidden divider\"></div>
    <div class=\"ui styled fluid accordion\">
        <div class=\"title active\">
            <i class=\"dropdown icon\"></i>
            ";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.bulk_actions"), "html", null, true);
            echo "
        </div>
        <div class=\"content active\">
            ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "getEnabledActions", array(0 => "bulk"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 46
                echo "                ";
                echo call_user_func_array($this->env->getFunction('sylius_grid_render_bulk_action')->getCallable(), array(($context["grid"] ?? null), $context["action"], null));
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "        </div>
    </div>
";
        }
        // line 51
        echo "
<div class=\"ui segment overflow-x-auto\">
    ";
        // line 53
        if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "limits", array())) > 1) && (twig_length_filter($this->env, ($context["data"] ?? null)) > min(twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "limits", array()))))) {
            // line 54
            echo "    <div class=\"ui two column fluid stackable grid\">
        <div class=\"fourteen wide column\">
            ";
            // line 56
            echo $context["pagination"]->macro_simple(($context["data"] ?? null));
            echo "
        </div>
        <div class=\"two wide column\">
            <div class=\"ui fluid one item menu sylius-paginate\">
                ";
            // line 60
            echo $context["pagination"]->macro_perPage(($context["data"] ?? null), twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "limits", array()));
            echo "
            </div>
        </div>
    </div>
    ";
        } else {
            // line 65
            echo "        ";
            echo $context["pagination"]->macro_simple(($context["data"] ?? null));
            echo "
    ";
        }
        // line 67
        echo "
    ";
        // line 68
        if ((twig_length_filter($this->env, ($context["data"] ?? null)) > 0)) {
            // line 69
            echo "        <table class=\"ui sortable stackable celled table\">
            <thead>
            <tr>
                ";
            // line 72
            echo $context["table"]->macro_headers(($context["grid"] ?? null), ($context["definition"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()));
            echo "
            </tr>
            </thead>
            <tbody>
            ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 77
                echo "                ";
                echo $context["table"]->macro_row(($context["grid"] ?? null), ($context["definition"] ?? null), $context["row"]);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 82
            echo "        ";
            echo $context["messages"]->macro_info("sylius.ui.no_results_to_display");
            echo "
    ";
        }
        // line 84
        echo "    ";
        echo $context["pagination"]->macro_simple(($context["data"] ?? null));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusUi/Grid/_default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 84,  215 => 82,  210 => 79,  201 => 77,  197 => 76,  190 => 72,  185 => 69,  183 => 68,  180 => 67,  174 => 65,  166 => 60,  159 => 56,  155 => 54,  153 => 53,  149 => 51,  144 => 48,  135 => 46,  131 => 45,  125 => 42,  119 => 38,  117 => 37,  114 => 36,  106 => 31,  102 => 30,  99 => 29,  89 => 28,  84 => 25,  82 => 24,  76 => 22,  65 => 21,  60 => 19,  54 => 16,  48 => 12,  46 => 11,  43 => 10,  41 => 9,  38 => 8,  36 => 7,  34 => 6,  31 => 5,  29 => 4,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusUi/Grid/_default.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Grid/_default.html.twig");
    }
}
