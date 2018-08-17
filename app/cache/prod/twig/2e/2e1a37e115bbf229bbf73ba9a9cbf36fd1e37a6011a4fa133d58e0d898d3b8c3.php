<?php

/* @SyliusShop/Product/Show/_reviews.html.twig */
class __TwigTemplate_5e6f29e7b70bdd66e1d16d612711bfea5c9931ddaff39011cf723fc332b8174b extends Twig_Template
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
        echo "<div class=\"ui text menu\">
    <div class=\"item\">
        ";
        // line 3
        $this->loadTemplate("@SyliusShop/Product/_starRating.html.twig", "@SyliusShop/Product/Show/_reviews.html.twig", 3)->display($context);
        // line 4
        echo "    </div>
    <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_review_index", array("slug" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slug", array()), "_locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "translation", array()), "locale", array()))), "html", null, true);
        echo "\" class=\"item\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "acceptedReviews", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.reviews"), "html", null, true);
        echo "</a>
    <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_review_create", array("slug" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slug", array()), "_locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "translation", array()), "locale", array()))), "html", null, true);
        echo "\" class=\"item\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.add_your_review"), "html", null, true);
        echo "</a>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/_reviews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  32 => 5,  29 => 4,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusShop/Product/Show/_reviews.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Product/Show/_reviews.html.twig");
    }
}
