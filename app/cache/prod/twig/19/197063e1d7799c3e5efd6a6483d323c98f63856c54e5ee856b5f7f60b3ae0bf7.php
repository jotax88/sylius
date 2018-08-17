<?php

/* @SyliusUi/Grid/Filter/string.html.twig */
class __TwigTemplate_6d2ef1d13fb468b6ed1615e2ce78bc74259ba386afacf96854ff920ec39bbc94 extends Twig_Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "type", array(), "any", true, true)) {
            // line 4
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "type", array()), 'row', array("label" => twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "label", array())));
            echo "
";
        }
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value", array()), 'row', array("label" => ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "type", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value", array()), "vars", array()), "label", array())) : (twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "label", array())))));
        echo "
";
    }

    public function getTemplateName()
    {
        return "@SyliusUi/Grid/Filter/string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  30 => 4,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusUi/Grid/Filter/string.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Grid/Filter/string.html.twig");
    }
}
