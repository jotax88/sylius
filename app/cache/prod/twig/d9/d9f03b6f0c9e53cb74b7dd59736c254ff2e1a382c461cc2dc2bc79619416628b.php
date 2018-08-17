<?php

/* @SyliusShop/Product/Show/_header.html.twig */
class __TwigTemplate_79a93d590449bea366b51960a1546faadc02c9857b390dd8b550e270b52d9009 extends Twig_Template
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
        echo "<h1 id=\"sylius-product-name\" class=\"ui monster dividing header\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", array()), "html", null, true);
        echo "</h1>
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusShop/Product/Show/_header.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Product/Show/_header.html.twig");
    }
}
