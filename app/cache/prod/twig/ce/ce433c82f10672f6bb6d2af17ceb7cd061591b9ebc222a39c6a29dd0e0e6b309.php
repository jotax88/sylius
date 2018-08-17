<?php

/* SyliusUiBundle:Macro:headers.html.twig */
class __TwigTemplate_91e6c065a66e11f3abf1a22f5762c3eb2f44785e98db01b268948b4a25233f80 extends Twig_Template
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
    }

    // line 1
    public function macro_default($__header__ = null, $__icon__ = null, $__subheader__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "header" => $__header__,
            "icon" => $__icon__,
            "subheader" => $__subheader__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "<h1 class=\"ui header\">
    ";
            // line 3
            if ( !twig_test_empty(($context["icon"] ?? null))) {
                // line 4
                echo "    <i class=\"circular ";
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo " icon\"></i>
    ";
            }
            // line 6
            echo "    <div class=\"content\">
        ";
            // line 7
            echo twig_escape_filter($this->env, ($context["header"] ?? null), "html", null, true);
            echo "
        ";
            // line 8
            if ( !twig_test_empty(($context["subheader"] ?? null))) {
                // line 9
                echo "        <div class=\"sub header\">";
                echo twig_escape_filter($this->env, ($context["subheader"] ?? null), "html", null, true);
                echo "</div>
        ";
            }
            // line 11
            echo "    </div>
</h1>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Macro:headers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 11,  59 => 9,  57 => 8,  53 => 7,  50 => 6,  44 => 4,  42 => 3,  39 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SyliusUiBundle:Macro:headers.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Macro/headers.html.twig");
    }
}
