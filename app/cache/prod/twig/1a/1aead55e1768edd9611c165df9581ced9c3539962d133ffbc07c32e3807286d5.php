<?php

/* SyliusAdminBundle:Product:index.html.twig */
class __TwigTemplate_5f574e5044317a6f5460ae00d232af0462f6f683b2be15c174d00c782fbb4773 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("SyliusAdminBundle::layout.html.twig", "SyliusAdminBundle:Product:index.html.twig", 1);
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
        // line 3
        $context["definition"] = twig_get_attribute($this->env, $this->source, ($context["resources"] ?? null), "definition", array());
        // line 4
        $context["data"] = twig_get_attribute($this->env, $this->source, ($context["resources"] ?? null), "data", array());
        // line 6
        $context["header"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", array(), "any", false, true), "header", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", array(), "any", false, true), "header", array()), ((twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "applicationName", array()) . ".ui.") . twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "pluralName", array())))) : (((twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "applicationName", array()) . ".ui.") . twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "pluralName", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
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
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.product.index.before_header", array("resources" => ($context["resources"] ?? null))));
        echo "

    <div class=\"ui stackable two column grid\">
        ";
        // line 14
        $this->loadTemplate("@SyliusAdmin/Product/Index/_header.html.twig", "SyliusAdminBundle:Product:index.html.twig", 14)->display($context);
        // line 15
        echo "        ";
        $this->loadTemplate("@SyliusAdmin/Crud/Index/_actions.html.twig", "SyliusAdminBundle:Product:index.html.twig", 15)->display($context);
        // line 16
        echo "    </div>

    ";
        // line 18
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.product.index.after_header", array("resources" => ($context["resources"] ?? null))));
        echo "

    <div class=\"ui two column stackable grid\">
        <div class=\"three wide column\">
            ";
        // line 22
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.product.index.before_taxon_tree", array("resources" => ($context["resources"] ?? null))));
        echo "

            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_partial_taxon_tree", array("template" => "@SyliusAdmin/Taxon/_treeWithoutButtons.html.twig")));
        echo "

            ";
        // line 26
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.product.index.after_taxon_tree", array("resources" => ($context["resources"] ?? null))));
        echo "
        </div>
        <div class=\"thirteen wide column sylius-product-index\">
            ";
        // line 29
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.product.index.before_filters", array("resources" => ($context["resources"] ?? null))));
        echo "

            ";
        // line 31
        $this->loadTemplate("@SyliusAdmin/Crud/Index/_content.html.twig", "SyliusAdminBundle:Product:index.html.twig", 31)->display($context);
        // line 32
        echo "        </div>
    </div>

    ";
        // line 35
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.product.index.after_content", array("resources" => ($context["resources"] ?? null))));
        echo "
";
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 35,  97 => 32,  95 => 31,  90 => 29,  84 => 26,  79 => 24,  74 => 22,  67 => 18,  63 => 16,  60 => 15,  58 => 14,  51 => 11,  48 => 10,  40 => 8,  36 => 1,  34 => 6,  32 => 4,  30 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SyliusAdminBundle:Product:index.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Product/index.html.twig");
    }
}
