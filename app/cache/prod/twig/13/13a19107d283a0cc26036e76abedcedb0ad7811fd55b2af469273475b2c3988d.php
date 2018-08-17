<?php

/* SyliusAdminBundle:Dashboard:index.html.twig */
class __TwigTemplate_a208df79f8d707b53001785c7c683565cd7d2ffe699a021144b5628718805a40 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("SyliusAdminBundle::layout.html.twig", "SyliusAdminBundle:Dashboard:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SyliusAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.dashboard"), "html", null, true);
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
";
        // line 7
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.dashboard.before_header", array("channel" => ($context["channel"] ?? null), "statistics" => ($context["statistics"] ?? null))));
        echo "

";
        // line 9
        $this->loadTemplate("@SyliusAdmin/Dashboard/_header.html.twig", "SyliusAdminBundle:Dashboard:index.html.twig", 9)->display($context);
        // line 10
        echo "
";
        // line 11
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.dashboard.after_header", array("channel" => ($context["channel"] ?? null), "statistics" => ($context["statistics"] ?? null))));
        echo "

";
        // line 13
        $this->loadTemplate("@SyliusAdmin/Dashboard/_menu.html.twig", "SyliusAdminBundle:Dashboard:index.html.twig", 13)->display($context);
        // line 14
        echo "
";
        // line 15
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.dashboard.after_menu", array("channel" => ($context["channel"] ?? null), "statistics" => ($context["statistics"] ?? null))));
        echo "

";
        // line 17
        $this->loadTemplate("@SyliusAdmin/Dashboard/_statistics.html.twig", "SyliusAdminBundle:Dashboard:index.html.twig", 17)->display($context);
        // line 18
        echo "
";
        // line 19
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.dashboard.after_statistics", array("channel" => ($context["channel"] ?? null), "statistics" => ($context["statistics"] ?? null))));
        echo "

<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sylius_admin_partial_customer_latest", array("count" => 5, "template" => "@SyliusAdmin/Dashboard/_customers.html.twig")));
        echo "
    </div>
    <div class=\"column\">
        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_partial_order_latest_in_channel", array("channelCode" => twig_get_attribute($this->env, $this->source, ($context["channel"] ?? null), "code", array()), "count" => 5, "template" => "@SyliusAdmin/Dashboard/_orders.html.twig")));
        echo "
    </div>
</div>

";
        // line 30
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.dashboard.after_content", array("channel" => ($context["channel"] ?? null), "statistics" => ($context["statistics"] ?? null))));
        echo "
";
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Dashboard:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 30,  90 => 26,  84 => 23,  77 => 19,  74 => 18,  72 => 17,  67 => 15,  64 => 14,  62 => 13,  57 => 11,  54 => 10,  52 => 9,  47 => 7,  44 => 6,  41 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SyliusAdminBundle:Dashboard:index.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Dashboard/index.html.twig");
    }
}
