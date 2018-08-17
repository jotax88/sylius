<?php

/* @SyliusAdmin/Product/Index/_breadcrumb.html.twig */
class __TwigTemplate_a1303e894b56568e720e6acb5a596e6e91fb9986db23b4fcee093581ae3665d8 extends Twig_Template
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
        $context["breadcrumb"] = $this->loadTemplate("@SyliusAdmin/Macro/breadcrumb.html.twig", "@SyliusAdmin/Product/Index/_breadcrumb.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        if ((isset($context["taxon"]) || array_key_exists("taxon", $context))) {
            // line 4
            echo "    ";
            $context["breadcrumbs"] = array(0 => array("label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.administration"), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_dashboard")), 1 => array("label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.products"), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_product_index")), 2 => array("label" => twig_get_attribute($this->env, $this->source,             // line 7
($context["taxon"] ?? null), "name", array())));
        } else {
            // line 11
            echo "    ";
            $context["breadcrumbs"] = array(0 => array("label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.administration"), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_dashboard")), 1 => array("label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.products")));
        }
        // line 17
        echo "
";
        // line 18
        echo $context["breadcrumb"]->macro_crumble(($context["breadcrumbs"] ?? null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Product/Index/_breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 18,  39 => 17,  35 => 11,  32 => 7,  30 => 4,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusAdmin/Product/Index/_breadcrumb.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Product/Index/_breadcrumb.html.twig");
    }
}
