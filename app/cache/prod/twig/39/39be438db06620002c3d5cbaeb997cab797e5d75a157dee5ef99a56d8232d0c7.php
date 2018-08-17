<?php

/* @SyliusAdmin/Crud/Update/_breadcrumb.html.twig */
class __TwigTemplate_ff8ea60c363823ae4be8d92214b6cd3016751d83de5fb3d69fe288dea3ddf8f1 extends Twig_Template
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
        $context["breadcrumb"] = $this->loadTemplate("@SyliusAdmin/Macro/breadcrumb.html.twig", "@SyliusAdmin/Crud/Update/_breadcrumb.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["breadcrumbs"] = array(0 => array("label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.administration"), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_dashboard")), 1 => array("label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source,         // line 5
($context["metadata"] ?? null), "applicationName", array()) . ".ui.") . twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "pluralName", array()))), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "getRouteName", array(0 => "index"), "method"), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", array(), "any", false, true), "route", array(), "any", false, true), "parameters", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", array(), "any", false, true), "route", array(), "any", false, true), "parameters", array()), array())) : (array())))), 2 => array("label" => ((twig_get_attribute($this->env, $this->source,         // line 6
($context["resource"] ?? null), "code", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["resource"] ?? null), "code", array()), twig_get_attribute($this->env, $this->source, ($context["resource"] ?? null), "id", array()))) : (twig_get_attribute($this->env, $this->source, ($context["resource"] ?? null), "id", array())))), 3 => array("label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.edit")));
        // line 10
        echo "
";
        // line 11
        echo $context["breadcrumb"]->macro_crumble(($context["breadcrumbs"] ?? null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Crud/Update/_breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 11,  32 => 10,  30 => 6,  29 => 5,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusAdmin/Crud/Update/_breadcrumb.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Crud/Update/_breadcrumb.html.twig");
    }
}
