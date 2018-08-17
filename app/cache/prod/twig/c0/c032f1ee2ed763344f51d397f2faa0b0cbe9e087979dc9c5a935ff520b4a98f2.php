<?php

/* @SyliusAdmin/Taxon/_treeWithoutButtons.html.twig */
class __TwigTemplate_f1f8978ab53c41a3f67c7e04b879694bc84b7b20e8f411f85192342afb26e014 extends Twig_Template
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
        $context["tree"] = $this;
        // line 2
        echo "
";
        // line 22
        echo "
<div class=\"ui large fluid vertical buttons\">
    <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_product_index");
        echo "\" class=\"ui primary labeled icon button\">
        <i class=\"search icon\"></i>
        ";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.browse_all_products"), "html", null, true);
        echo "
    </a>
    <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_taxon_create");
        echo "\" class=\"ui labeled icon button\">
        <i class=\"sitemap icon\"></i>
        ";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.manage_taxons"), "html", null, true);
        echo "
    </a>
</div>

<div class=\"ui segment\">
    <div class=\"ui list\">
        ";
        // line 36
        echo $context["tree"]->macro_render(($context["taxons"] ?? null));
        echo "
    </div>
</div>
";
    }

    // line 3
    public function macro_render($__taxons__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "taxons" => $__taxons__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo "    ";
            $context["tree"] = $this;
            // line 5
            echo "
    ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["taxons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["taxon"]) {
                // line 7
                echo "        <div class=\"item\">
            <i class=\"folder icon\"></i>
            <div class=\"content\">
                <div class=\"header\">
                    <a href=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_product_per_taxon_index", array("taxonId" => twig_get_attribute($this->env, $this->source, $context["taxon"], "id", array()))), "html", null, true);
                echo "\">
                        ";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taxon"], "name", array()), "html", null, true);
                echo "
                    </a>
                </div>
                <div class=\"list\">
                    ";
                // line 16
                echo $context["tree"]->macro_render(twig_get_attribute($this->env, $this->source, $context["taxon"], "children", array()));
                echo "
                </div>
            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Taxon/_treeWithoutButtons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 16,  96 => 12,  92 => 11,  86 => 7,  82 => 6,  79 => 5,  76 => 4,  64 => 3,  56 => 36,  47 => 30,  42 => 28,  37 => 26,  32 => 24,  28 => 22,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusAdmin/Taxon/_treeWithoutButtons.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Taxon/_treeWithoutButtons.html.twig");
    }
}
