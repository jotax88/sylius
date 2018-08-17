<?php

/* @SyliusShop/Product/_starRating.html.twig */
class __TwigTemplate_c3b0445ee2db92cce57b25abb2962f75607d2e434155c137652e7dd5676da664 extends Twig_Template
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
        echo "<div id=\"average-rating\" class=\"ui star large rating\" data-rating=\"";
        echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "averageRating", array())), "html", null, true);
        echo "\" data-max-rating=\"5\" data-average-rating=\"";
        echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "averageRating", array()), 2), "html", null, true);
        echo "\" style=\"pointer-events: none;\"></div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/_starRating.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusShop/Product/_starRating.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Product/_starRating.html.twig");
    }
}
