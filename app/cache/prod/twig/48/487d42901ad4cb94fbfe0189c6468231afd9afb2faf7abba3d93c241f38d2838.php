<?php

/* SyliusUiBundle:Macro:labels.html.twig */
class __TwigTemplate_986ec97ea765a3bf417abfb7afb35b4cfafff7570f81ae8ce18cacee71241bc7 extends Twig_Template
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
        // line 4
        echo "
";
        // line 14
        echo "
";
        // line 21
        echo "
";
        // line 28
        echo "
";
        // line 38
        echo "
";
        // line 45
        echo "
";
    }

    // line 1
    public function macro_default($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <span class=\"ui label\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["text"] ?? null)), "html", null, true);
            echo "</span>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 5
    public function macro_status($__status__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "status" => $__status__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 6
            echo "    ";
            $context["labels"] = $this;
            // line 7
            echo "
    ";
            // line 8
            if (($context["status"] ?? null)) {
                // line 9
                echo "        ";
                echo $context["labels"]->macro_enabled();
                echo "
    ";
            } else {
                // line 11
                echo "        ";
                echo $context["labels"]->macro_disabled();
                echo "
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 15
    public function macro_enabled(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 16
            echo "    <span class=\"ui teal label\">
        <i class=\"checkmark icon\"></i>
        ";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.enabled"), "html", null, true);
            echo "
    </span>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 22
    public function macro_disabled(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 23
            echo "    <span class=\"ui red label\">
        <i class=\"remove icon\"></i>
        ";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.disabled"), "html", null, true);
            echo "
    </span>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 29
    public function macro_yesNo($__value__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "value" => $__value__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 30
            echo "    ";
            $context["labels"] = $this;
            // line 31
            echo "
    ";
            // line 32
            if (($context["value"] ?? null)) {
                // line 33
                echo "        ";
                echo $context["labels"]->macro_yes();
                echo "
    ";
            } else {
                // line 35
                echo "        ";
                echo $context["labels"]->macro_no();
                echo "
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 39
    public function macro_yes(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 40
            echo "    <span class=\"ui basic label\">
        <i class=\"checkmark icon\"></i>
        ";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.yes_label"), "html", null, true);
            echo "
    </span>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 46
    public function macro_no(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 47
            echo "    <span class=\"ui basic label\">
        <i class=\"remove icon\"></i>
        ";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.no_label"), "html", null, true);
            echo "
    </span>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Macro:labels.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 49,  237 => 47,  226 => 46,  214 => 42,  210 => 40,  199 => 39,  186 => 35,  180 => 33,  178 => 32,  175 => 31,  172 => 30,  160 => 29,  148 => 25,  144 => 23,  133 => 22,  121 => 18,  117 => 16,  106 => 15,  93 => 11,  87 => 9,  85 => 8,  82 => 7,  79 => 6,  67 => 5,  55 => 2,  43 => 1,  38 => 45,  35 => 38,  32 => 28,  29 => 21,  26 => 14,  23 => 4,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SyliusUiBundle:Macro:labels.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Macro/labels.html.twig");
    }
}
