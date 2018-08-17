<?php

/* @SyliusUi/Form/Buttons/_cancel.html.twig */
class __TwigTemplate_424300177e46c958b30f1ddf3bcb3c92f136bcc0c2a5e44c848eae6612099dd8 extends Twig_Template
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
        echo "<a href=\"";
        echo twig_escape_filter($this->env, (((isset($context["path"]) || array_key_exists("path", $context))) ? (_twig_default_filter(($context["path"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"))), "html", null, true);
        echo "\" class=\"ui button\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.cancel"), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "@SyliusUi/Form/Buttons/_cancel.html.twig";
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
        return new Twig_Source("", "@SyliusUi/Form/Buttons/_cancel.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Form/Buttons/_cancel.html.twig");
    }
}
