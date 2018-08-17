<?php

/* @SyliusUi/Macro/breadcrumb.html.twig */
class __TwigTemplate_1df88104f6d95cf3be2bd37adde668e07e66d4f244fe77d190c4d9e51a45242f extends Twig_Template
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
    public function macro_crumble($__crumbs__ = array(), $__root_path__ = null, $__root_label__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "crumbs" => $__crumbs__,
            "root_path" => $__root_path__,
            "root_label" => $__root_label__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <div class=\"ui breadcrumb\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["crumbs"] ?? null));
            $context['_iterated'] = false;
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["crumb"]) {
                // line 4
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                    // line 5
                    echo "                <div class=\"active section\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["crumb"], "label", array()), "html", null, true);
                    echo "</div>
            ";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 6
$context["crumb"], "url", array(), "any", true, true)) {
                    // line 7
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["crumb"], "url", array()), "html", null, true);
                    echo "\" class=\"section\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["crumb"], "label", array()), "html", null, true);
                    echo "</a>
                <i class=\"right chevron icon divider\"></i>
            ";
                } else {
                    // line 10
                    echo "                <div class=\"section\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["crumb"], "label", array()), "html", null, true);
                    echo "</div>
                <i class=\"right chevron icon divider\"></i>
            ";
                }
                // line 13
                echo "        ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 14
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, (((isset($context["root_url"]) || array_key_exists("root_url", $context))) ? (_twig_default_filter(($context["root_url"] ?? null), "/")) : ("/")), "html", null, true);
                echo "\" class=\"section\">";
                echo twig_escape_filter($this->env, (((isset($context["root_label"]) || array_key_exists("root_label", $context))) ? (_twig_default_filter(($context["root_label"] ?? null), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.root"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.root"))), "html", null, true);
                echo "</a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['crumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SyliusUi/Macro/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 16,  99 => 14,  86 => 13,  79 => 10,  70 => 7,  68 => 6,  63 => 5,  60 => 4,  42 => 3,  39 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusUi/Macro/breadcrumb.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Macro/breadcrumb.html.twig");
    }
}
