<?php

/* @SyliusUi/Macro/pagination.html.twig */
class __TwigTemplate_7d8b372d77b2d44559293a8b6d68266775e6a083b235cc5f3c95dbeb20407da7 extends Twig_Template
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
        // line 6
        echo "
";
    }

    // line 1
    public function macro_simple($__paginator__ = null, $__options__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "paginator" => $__paginator__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "haveToPaginate", array(), "method")) {
                // line 3
                echo "        ";
                echo $this->extensions['WhiteOctober\PagerfantaBundle\Twig\PagerfantaExtension']->renderPagerfanta(($context["paginator"] ?? null), "semantic_ui_translated", (((isset($context["options"]) || array_key_exists("options", $context))) ? (_twig_default_filter(($context["options"] ?? null), array())) : (array())));
                echo "
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 7
    public function macro_perPage($__paginator__ = null, $__paginationLimits__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "paginator" => $__paginator__,
            "paginationLimits" => $__paginationLimits__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 8
            echo "    <div class=\"ui simple fluid dropdown item\">
        ";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.show"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "maxPerPage", array()), "html", null, true);
            echo "
        <i class=\"dropdown icon\"></i>
        <div class=\"menu\">
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["paginationLimits"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["limit"]) {
                if (($context["limit"] != twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "maxPerPage", array()))) {
                    // line 13
                    echo "            ";
                    $context["path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge(twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "query", array())), array("limit" => $context["limit"])));
                    // line 14
                    echo "            <a class=\"item\" href=\"";
                    echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["limit"], "html", null, true);
                    echo "</a>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SyliusUi/Macro/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 16,  89 => 14,  86 => 13,  81 => 12,  73 => 9,  70 => 8,  57 => 7,  44 => 3,  41 => 2,  28 => 1,  23 => 6,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusUi/Macro/pagination.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Macro/pagination.html.twig");
    }
}
