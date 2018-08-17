<?php

/* @SyliusShop/Product/Show/_association.html.twig */
class __TwigTemplate_800f7f1dc7609bbaf4335469f81937a6915a8b13d540c9f2120c37742a9ba292 extends Twig_Template
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
        echo "<h4 class=\"ui horizontal section divider header\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product_association"] ?? null), "type", array()), "name", array()), "html", null, true);
        echo "</h4>
<div id=\"sylius-product-association-";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product_association"] ?? null), "type", array()), "name", array()), "html", null, true);
        echo "\">
";
        // line 3
        $this->loadTemplate("@SyliusShop/Product/_horizontalList.html.twig", "@SyliusShop/Product/Show/_association.html.twig", 3)->display(array_merge($context, array("products" => twig_get_attribute($this->env, $this->source, ($context["product_association"] ?? null), "associatedProducts", array()))));
        // line 4
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/_association.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  32 => 3,  28 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusShop/Product/Show/_association.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Product/Show/_association.html.twig");
    }
}
