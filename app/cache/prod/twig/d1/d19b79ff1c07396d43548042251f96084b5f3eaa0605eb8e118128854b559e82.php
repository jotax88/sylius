<?php

/* @SyliusShop/_flashes.html.twig */
class __TwigTemplate_7cf999c38228888fa73c9c5af45e63589ca437a6f0dbfc0efdca82561ff4478a extends Twig_Template
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
        $this->loadTemplate("@SyliusUi/_flashes.html.twig", "@SyliusShop/_flashes.html.twig", 1)->display($context);
    }

    public function getTemplateName()
    {
        return "@SyliusShop/_flashes.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusShop/_flashes.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/_flashes.html.twig");
    }
}
