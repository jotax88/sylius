<?php

/* @SyliusShop/Login/_form.html.twig */
class __TwigTemplate_087dd77964f52c8dfaf7e7d64900916e0a480d66ac98804ac7c893d3cd66bbeb extends Twig_Template
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
        $context["messages"] = $this->loadTemplate("@SyliusUi/Macro/messages.html.twig", "@SyliusShop/Login/_form.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        if (($context["last_error"] ?? null)) {
            // line 4
            echo "    ";
            echo $context["messages"]->macro_error($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["last_error"] ?? null), "messageKey", array()), twig_get_attribute($this->env, $this->source, ($context["last_error"] ?? null), "messageData", array()), "security"));
            echo "
";
        }
        // line 6
        echo "
";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_username", array()), 'row');
        echo "
";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_password", array()), 'row');
        echo "
";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_remember_me", array()), 'row');
        echo "
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Login/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  43 => 8,  39 => 7,  36 => 6,  30 => 4,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusShop/Login/_form.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Login/_form.html.twig");
    }
}
