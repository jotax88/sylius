<?php

/* @SyliusAdmin/Dashboard/_statistics.html.twig */
class __TwigTemplate_9550387e6ef84f0eca24339250a01bdc4a42a4eb611f2244a67398b2053de24a extends Twig_Template
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
        $context["money"] = $this->loadTemplate("@SyliusAdmin/Common/Macro/money.html.twig", "@SyliusAdmin/Dashboard/_statistics.html.twig", 1);
        // line 2
        echo "
<div class=\"ui segment\">
    <div class=\"ui center aligned four column stackable divided grid\">
        <div class=\"column\">
            <div class=\"ui statistic\">
                <div id=\"total-sales\" class=\"value\">
                    ";
        // line 8
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->source, ($context["statistics"] ?? null), "totalSales", array()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["channel"] ?? null), "baseCurrency", array()), "code", array()));
        echo "
                </div>
                <div class=\"label\">
                    ";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.sales"), "html", null, true);
        echo "
                </div>
            </div>
        </div>
        <div class=\"column\">
            <div class=\"ui statistic\">
                <div id=\"new-orders\" class=\"value\">
                    ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["statistics"] ?? null), "numberOfNewOrders", array()), "html", null, true);
        echo "
                </div>
                <div class=\"label\">
                    ";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.fulfilled_orders"), "html", null, true);
        echo "
                </div>
            </div>
        </div>
        <div class=\"column\">
            <div class=\"ui statistic\">
                <div id=\"new-customers\" class=\"value\">
                    ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["statistics"] ?? null), "numberOfNewCustomers", array()), "html", null, true);
        echo "
                </div>
                <div class=\"label\">
                    ";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.customers"), "html", null, true);
        echo "
                </div>
            </div>
        </div>
        <div class=\"column\">
            <div class=\"ui statistic\">
                <div id=\"average-order-value\" class=\"value\">
                    ";
        // line 38
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->source, ($context["statistics"] ?? null), "averageOrderValue", array()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["channel"] ?? null), "baseCurrency", array()), "code", array()));
        echo "
                </div>
                <div class=\"label\">
                    ";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.average_order_value"), "html", null, true);
        echo "
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Dashboard/_statistics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 41,  81 => 38,  71 => 31,  65 => 28,  55 => 21,  49 => 18,  39 => 11,  33 => 8,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusAdmin/Dashboard/_statistics.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Dashboard/_statistics.html.twig");
    }
}
