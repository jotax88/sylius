<?php

/* @SyliusShop/Common/Macro/money.html.twig */
class __TwigTemplate_dcdfcdaa4fe146f8185a6963fdba05f5b2b4fdeb451130e30ab4953a9d474731 extends Twig_Template
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
    }

    // line 1
    public function macro_format($__amount__ = null, $__currency_code__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "amount" => $__amount__,
            "currency_code" => $__currency_code__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_format_money')->getCallable(), array(($context["amount"] ?? null), ($context["currency_code"] ?? null), twig_get_attribute($this->env, $this->source, ($context["sylius"] ?? null), "localeCode", array()))), "html", null, true);

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 5
    public function macro_convertAndFormat($__amount__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "amount" => $__amount__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 6
            $context["__internal_240bb24365474c3e68f9846731f3e8d411d1ca4e4bdeec629c0451f30a3acf89"] = $this;
            // line 8
            echo $context["__internal_240bb24365474c3e68f9846731f3e8d411d1ca4e4bdeec629c0451f30a3acf89"]->macro_format(call_user_func_array($this->env->getFilter('sylius_convert_money')->getCallable(), array(($context["amount"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sylius"] ?? null), "channel", array()), "baseCurrency", array()), "code", array()), twig_get_attribute($this->env, $this->source, ($context["sylius"] ?? null), "currencyCode", array()))), twig_get_attribute($this->env, $this->source, ($context["sylius"] ?? null), "currencyCode", array()));

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 11
    public function macro_calculatePrice($__variant__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "variant" => $__variant__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 12
            $context["__internal_5f3d45b445dbd92532e658a8e935d604e0297e2e7900e200c42195325e4dadc2"] = $this;
            // line 14
            echo $context["__internal_5f3d45b445dbd92532e658a8e935d604e0297e2e7900e200c42195325e4dadc2"]->macro_convertAndFormat(call_user_func_array($this->env->getFilter('sylius_calculate_price')->getCallable(), array(($context["variant"] ?? null), array("channel" => twig_get_attribute($this->env, $this->source, ($context["sylius"] ?? null), "channel", array())))));

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Common/Macro/money.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 14,  82 => 12,  70 => 11,  61 => 8,  59 => 6,  47 => 5,  38 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusShop/Common/Macro/money.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Common/Macro/money.html.twig");
    }
}
