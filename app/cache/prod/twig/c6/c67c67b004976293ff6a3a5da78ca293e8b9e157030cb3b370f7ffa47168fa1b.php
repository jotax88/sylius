<?php

/* @SyliusUi/Macro/messages.html.twig */
class __TwigTemplate_4a65b7b92c9848547d41f2d4f9ef86734a02857c5590870cba9370e4559b2ca2 extends Twig_Template
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
        // line 14
        echo "
";
        // line 19
        echo "
";
        // line 24
        echo "
";
    }

    // line 1
    public function macro_default($__message__ = null, $__icon__ = null, $__type__ = null, $__header__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "message" => $__message__,
            "icon" => $__icon__,
            "type" => $__type__,
            "header" => $__header__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <div class=\"ui icon ";
            echo twig_escape_filter($this->env, (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "")) : ("")), "html", null, true);
            echo " message\">
        <i class=\"";
            // line 3
            echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
            echo " icon\"></i>
        <div class=\"content\">
            ";
            // line 5
            if ( !twig_test_empty(($context["type"] ?? null))) {
                // line 6
                echo "            <div class=\"header\">
                ";
                // line 7
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((((isset($context["header"]) || array_key_exists("header", $context))) ? (_twig_default_filter(($context["header"] ?? null), ($context["type"] ?? null))) : (($context["type"] ?? null)))), "html", null, true);
                echo "
            </div>
            ";
            }
            // line 10
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["message"] ?? null)), "html", null, true);
            echo "</p>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 15
    public function macro_info($__message__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "message" => $__message__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 16
            echo "    ";
            $context["messages"] = $this;
            // line 17
            echo "    ";
            echo $context["messages"]->macro_default(($context["message"] ?? null), "info circle", "info", "sylius.ui.info");
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 20
    public function macro_success($__message__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "message" => $__message__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 21
            echo "    ";
            $context["messages"] = $this;
            // line 22
            echo "    ";
            echo $context["messages"]->macro_default(($context["message"] ?? null), "checkmark", "success", "sylius.ui.success");
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 25
    public function macro_error($__message__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "message" => $__message__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 26
            echo "    ";
            $context["messages"] = $this;
            // line 27
            echo "    ";
            echo $context["messages"]->macro_default(($context["message"] ?? null), "remove", "negative", "sylius.ui.error");
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SyliusUi/Macro/messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 27,  150 => 26,  138 => 25,  126 => 22,  123 => 21,  111 => 20,  99 => 17,  96 => 16,  84 => 15,  70 => 10,  64 => 7,  61 => 6,  59 => 5,  54 => 3,  49 => 2,  34 => 1,  29 => 24,  26 => 19,  23 => 14,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusUi/Macro/messages.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Macro/messages.html.twig");
    }
}
