<?php

/* @SyliusAdmin/Product/Grid/Field/mainTaxon.html.twig */
class __TwigTemplate_61231bbbd23bd6e6fa9863ec861b9bb020f61a0bad8993edae1e259b75e758b9 extends Twig_Template
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
        if ( !(null === ($context["data"] ?? null))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "name", array()), "html", null, true);
        }
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Product/Grid/Field/mainTaxon.html.twig";
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
        return new Twig_Source("", "@SyliusAdmin/Product/Grid/Field/mainTaxon.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Product/Grid/Field/mainTaxon.html.twig");
    }
}
