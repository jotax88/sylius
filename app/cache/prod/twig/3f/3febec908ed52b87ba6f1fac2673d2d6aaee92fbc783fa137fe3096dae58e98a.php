<?php

/* @SyliusShop/Product/Show/Tabs/_reviews.html.twig */
class __TwigTemplate_e3e93a7a275d0833ec6ae63a2bbb96438b5afd1821af5b5c0d47d684736bb53b extends Twig_Template
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
        echo "<div class=\"ui bottom attached tab segment\" data-tab=\"reviews\" id=\"sylius-product-reviews\">
    ";
        // line 2
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.tab_reviews", array("product" => ($context["product"] ?? null))));
        echo "

    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sylius_shop_partial_product_review_latest", array("productId" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", array()), "template" => "@SyliusShop/ProductReview/_list.html.twig")));
        echo "

    <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_review_index", array("slug" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slug", array()), "_locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "translation", array()), "locale", array()))), "html", null, true);
        echo "\">
        <div class=\"ui labeled icon button\"><i class=\"icon list\"></i> ";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.view_more"), "html", null, true);
        echo "</div>
    </a>
    <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_review_create", array("slug" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slug", array()), "_locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "translation", array()), "locale", array()))), "html", null, true);
        echo "\">
        <div class=\"ui blue labeled icon button\"><i class=\"icon plus\"></i> ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.add_your_review"), "html", null, true);
        echo "</div>
    </a>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/Tabs/_reviews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 10,  45 => 9,  40 => 7,  36 => 6,  31 => 4,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusShop/Product/Show/Tabs/_reviews.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Product/Show/Tabs/_reviews.html.twig");
    }
}
