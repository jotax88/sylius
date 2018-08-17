<?php

/* @SyliusShop/Taxon/_header.html.twig */
class __TwigTemplate_69214c34ff4fbe06998c5117630c785a7719f7466a7038f42d0c5e8195cf1481 extends Twig_Template
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
        $this->loadTemplate("@SyliusShop/Taxon/_breadcrumb.html.twig", "@SyliusShop/Taxon/_header.html.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.taxon.header.before", array("taxon" => ($context["taxon"] ?? null))));
        echo "

<h1 class=\"ui monster section dividing header\">
    ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["taxon"] ?? null), "name", array()), "html", null, true);
        echo "
    <div class=\"sub header\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["taxon"] ?? null), "description", array()), "html", null, true);
        echo "</div>
</h1>

";
        // line 10
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.taxon.header.after", array("taxon" => ($context["taxon"] ?? null))));
        echo "
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Taxon/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 10,  38 => 7,  34 => 6,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusShop/Taxon/_header.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Taxon/_header.html.twig");
    }
}
