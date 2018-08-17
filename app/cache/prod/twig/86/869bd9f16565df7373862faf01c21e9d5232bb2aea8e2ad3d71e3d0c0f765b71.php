<?php

/* @SyliusAdmin/Customer/Show/_address.html.twig */
class __TwigTemplate_c34391d0040c3a91d4677141cd9de4d01bd3a39baf7a5e2593b18460dd47119d extends Twig_Template
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
        echo "<div class=\"eight wide column\">
    ";
        // line 2
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.customer.show.before_address", array("resource" => ($context["resource"] ?? null))));
        echo "

    <h4 class=\"ui top attached styled header\">
        ";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.default_address"), "html", null, true);
        echo "
    </h4>

    <div class=\"ui attached segment\" id=\"default-address\">
        ";
        // line 9
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "defaultAddress", array()))) {
            // line 10
            echo "            ";
            $this->loadTemplate("@SyliusAdmin/Common/_address.html.twig", "@SyliusAdmin/Customer/Show/_address.html.twig", 10)->display(array_merge($context, array("address" => twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "defaultAddress", array()))));
            // line 11
            echo "        ";
        } else {
            // line 12
            echo "            ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.this_customer_does_not_have_a_default_address"), "html", null, true);
            echo "
        ";
        }
        // line 14
        echo "    </div>

    ";
        // line 16
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.customer.show.after_address", array("resource" => ($context["resource"] ?? null))));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Customer/Show/_address.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 16,  53 => 14,  47 => 12,  44 => 11,  41 => 10,  39 => 9,  32 => 5,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusAdmin/Customer/Show/_address.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Customer/Show/_address.html.twig");
    }
}
