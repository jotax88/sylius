<?php

/* @SyliusShop/Product/Show/_breadcrumb.html.twig */
class __TwigTemplate_3669e25fa4d731b712287aa2031109fcafc63ab3efb03f5e686775786795b85a extends Twig_Template
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
        echo "<div class=\"ui breadcrumb\">
    <a href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_homepage");
        echo "\" class=\"section\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.home"), "html", null, true);
        echo "</a>
    <div class=\"divider\"> / </div>
    ";
        // line 4
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "mainTaxon", array()))) {
            // line 5
            echo "        ";
            $context["taxon"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "mainTaxon", array());
            // line 6
            echo "        ";
            $context["ancestors"] = twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["taxon"] ?? null), "ancestors", array()));
            // line 7
            echo "
        ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["ancestors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["ancestor"]) {
                // line 9
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["ancestor"], "isRoot", array(), "method")) {
                    // line 10
                    echo "                <div class=\"section\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ancestor"], "name", array()), "html", null, true);
                    echo "</div>
            ";
                } else {
                    // line 12
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_index", array("slug" => twig_get_attribute($this->env, $this->source, $context["ancestor"], "slug", array()), "_locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ancestor"], "translation", array()), "locale", array()))), "html", null, true);
                    echo "\" class=\"section\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ancestor"], "name", array()), "html", null, true);
                    echo "</a>
            ";
                }
                // line 14
                echo "            <div class=\"divider\"> / </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ancestor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "
        <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_index", array("slug" => twig_get_attribute($this->env, $this->source, ($context["taxon"] ?? null), "slug", array()), "_locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["taxon"] ?? null), "translation", array()), "locale", array()))), "html", null, true);
            echo "\" class=\"section\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["taxon"] ?? null), "name", array()), "html", null, true);
            echo "</a>
        <div class=\"divider\"> / </div>
    ";
        }
        // line 20
        echo "    <div class=\"active section\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", array()), "html", null, true);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/_breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 20,  75 => 17,  72 => 16,  65 => 14,  57 => 12,  51 => 10,  48 => 9,  44 => 8,  41 => 7,  38 => 6,  35 => 5,  33 => 4,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusShop/Product/Show/_breadcrumb.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Product/Show/_breadcrumb.html.twig");
    }
}
