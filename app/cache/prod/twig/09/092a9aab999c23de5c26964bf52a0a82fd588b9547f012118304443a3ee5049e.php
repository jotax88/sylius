<?php

/* @SyliusShop/Product/Show/_variantsPricing.html.twig */
class __TwigTemplate_c0686f0b88f17da3ded76d44b03b19851bfa127b6647c1770d35e768408ee1fe extends Twig_Template
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
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "@SyliusShop/Product/Show/_variantsPricing.html.twig", 1);
        // line 2
        echo "
<div id=\"sylius-variants-pricing\" data-unavailable-text=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.unavailable"), "html", null, true);
        echo "\">
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pricing"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["price"]) {
            // line 5
            echo "    <div ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["price"]);
            foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                echo "data-";
                echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                echo "=\"";
                if (($context["option"] == "value")) {
                    echo $context["money"]->macro_convertAndFormat($context["value"]);
                } else {
                    echo twig_escape_filter($this->env, twig_replace_filter($context["value"], array("\"" => "'")), "html", null, true);
                }
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['price'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/_variantsPricing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 7,  36 => 5,  32 => 4,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusShop/Product/Show/_variantsPricing.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Product/Show/_variantsPricing.html.twig");
    }
}
