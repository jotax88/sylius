<?php

/* @SyliusShop/Taxon/_breadcrumb.html.twig */
class __TwigTemplate_3ce14f54e5e7a66f49f258304d799ffbe8101c4bf787bdfd3739037ff7245c2e extends Twig_Template
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
        $context["ancestors"] = twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["taxon"] ?? null), "ancestors", array()));
        // line 2
        echo "
<div class=\"ui breadcrumb\">
    <a href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_homepage");
        echo "\" class=\"section\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.home"), "html", null, true);
        echo "</a>
    <div class=\"divider\"> / </div>
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ancestors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ancestor"]) {
            // line 7
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["ancestor"], "isRoot", array(), "method")) {
                // line 8
                echo "            <div class=\"section\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ancestor"], "name", array()), "html", null, true);
                echo "</div>
        ";
            } else {
                // line 10
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_index", array("slug" => twig_get_attribute($this->env, $this->source, $context["ancestor"], "slug", array()), "_locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ancestor"], "translation", array()), "locale", array()))), "html", null, true);
                echo "\" class=\"section\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ancestor"], "name", array()), "html", null, true);
                echo "</a>
        ";
            }
            // line 12
            echo "    <div class=\"divider\"> / </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ancestor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    <div class=\"active section\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["taxon"] ?? null), "name", array()), "html", null, true);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Taxon/_breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 14,  57 => 12,  49 => 10,  43 => 8,  40 => 7,  36 => 6,  29 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusShop/Taxon/_breadcrumb.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Taxon/_breadcrumb.html.twig");
    }
}
