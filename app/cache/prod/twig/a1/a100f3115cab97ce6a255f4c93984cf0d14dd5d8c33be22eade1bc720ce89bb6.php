<?php

/* @SyliusAdmin/_flashes.html.twig */
class __TwigTemplate_eee9b7428c03bec2d4ebc04cb5341c052042fdc596a91644b4ed09d47af48d43 extends Twig_Template
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
        $this->loadTemplate("@SyliusUi/_flashes.html.twig", "@SyliusAdmin/_flashes.html.twig", 1)->display($context);
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/_flashes.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusAdmin/_flashes.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/_flashes.html.twig");
    }
}
