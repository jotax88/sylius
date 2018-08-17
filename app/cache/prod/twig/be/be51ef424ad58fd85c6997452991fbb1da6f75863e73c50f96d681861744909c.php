<?php

/* @SyliusShop/Product/Show/_tabs.html.twig */
class __TwigTemplate_843e4b9efcefaaf396fbccbf9d32c53e7c04f371c08970520dcf274fabdeb099 extends Twig_Template
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
        echo "<div class=\"ui top attached large tabular menu\">
    ";
        // line 2
        $this->loadTemplate("@SyliusShop/Product/Show/Tabs/_menu.html.twig", "@SyliusShop/Product/Show/_tabs.html.twig", 2)->display($context);
        // line 3
        echo "</div>

";
        // line 5
        $this->loadTemplate("@SyliusShop/Product/Show/Tabs/_content.html.twig", "@SyliusShop/Product/Show/_tabs.html.twig", 5)->display($context);
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  28 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusShop/Product/Show/_tabs.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Product/Show/_tabs.html.twig");
    }
}
