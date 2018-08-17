<?php

/* @SyliusAdmin/Customer/Grid/Field/verified.html.twig */
class __TwigTemplate_ad110410ce516ca418683f560c9cf5d24645654c48967696682e0c872a58b928 extends Twig_Template
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
        $context["label"] = $this->loadTemplate("@SyliusUi/Macro/labels.html.twig", "@SyliusAdmin/Customer/Grid/Field/verified.html.twig", 1);
        // line 2
        echo $context["label"]->macro_yesNo(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "user", array(), "any", false, true), "verified", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "user", array(), "any", false, true), "verified", array()), false)) : (false)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Customer/Grid/Field/verified.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusAdmin/Customer/Grid/Field/verified.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Customer/Grid/Field/verified.html.twig");
    }
}
