<?php

/* @SyliusUi/Grid/Field/enabled.html.twig */
class __TwigTemplate_8da0a862e982619e07f8e4f76ada1fae329fce33e508b4bfbdc9dca65df5df48 extends Twig_Template
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
        $context["label"] = $this->loadTemplate("@SyliusUi/Macro/labels.html.twig", "@SyliusUi/Grid/Field/enabled.html.twig", 1);
        // line 2
        echo $context["label"]->macro_status(($context["data"] ?? null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "@SyliusUi/Grid/Field/enabled.html.twig";
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
        return new Twig_Source("", "@SyliusUi/Grid/Field/enabled.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Grid/Field/enabled.html.twig");
    }
}
