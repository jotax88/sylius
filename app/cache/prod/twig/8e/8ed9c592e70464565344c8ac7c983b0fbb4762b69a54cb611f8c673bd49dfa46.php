<?php

/* SyliusAdminBundle:Crud:index.html.twig */
class __TwigTemplate_ce02982de210401b2e1d6322beca7fbeb1e2bd980b1e32638a838e741562949d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("SyliusAdminBundle::layout.html.twig", "SyliusAdminBundle:Crud:index.html.twig", 1);
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
        $context["definition"] = twig_get_attribute($this->env, $this->source, ($context["resources"] ?? null), "definition", array());
        // line 4
        $context["data"] = twig_get_attribute($this->env, $this->source, ($context["resources"] ?? null), "data", array());
        // line 5
        $context["event_prefix"] = (((twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "applicationName", array()) . ".admin.") . twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "name", array())) . ".index");
        // line 7
        $context["header"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", array(), "any", false, true), "header", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", array(), "any", false, true), "header", array()), ((twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "applicationName", array()) . ".ui.") . twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "pluralName", array())))) : (((twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "applicationName", array()) . ".ui.") . twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "pluralName", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["header"] ?? null)), "html", null, true);
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((($context["event_prefix"] ?? null) . ".before_header"), array("resources" => ($context["resources"] ?? null))));
        echo "

";
        // line 14
        $this->loadTemplate("@SyliusAdmin/Crud/Index/_header.html.twig", "SyliusAdminBundle:Crud:index.html.twig", 14)->display($context);
        // line 15
        echo "
";
        // line 16
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((($context["event_prefix"] ?? null) . ".after_header"), array("resources" => ($context["resources"] ?? null))));
        echo "

";
        // line 18
        $this->loadTemplate("@SyliusAdmin/Crud/Index/_content.html.twig", "SyliusAdminBundle:Crud:index.html.twig", 18)->display($context);
        // line 19
        echo "
";
        // line 20
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((($context["event_prefix"] ?? null) . ".after_content"), array("resources" => ($context["resources"] ?? null))));
        echo "
";
    }

    // line 23
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    ";
        // line 26
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((($context["event_prefix"] ?? null) . ".stylesheets")));
        echo "
";
    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        // line 30
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    ";
        // line 32
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((($context["event_prefix"] ?? null) . ".javascripts")));
        echo "
";
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Crud:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 32,  99 => 30,  96 => 29,  90 => 26,  84 => 24,  81 => 23,  75 => 20,  72 => 19,  70 => 18,  65 => 16,  62 => 15,  60 => 14,  55 => 12,  52 => 11,  44 => 9,  40 => 1,  38 => 7,  36 => 5,  34 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SyliusAdminBundle:Crud:index.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Crud/index.html.twig");
    }
}
