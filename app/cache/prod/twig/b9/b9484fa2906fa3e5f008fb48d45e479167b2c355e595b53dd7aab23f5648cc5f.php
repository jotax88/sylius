<?php

/* SyliusUiBundle:Macro:buttons.html.twig */
class __TwigTemplate_1917b2a0090be30fa4a3f95172a65bb9fe0d0f62f08a1df5d89629e7b6b6a862 extends Twig_Template
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
        // line 11
        echo "
";
        // line 21
        echo "
";
        // line 31
        echo "
";
        // line 41
        echo "
";
        // line 47
        echo "
";
        // line 53
        echo "
";
        // line 63
        echo "
";
    }

    // line 1
    public function macro_default($__url__ = null, $__message__ = null, $__id__ = null, $__icon__ = null, $__class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "message" => $__message__,
            "id" => $__id__,
            "icon" => $__icon__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <a class=\"ui ";
            if ( !twig_test_empty(($context["message"] ?? null))) {
                echo "labeled ";
            }
            if ( !twig_test_empty(($context["icon"] ?? null))) {
                echo "icon ";
            }
            echo "button ";
            if ( !twig_test_empty(($context["class"] ?? null))) {
                echo " ";
                echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                echo " ";
            }
            echo "\" ";
            if ( !(null === ($context["id"] ?? null))) {
                echo " id=\"";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\">
        ";
            // line 3
            if ( !twig_test_empty(($context["icon"] ?? null))) {
                // line 4
                echo "            <i class=\"icon ";
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo "\"></i>
        ";
            }
            // line 6
            echo "        ";
            if ( !twig_test_empty(($context["message"] ?? null))) {
                // line 7
                echo "            ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["message"] ?? null)), "html", null, true);
                echo "
        ";
            }
            // line 9
            echo "    </a>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 12
    public function macro_show($__url__ = null, $__message__ = null, $__id__ = null, $__class__ = null, $__labeled__ = true, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "message" => $__message__,
            "id" => $__id__,
            "class" => $__class__,
            "labeled" => $__labeled__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 13
            echo "    ";
            $context["buttons"] = $this;
            // line 14
            echo "
    ";
            // line 15
            if ((twig_test_empty(($context["message"] ?? null)) && ($context["labeled"] ?? null))) {
                // line 16
                echo "        ";
                $context["message"] = "sylius.ui.show";
                // line 17
                echo "    ";
            }
            // line 18
            echo "
    ";
            // line 19
            echo $context["buttons"]->macro_default(($context["url"] ?? null), ($context["message"] ?? null), ($context["id"] ?? null), "search");
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 22
    public function macro_create($__url__ = null, $__message__ = null, $__id__ = null, $__labeled__ = true, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "message" => $__message__,
            "id" => $__id__,
            "labeled" => $__labeled__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 23
            echo "    ";
            $context["buttons"] = $this;
            // line 24
            echo "
    ";
            // line 25
            if ((twig_test_empty(($context["message"] ?? null)) && ($context["labeled"] ?? null))) {
                // line 26
                echo "        ";
                $context["message"] = "sylius.ui.create";
                // line 27
                echo "    ";
            }
            // line 28
            echo "
    ";
            // line 29
            echo $context["buttons"]->macro_default(($context["url"] ?? null), ($context["message"] ?? null), ($context["id"] ?? null), "plus", "primary");
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 32
    public function macro_edit($__url__ = null, $__message__ = null, $__id__ = null, $__labeled__ = true, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "message" => $__message__,
            "id" => $__id__,
            "labeled" => $__labeled__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 33
            echo "    ";
            $context["buttons"] = $this;
            // line 34
            echo "
    ";
            // line 35
            if ((twig_test_empty(($context["message"] ?? null)) && ($context["labeled"] ?? null))) {
                // line 36
                echo "        ";
                $context["message"] = "sylius.ui.edit";
                // line 37
                echo "    ";
            }
            // line 38
            echo "
    ";
            // line 39
            echo $context["buttons"]->macro_default(($context["url"] ?? null), ($context["message"] ?? null), ($context["id"] ?? null), "pencil");
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 42
    public function macro_filter($__message__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "message" => $__message__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 43
            echo "    <button class=\"ui blue labeled icon button\" type=\"submit\">
        <i class=\"icon search\"></i> ";
            // line 44
            echo twig_escape_filter($this->env, ((twig_test_empty(($context["message"] ?? null))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.filter")) : (($context["message"] ?? null))), "html", null, true);
            echo "
    </button>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 48
    public function macro_resetFilters($__url__ = null, $__message__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "message" => $__message__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 49
            echo "    <a class=\"ui labeled icon button\" href=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\">
        <i class=\"icon remove\"></i> ";
            // line 50
            echo twig_escape_filter($this->env, ((twig_test_empty(($context["message"] ?? null))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.clear_filters")) : (($context["message"] ?? null))), "html", null, true);
            echo "
    </a>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 54
    public function macro_delete($__url__ = null, $__message__ = null, $__labeled__ = true, $__resourceId__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "message" => $__message__,
            "labeled" => $__labeled__,
            "resourceId" => $__resourceId__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 55
            echo "    <form action=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\" method=\"post\">
        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
        <button class=\"ui red ";
            // line 57
            if (($context["labeled"] ?? null)) {
                echo "labeled ";
            }
            echo "icon button\" type=\"submit\" data-requires-confirmation>
            <i class=\"icon trash\"></i> ";
            // line 58
            echo twig_escape_filter($this->env, (((twig_test_empty(($context["message"] ?? null)) && ($context["labeled"] ?? null))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.delete")) : (($context["message"] ?? null))), "html", null, true);
            echo "
        </button>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(($context["resourceId"] ?? null)), "html", null, true);
            echo "\" />
    </form>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 64
    public function macro_bulkDelete($__url__ = null, $__message__ = null, $__labeled__ = true, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "message" => $__message__,
            "labeled" => $__labeled__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 65
            echo "    <form action=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\" method=\"post\">
        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
        <button class=\"ui red ";
            // line 67
            if (($context["labeled"] ?? null)) {
                echo "labeled ";
            }
            echo "icon button\" type=\"submit\" data-bulk-action-requires-confirmation>
            <i class=\"icon trash\"></i> ";
            // line 68
            echo twig_escape_filter($this->env, (((twig_test_empty(($context["message"] ?? null)) && ($context["labeled"] ?? null))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.delete")) : (($context["message"] ?? null))), "html", null, true);
            echo "
        </button>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("bulk_delete"), "html", null, true);
            echo "\" />
    </form>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Macro:buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 70,  370 => 68,  364 => 67,  358 => 65,  344 => 64,  332 => 60,  327 => 58,  321 => 57,  315 => 55,  300 => 54,  288 => 50,  283 => 49,  270 => 48,  258 => 44,  255 => 43,  243 => 42,  232 => 39,  229 => 38,  226 => 37,  223 => 36,  221 => 35,  218 => 34,  215 => 33,  200 => 32,  189 => 29,  186 => 28,  183 => 27,  180 => 26,  178 => 25,  175 => 24,  172 => 23,  157 => 22,  146 => 19,  143 => 18,  140 => 17,  137 => 16,  135 => 15,  132 => 14,  129 => 13,  113 => 12,  103 => 9,  97 => 7,  94 => 6,  88 => 4,  86 => 3,  62 => 2,  46 => 1,  41 => 63,  38 => 53,  35 => 47,  32 => 41,  29 => 31,  26 => 21,  23 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SyliusUiBundle:Macro:buttons.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Macro/buttons.html.twig");
    }
}
