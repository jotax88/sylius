<?php

/* @SyliusAdmin/Crud/Update/_header.html.twig */
class __TwigTemplate_edee26603436a532f7ac3b8d7b9d3765c7030887f34c7024682dd21a3c5f5965 extends Twig_Template
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
        echo "<div class=\"ui stackable two column grid\">
    <div class=\"column\">
        ";
        // line 3
        $this->loadTemplate(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "header_title", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "header_title", array()), "@SyliusAdmin/Crud/Update/_headerTitle.html.twig")) : ("@SyliusAdmin/Crud/Update/_headerTitle.html.twig")), "@SyliusAdmin/Crud/Update/_header.html.twig", 3)->display($context);
        // line 4
        echo "        ";
        $this->loadTemplate(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "breadcrumb", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "breadcrumb", array()), "@SyliusAdmin/Crud/Update/_breadcrumb.html.twig")) : ("@SyliusAdmin/Crud/Update/_breadcrumb.html.twig")), "@SyliusAdmin/Crud/Update/_header.html.twig", 4)->display($context);
        // line 5
        echo "
        ";
        // line 6
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((($context["event_prefix"] ?? null) . ".header"), array("resource" => ($context["resource"] ?? null))));
        echo "
    </div>
    <div class=\"middle aligned column\">
        ";
        // line 9
        try {
            $this->loadTemplate(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "toolbar", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "toolbar", array()), "@SyliusAdmin/Crud/_toolbar.html.twig")) : ("@SyliusAdmin/Crud/_toolbar.html.twig")), "@SyliusAdmin/Crud/Update/_header.html.twig", 9)->display($context);
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 10
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Crud/Update/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  41 => 9,  35 => 6,  32 => 5,  29 => 4,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusAdmin/Crud/Update/_header.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Crud/Update/_header.html.twig");
    }
}
