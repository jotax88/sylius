<?php

/* SyliusAdminBundle:Customer:show.html.twig */
class __TwigTemplate_41ac2696eff8247e23378af9d5a9dd066463e342dd06038db28e2451abe1e7e5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("SyliusAdminBundle::layout.html.twig", "SyliusAdminBundle:Customer:show.html.twig", 1);
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
        echo twig_escape_filter($this->env, (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.customer") . " ") . twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "email", array())), "html", null, true);
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.customer.show.before_header", array("resource" => ($context["resource"] ?? null))));
        echo "

    <div class=\"ui stackable two column grid\">
        ";
        // line 9
        $this->loadTemplate("@SyliusAdmin/Customer/Show/_header.html.twig", "SyliusAdminBundle:Customer:show.html.twig", 9)->display($context);
        // line 10
        echo "
        ";
        // line 11
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.customer.show.header", array("resource" => ($context["resource"] ?? null))));
        echo "

        ";
        // line 13
        $context["menu"] = $this->extensions['Knp\Menu\Twig\MenuExtension']->get("sylius.admin.customer.show", array(), array("customer" => ($context["customer"] ?? null)));
        // line 14
        echo "        ";
        echo $this->extensions['Knp\Menu\Twig\MenuExtension']->render(($context["menu"] ?? null), array("template" => "@SyliusUi/Menu/top.html.twig"));
        echo "
    </div>

    ";
        // line 17
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.customer.show.after_header", array("resource" => ($context["resource"] ?? null))));
        echo "

    <div class=\"ui divider\"></div>
    ";
        // line 20
        $this->loadTemplate("@SyliusAdmin/Customer/Show/_breadcrumb.html.twig", "SyliusAdminBundle:Customer:show.html.twig", 20)->display($context);
        // line 21
        echo "
    ";
        // line 22
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.customer.show.after_breadcrumb", array("resource" => ($context["resource"] ?? null))));
        echo "

    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_customer_orders_statistics", array("customerId" => twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "id", array()))));
        echo "

    ";
        // line 26
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.customer.show.after_statistics", array("resource" => ($context["resource"] ?? null))));
        echo "

    <div class=\"ui stackable grid\">
        ";
        // line 29
        $this->loadTemplate("@SyliusAdmin/Customer/Show/_content.html.twig", "SyliusAdminBundle:Customer:show.html.twig", 29)->display($context);
        // line 30
        echo "        ";
        $this->loadTemplate("@SyliusAdmin/Customer/Show/_address.html.twig", "SyliusAdminBundle:Customer:show.html.twig", 30)->display($context);
        // line 31
        echo "    </div>

    ";
        // line 33
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.customer.show.after_content", array("resource" => ($context["resource"] ?? null))));
        echo "
";
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Customer:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 33,  102 => 31,  99 => 30,  97 => 29,  91 => 26,  86 => 24,  81 => 22,  78 => 21,  76 => 20,  70 => 17,  63 => 14,  61 => 13,  56 => 11,  53 => 10,  51 => 9,  44 => 6,  41 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SyliusAdminBundle:Customer:show.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Customer/show.html.twig");
    }
}
