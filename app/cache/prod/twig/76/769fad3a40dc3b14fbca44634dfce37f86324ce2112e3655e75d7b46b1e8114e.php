<?php

/* SyliusAdminBundle:Security:login.html.twig */
class __TwigTemplate_5d7d7f4d1f658bad24505fdb9329b789ee125f3736e56625e6741b5386278cfe extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@SyliusUi/Layout/centered.html.twig", "SyliusAdminBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusUi/Layout/centered.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Sylius | ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.administration_panel_login"), "html", null, true);
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->loadTemplate("@SyliusUi/_stylesheets.html.twig", "SyliusAdminBundle:Security:login.html.twig", 6)->display(array_merge($context, array("path" => "assets/admin/css/style.css")));
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.login.before_content", array("form" => ($context["form"] ?? null))));
        echo "

";
        // line 12
        $this->loadTemplate("@SyliusUi/Security/_login.html.twig", "SyliusAdminBundle:Security:login.html.twig", 12)->display(array_merge($context, array("action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_login_check"), "paths" => array("logo" => "assets/admin/img/logo.png"))));
        // line 13
        echo "
";
        // line 14
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.login.after_content", array("form" => ($context["form"] ?? null))));
        echo "
";
    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        $this->loadTemplate("@SyliusUi/_javascripts.html.twig", "SyliusAdminBundle:Security:login.html.twig", 18)->display(array_merge($context, array("path" => "assets/admin/js/app.js")));
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 18,  69 => 17,  63 => 14,  60 => 13,  58 => 12,  53 => 10,  50 => 9,  45 => 6,  42 => 5,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SyliusAdminBundle:Security:login.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Security/login.html.twig");
    }
}
