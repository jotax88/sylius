<?php

/* @SyliusUi/Macro/sorting.html.twig */
class __TwigTemplate_cae97b28d6af57308d2315424ed0749114d63e9c3c12a0cef977768af011fb51 extends Twig_Template
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
        // line 15
        echo "
";
    }

    // line 1
    public function macro_tableHeader($__grid__ = null, $__field__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "grid" => $__grid__,
            "field" => $__field__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["__internal_b8cbe76fd26263d87c03e7657e669c86c196aeca44959db80d61e8fb197bbb6c"] = $this;
            // line 3
            echo "    ";
            $context["order"] = twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "getSortingOrder", array(0 => twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", array())), "method");
            // line 4
            echo "
    ";
            // line 5
            if (twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "isSortedBy", array(0 => twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", array())), "method")) {
                // line 6
                echo "        <th class=\"sortable sorted ";
                echo (((($context["order"] ?? null) == "desc")) ? ("descending") : ("ascending"));
                echo " sylius-table-column-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", array()), "html", null, true);
                echo "\">
            <a href=\"";
                // line 7
                echo $context["__internal_b8cbe76fd26263d87c03e7657e669c86c196aeca44959db80d61e8fb197bbb6c"]->macro_link(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", array()), ($context["attributes"] ?? null), (((($context["order"] ?? null) == "desc")) ? ("asc") : ("desc")), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "parameters", array()), "all", array()));
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", array())), "html", null, true);
                echo "</a>
        </th>
    ";
            } else {
                // line 10
                echo "        <th class=\"sortable sylius-table-column-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", array()), "html", null, true);
                echo "\">
            <a href=\"";
                // line 11
                echo $context["__internal_b8cbe76fd26263d87c03e7657e669c86c196aeca44959db80d61e8fb197bbb6c"]->macro_link(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", array()), ($context["attributes"] ?? null), ($context["order"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "parameters", array()), "all", array()));
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", array())), "html", null, true);
                echo "<i class=\"sort icon\"></i></a>
        </th>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 16
    public function macro_link($__fieldName__ = null, $__attributes__ = null, $__order__ = null, $__parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "fieldName" => $__fieldName__,
            "attributes" => $__attributes__,
            "order" => $__order__,
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 17
            echo "    ";
            $context["params"] = twig_array_merge(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "get", array(0 => "_route_params"), "method"), ($context["parameters"] ?? null));
            // line 18
            echo "    ";
            $context["sorting"] = array("sorting" => array(($context["fieldName"] ?? null) => ($context["order"] ?? null)));
            // line 19
            echo "
    ";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "get", array(0 => "_route"), "method"), twig_array_merge(twig_array_merge(($context["params"] ?? null), ($context["sorting"] ?? null)), array("page" => 1))), "html", null, true);
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SyliusUi/Macro/sorting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 20,  109 => 19,  106 => 18,  103 => 17,  88 => 16,  73 => 11,  68 => 10,  60 => 7,  53 => 6,  51 => 5,  48 => 4,  45 => 3,  42 => 2,  28 => 1,  23 => 15,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusUi/Macro/sorting.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Macro/sorting.html.twig");
    }
}
