<?php

/* @SyliusShop/Taxon/_horizontalMenu.html.twig */
class __TwigTemplate_dd5b760faf70aed541ae4cc3d0757070e66bb67d91afa5befafa646c37032f4c extends Twig_Template
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
        // line 18
        echo "
";
        // line 19
        $context["macros"] = $this;
        // line 20
        echo "
";
        // line 21
        if ((twig_length_filter($this->env, ($context["taxons"] ?? null)) > 0)) {
            // line 22
            echo "<div class=\"ui large stackable menu\">
    ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["taxons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["taxon"]) {
                // line 24
                echo "        ";
                echo $context["macros"]->macro_item($context["taxon"]);
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "</div>
";
        }
    }

    // line 1
    public function macro_item($__taxon__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "taxon" => $__taxon__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["macros"] = $this;
            // line 3
            echo "
    ";
            // line 4
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["taxon"] ?? null), "children", array())) > 0)) {
                // line 5
                echo "        <div class=\"ui dropdown item\">
            <span class=\"text\">";
                // line 6
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["taxon"] ?? null), "name", array()), "html", null, true);
                echo "</span>
            <i class=\"dropdown icon\"></i>
            <div class=\"menu\">
                ";
                // line 9
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["taxon"] ?? null), "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["childTaxon"]) {
                    // line 10
                    echo "                    ";
                    echo $context["macros"]->macro_item($context["childTaxon"]);
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childTaxon'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 12
                echo "            </div>
        </div>
    ";
            } else {
                // line 15
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_index", array("slug" => twig_get_attribute($this->env, $this->source, ($context["taxon"] ?? null), "slug", array()), "_locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["taxon"] ?? null), "translation", array()), "locale", array()))), "html", null, true);
                echo "\" class=\"item\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["taxon"] ?? null), "name", array()), "html", null, true);
                echo "</a>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Taxon/_horizontalMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 15,  97 => 12,  88 => 10,  84 => 9,  78 => 6,  75 => 5,  73 => 4,  70 => 3,  67 => 2,  55 => 1,  49 => 26,  40 => 24,  36 => 23,  33 => 22,  31 => 21,  28 => 20,  26 => 19,  23 => 18,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusShop/Taxon/_horizontalMenu.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Taxon/_horizontalMenu.html.twig");
    }
}
