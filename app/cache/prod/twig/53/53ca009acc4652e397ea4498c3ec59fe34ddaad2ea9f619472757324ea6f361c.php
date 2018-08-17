<?php

/* @SyliusAdmin/Product/Index/_header.html.twig */
class __TwigTemplate_5bd30fbb94342be5f8230b47ed0d9004118d34f9c770e940aa2a4d2ed07afae9 extends Twig_Template
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
        $context["headers"] = $this->loadTemplate("@SyliusUi/Macro/headers.html.twig", "@SyliusAdmin/Product/Index/_header.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "taxonId"), "method"))) {
            // line 4
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sylius_admin_partial_taxon_show", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 5
($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "taxonId"), "method"), "template" => "@SyliusAdmin/Product/Index/_taxonHeader.html.twig", "vars" => twig_get_attribute($this->env, $this->source,             // line 7
($context["configuration"] ?? null), "vars", array()))));
            // line 8
            echo "
";
        } else {
            // line 10
            echo "    <div class=\"column\">
        ";
            // line 11
            $context["header"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", array(), "any", false, true), "header", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", array(), "any", false, true), "header", array()), ((twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "applicationName", array()) . ".ui.") . twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "pluralName", array())))) : (((twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "applicationName", array()) . ".ui.") . twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "pluralName", array()))));
            // line 12
            echo "        ";
            echo $context["headers"]->macro_default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["header"] ?? null)), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", array(), "any", false, true), "icon", array()), "cube")) : ("cube")), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array()), "sylius.ui.manage_your_product_catalog")) : ("sylius.ui.manage_your_product_catalog"))));
            echo "

        ";
            // line 14
            echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.product.index.header", array("resources" => ($context["resources"] ?? null))));
            echo "

        ";
            // line 16
            $this->loadTemplate(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "breadcrumb", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "breadcrumb", array()), "@SyliusAdmin/Product/Index/_breadcrumb.html.twig")) : ("@SyliusAdmin/Product/Index/_breadcrumb.html.twig")), "@SyliusAdmin/Product/Index/_header.html.twig", 16)->display($context);
            // line 17
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Product/Index/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 17,  55 => 16,  50 => 14,  44 => 12,  42 => 11,  39 => 10,  35 => 8,  33 => 7,  32 => 5,  30 => 4,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusAdmin/Product/Index/_header.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Product/Index/_header.html.twig");
    }
}
