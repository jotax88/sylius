<?php

/* @SyliusShop/Taxon/_verticalMenu.html.twig */
class __TwigTemplate_37511014fd77be43bad93fa83210b1ada73d44ecde3f5001e05696f861927a43 extends Twig_Template
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
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.index.before_vertical_menu", array("taxon" => ($context["taxon"] ?? null))));
        echo "

<div class=\"ui fluid vertical menu\">
    <div class=\"header item\">";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["taxon"] ?? null), "name", array()), "html", null, true);
        echo "</div>
    ";
        // line 5
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["taxon"] ?? null), "parent", array())) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["taxon"] ?? null), "parent", array()), "isRoot", array(), "method"))) {
            // line 6
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_index", array("slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["taxon"] ?? null), "parent", array()), "slug", array()), "_locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["taxon"] ?? null), "parent", array()), "translation", array()), "locale", array()))), "html", null, true);
            echo "\" class=\"item\">
            <i class=\"up arrow icon\"></i> ";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.go_level_up"), "html", null, true);
            echo "
        </a>
    ";
        }
        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["taxon"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 11
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_index", array("slug" => twig_get_attribute($this->env, $this->source, $context["child"], "slug", array()), "_locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "translation", array()), "locale", array()))), "html", null, true);
            echo "\" class=\"item\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "name", array()), "html", null, true);
            echo "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</div>

";
        // line 15
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.index.after_vertical_menu", array("taxon" => ($context["taxon"] ?? null))));
        echo "
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Taxon/_verticalMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 15,  62 => 13,  51 => 11,  46 => 10,  40 => 7,  35 => 6,  33 => 5,  29 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusShop/Taxon/_verticalMenu.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Taxon/_verticalMenu.html.twig");
    }
}
