<?php

/* SyliusAdminBundle:Crud:update.html.twig */
class __TwigTemplate_12466ba52a2e1b5f91e65e4555f3866cb65578042d7e8155f40e0db97f9bbc4c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("SyliusAdminBundle::layout.html.twig", "SyliusAdminBundle:Crud:update.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SyliusAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["header"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", array(), "any", false, true), "header", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", array(), "any", false, true), "header", array()), ((twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "applicationName", array()) . ".ui.edit_") . twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "name", array())))) : (((twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "applicationName", array()) . ".ui.edit_") . twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "name", array()))));
        // line 4
        $context["event_prefix"] = (((twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "applicationName", array()) . ".admin.") . twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "name", array())) . ".update");
        // line 8
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), array(0 => "@SyliusAdmin/Form/theme.html.twig"), true);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["header"] ?? null)), "html", null, true);
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((($context["event_prefix"] ?? null) . ".before_header"), array("resource" => ($context["resource"] ?? null))));
        echo "

";
        // line 13
        $this->loadTemplate("@SyliusAdmin/Crud/Update/_header.html.twig", "SyliusAdminBundle:Crud:update.html.twig", 13)->display($context);
        // line 14
        echo "
";
        // line 15
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((($context["event_prefix"] ?? null) . ".after_header"), array("resource" => ($context["resource"] ?? null))));
        echo "

";
        // line 17
        $this->loadTemplate("@SyliusAdmin/Crud/Update/_content.html.twig", "SyliusAdminBundle:Crud:update.html.twig", 17)->display($context);
        // line 18
        echo "
";
        // line 19
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((($context["event_prefix"] ?? null) . ".after_content"), array("resource" => ($context["resource"] ?? null))));
        echo "
";
    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    ";
        // line 25
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((($context["event_prefix"] ?? null) . ".stylesheets")));
        echo "
";
    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    ";
        // line 31
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((($context["event_prefix"] ?? null) . ".javascripts")));
        echo "
";
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Crud:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 31,  97 => 29,  94 => 28,  88 => 25,  82 => 23,  79 => 22,  73 => 19,  70 => 18,  68 => 17,  63 => 15,  60 => 14,  58 => 13,  53 => 11,  50 => 10,  42 => 6,  38 => 1,  36 => 8,  34 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SyliusAdminBundle:Crud:update.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Crud/update.html.twig");
    }
}
