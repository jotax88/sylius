<?php

/* @SyliusUi/Grid/Filter/boolean.html.twig */
class __TwigTemplate_c6a4f6145aa0c73a2678ceb17470c27b116511e20174bd46b56fce0b8cb9f1b4 extends Twig_Template
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
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), array(0 => "@SyliusUi/Form/theme.html.twig"), true);
        // line 2
        echo "
";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'row', array("label" => twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "label", array())));
        echo "
";
    }

    public function getTemplateName()
    {
        return "@SyliusUi/Grid/Filter/boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusUi/Grid/Filter/boolean.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Grid/Filter/boolean.html.twig");
    }
}
