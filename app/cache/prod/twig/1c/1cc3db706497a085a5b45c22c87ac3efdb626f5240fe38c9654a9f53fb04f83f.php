<?php

/* @SyliusShop/Product/Show/_inventory.html.twig */
class __TwigTemplate_cfc55b3647989fdf51e98986d10865ef2a5d91debd0453443734716812894fc2 extends Twig_Template
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variants", array()), "empty", array(), "method") || (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "simple", array()) &&  !call_user_func_array($this->env->getFunction('sylius_inventory_is_available')->getCallable(), array(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variants", array()), "first", array())))))) {
            // line 2
            echo "    ";
            $this->loadTemplate("@SyliusShop/Product/Show/_outOfStock.html.twig", "@SyliusShop/Product/Show/_inventory.html.twig", 2)->display($context);
        } else {
            // line 4
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sylius_shop_partial_cart_add_item", array("template" => "@SyliusShop/Product/Show/_addToCart.html.twig", "productId" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", array()))));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/_inventory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusShop/Product/Show/_inventory.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Product/Show/_inventory.html.twig");
    }
}
