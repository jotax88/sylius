<?php

/* @SyliusAdmin/Crud/Index/_content.html.twig */
class __TwigTemplate_47d3c5021d4b38d613e70e36308a35765f6b11820cc5add71e3512cba5535731 extends Twig_Template
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
        echo call_user_func_array($this->env->getFunction('sylius_grid_render')->getCallable(), array(($context["resources"] ?? null), "@SyliusUi/Grid/_default.html.twig"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Crud/Index/_content.html.twig";
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
        return new Twig_Source("", "@SyliusAdmin/Crud/Index/_content.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Crud/Index/_content.html.twig");
    }
}
