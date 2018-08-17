<?php

/* SyliusAdminBundle::layout.html.twig */
class __TwigTemplate_7d2d0755845c4243dc5ad06fbca945eeb7798bd260d9d9e6d5056b1c5d1901f9 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("SyliusUiBundle:Layout:sidebar.html.twig", "SyliusAdminBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'topbar' => array($this, 'block_topbar'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SyliusUiBundle:Layout:sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " | Sylius";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->loadTemplate("SyliusUiBundle::_stylesheets.html.twig", "SyliusAdminBundle::layout.html.twig", 6)->display(array_merge($context, array("path" => "assets/admin/css/style.css")));
        // line 7
        echo "
    ";
        // line 8
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.layout.stylesheets"));
        echo "
";
    }

    // line 11
    public function block_flash_messages($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->loadTemplate("@SyliusAdmin/_flashes.html.twig", "SyliusAdminBundle::layout.html.twig", 12)->display($context);
    }

    // line 15
    public function block_topbar($context, array $blocks = array())
    {
        // line 16
        echo "    <a class=\"icon item\" id=\"sidebar-toggle\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.toggle_sidebar"), "html", null, true);
        echo "\">
        <i class=\"sidebar icon\"></i>
    </a>

    ";
        // line 20
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.layout.topbar_left"));
        echo "

    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sylius_admin_partial_channel_index", array("template" => "@SyliusAdmin/_channelLinks.html.twig")));
        echo "
    ";
        // line 23
        $this->loadTemplate("@SyliusAdmin/_search.html.twig", "SyliusAdminBundle::layout.html.twig", 23)->display($context);
        // line 24
        echo "
    <div class=\"ui left floated dividing empty item\"></div>

    ";
        // line 27
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.layout.topbar_middle"));
        echo "

    <div class=\"ui right floated dividing empty item\"></div>

    ";
        // line 31
        echo $this->extensions['Sylius\Bundle\AdminBundle\Twig\NotificationWidgetExtension']->renderWidget($this->env);
        echo "
    ";
        // line 32
        $this->loadTemplate("@SyliusAdmin/_security.html.twig", "SyliusAdminBundle::layout.html.twig", 32)->display($context);
        // line 33
        echo "
    ";
        // line 34
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.layout.topbar_right"));
        echo "
";
    }

    // line 37
    public function block_sidebar($context, array $blocks = array())
    {
        // line 38
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.layout.sidebar_top"));
        echo "

    <a class=\"item\" href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_dashboard");
        echo "\"><b>Sylius</b></a>
    ";
        // line 41
        echo $this->extensions['Knp\Menu\Twig\MenuExtension']->render("sylius.admin.main", array("template" => "SyliusUiBundle:Menu:sidebar.html.twig", "currentClass" => "active"));
        echo "

    ";
        // line 43
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.layout.sidebar_down"));
        echo "
";
    }

    // line 46
    public function block_footer($context, array $blocks = array())
    {
        // line 47
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.powered_by"), "html", null, true);
        echo " <a href=\"http://sylius.com\" target=\"_blank\">Sylius v";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sylius_meta"] ?? null), "version", array()), "html", null, true);
        echo "</a>
";
    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        // line 51
        echo "    ";
        $this->loadTemplate("SyliusUiBundle::_javascripts.html.twig", "SyliusAdminBundle::layout.html.twig", 51)->display(array_merge($context, array("path" => "assets/admin/js/app.js")));
        // line 52
        echo "
    ";
        // line 53
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.layout.javascripts"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 53,  158 => 52,  155 => 51,  152 => 50,  143 => 47,  140 => 46,  134 => 43,  129 => 41,  125 => 40,  119 => 38,  116 => 37,  110 => 34,  107 => 33,  105 => 32,  101 => 31,  94 => 27,  89 => 24,  87 => 23,  83 => 22,  78 => 20,  70 => 16,  67 => 15,  62 => 12,  59 => 11,  53 => 8,  50 => 7,  47 => 6,  44 => 5,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SyliusAdminBundle::layout.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/layout.html.twig");
    }
}
