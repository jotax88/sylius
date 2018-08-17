<?php

/* @SyliusAdmin/Product/Grid/Field/image.html.twig */
class __TwigTemplate_fff4ddbb788674c95840c878b547a0524faf74689ef7d8af5ea502b83bae3d75 extends Twig_Template
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
        $this->loadTemplate("@SyliusAdmin/Product/_mainImage.html.twig", "@SyliusAdmin/Product/Grid/Field/image.html.twig", 1)->display(array_merge($context, array("product" => ($context["data"] ?? null))));
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Product/Grid/Field/image.html.twig";
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
        return new Twig_Source("", "@SyliusAdmin/Product/Grid/Field/image.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Product/Grid/Field/image.html.twig");
    }
}
