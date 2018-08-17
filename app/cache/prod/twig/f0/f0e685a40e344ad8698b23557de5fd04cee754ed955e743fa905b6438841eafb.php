<?php

/* @SyliusShop/Product/Show/_price.html.twig */
class __TwigTemplate_94972ef087b1dc6297902c192369b285d559e8f8a2b6614b1a852dca0a2852eb extends Twig_Template
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
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "@SyliusShop/Product/Show/_price.html.twig", 1);
        // line 2
        echo "
<span class=\"ui huge header\" id=\"product-price\">
    ";
        // line 4
        echo $context["money"]->macro_calculatePrice(call_user_func_array($this->env->getFilter('sylius_resolve_variant')->getCallable(), array(($context["product"] ?? null))));
        echo "
</span>
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/_price.html.twig";
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
        return new Twig_Source("", "@SyliusShop/Product/Show/_price.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Product/Show/_price.html.twig");
    }
}
