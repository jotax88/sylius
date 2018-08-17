<?php

/* @SyliusShop/Product/show.html.twig */
class __TwigTemplate_bde896f8c7e494732cdeba1bed075a3071d0d4d266d28ce442d2c259d6b18ac2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "@SyliusShop/Product/show.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusShop/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        $this->loadTemplate("@SyliusShop/Product/Show/_breadcrumb.html.twig", "@SyliusShop/Product/show.html.twig", 4)->display($context);
        // line 5
        echo "<div class=\"ui hidden divider\"></div>

<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        ";
        // line 9
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.before_images", array("product" => ($context["product"] ?? null))));
        echo "

        ";
        // line 11
        $this->loadTemplate("@SyliusShop/Product/Show/_images.html.twig", "@SyliusShop/Product/show.html.twig", 11)->display($context);
        // line 12
        echo "
        ";
        // line 13
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.after_images", array("product" => ($context["product"] ?? null))));
        echo "
    </div>
    <div class=\"column\">
        ";
        // line 16
        $this->loadTemplate("@SyliusShop/Product/Show/_header.html.twig", "@SyliusShop/Product/show.html.twig", 16)->display($context);
        // line 17
        echo "
        ";
        // line 18
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.after_product_header", array("product" => ($context["product"] ?? null))));
        echo "

        ";
        // line 20
        $this->loadTemplate("@SyliusShop/Product/Show/_reviews.html.twig", "@SyliusShop/Product/show.html.twig", 20)->display($context);
        // line 21
        echo "
        ";
        // line 22
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.after_reviews", array("product" => ($context["product"] ?? null))));
        echo "

        <div class=\"ui stackable grid\">
            <div class=\"four wide column\">
                ";
        // line 26
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variants", array()), "empty", array(), "method")) {
            // line 27
            echo "                ";
            $this->loadTemplate("@SyliusShop/Product/Show/_price.html.twig", "@SyliusShop/Product/show.html.twig", 27)->display($context);
            // line 28
            echo "                ";
        }
        // line 29
        echo "            </div>
            <div class=\"twelve wide right aligned column\">
                <span class=\"ui sub header\">";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "code", array()), "html", null, true);
        echo "</span>
            </div>
        </div>

        ";
        // line 35
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.after_price", array("product" => ($context["product"] ?? null))));
        echo "

        <div class=\"ui basic segment\">
            <p>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "shortDescription", array()), "html", null, true);
        echo "</p>
        </div>

        ";
        // line 41
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.after_description", array("product" => ($context["product"] ?? null))));
        echo "

        ";
        // line 43
        if (((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "isConfigurable", array(), "method") && (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getVariantSelectionMethod", array(), "method") == "match")) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variants", array()), "empty", array(), "method"))) {
            // line 44
            echo "            ";
            $this->loadTemplate("@SyliusShop/Product/Show/_variantsPricing.html.twig", "@SyliusShop/Product/show.html.twig", 44)->display(array_merge($context, array("pricing" => call_user_func_array($this->env->getFunction('sylius_product_variant_prices')->getCallable(), array(($context["product"] ?? null), twig_get_attribute($this->env, $this->source, ($context["sylius"] ?? null), "channel", array()))))));
            // line 45
            echo "        ";
        }
        // line 46
        echo "        ";
        $this->loadTemplate("@SyliusShop/Product/Show/_inventory.html.twig", "@SyliusShop/Product/show.html.twig", 46)->display($context);
        // line 47
        echo "        <div class=\"ui hidden divider\"></div>

        ";
        // line 49
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.after_add_to_cart", array("product" => ($context["product"] ?? null))));
        echo "
    </div>
</div>

";
        // line 53
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.before_tabs", array("product" => ($context["product"] ?? null))));
        echo "

";
        // line 55
        $this->loadTemplate("@SyliusShop/Product/Show/_tabs.html.twig", "@SyliusShop/Product/show.html.twig", 55)->display($context);
        // line 56
        echo "
";
        // line 57
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.before_associations", array("product" => ($context["product"] ?? null))));
        echo "

";
        // line 59
        $this->loadTemplate("@SyliusShop/Product/Show/_associations.html.twig", "@SyliusShop/Product/show.html.twig", 59)->display($context);
    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        // line 63
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

<script type=\"text/javascript\">
    lightbox.option({
        'albumLabel': '";
        // line 67
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.lightbox.image_album_label"), "js"), "html", null, true);
        echo "'
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 67,  162 => 63,  159 => 62,  155 => 59,  150 => 57,  147 => 56,  145 => 55,  140 => 53,  133 => 49,  129 => 47,  126 => 46,  123 => 45,  120 => 44,  118 => 43,  113 => 41,  107 => 38,  101 => 35,  94 => 31,  90 => 29,  87 => 28,  84 => 27,  82 => 26,  75 => 22,  72 => 21,  70 => 20,  65 => 18,  62 => 17,  60 => 16,  54 => 13,  51 => 12,  49 => 11,  44 => 9,  38 => 5,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusShop/Product/show.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Product/show.html.twig");
    }
}
