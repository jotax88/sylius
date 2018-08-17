<?php

/* @SyliusShop/layout.html.twig */
class __TwigTemplate_a4da7bf61bcb03deaa9556fb8713b8343ebec5c3eec788c482beaf8e10137d23 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'metatags' => array($this, 'block_metatags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'top' => array($this, 'block_top'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>

<html lang=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "locale", array()), 0, 2), "html", null, true);
        echo "\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">

    ";
        // line 12
        $this->displayBlock('metatags', $context, $blocks);
        // line 14
        echo "
    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "
    ";
        // line 26
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.head"));
        echo "
</head>

<body class=\"pushable\">
";
        // line 30
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.before_body"));
        echo "
<div class=\"pusher\">
    ";
        // line 32
        $this->displayBlock('top', $context, $blocks);
        // line 46
        echo "
    <div class=\"ui container\">
        ";
        // line 48
        $this->displayBlock('header', $context, $blocks);
        // line 57
        echo "
        ";
        // line 58
        $this->loadTemplate("@SyliusShop/_flashes.html.twig", "@SyliusShop/layout.html.twig", 58)->display($context);
        // line 59
        echo "
        ";
        // line 60
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.before_content"));
        echo "

        ";
        // line 62
        $this->displayBlock('content', $context, $blocks);
        // line 64
        echo "
        ";
        // line 65
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.after_content"));
        echo "
    </div>

    ";
        // line 68
        $this->displayBlock('footer', $context, $blocks);
        // line 71
        echo "</div>

";
        // line 73
        $this->displayBlock('javascripts', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->loadTemplate("@SyliusUi/Modal/_confirmation.html.twig", "@SyliusShop/layout.html.twig", 79)->display($context);
        // line 80
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.after_body"));
        echo "
</body>
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Sylius";
    }

    // line 12
    public function block_metatags($context, array $blocks = array())
    {
        // line 13
        echo "    ";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 16
        echo "        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->

        ";
        // line 21
        $this->loadTemplate("@SyliusUi/_stylesheets.html.twig", "@SyliusShop/layout.html.twig", 21)->display(array_merge($context, array("path" => "assets/shop/css/style.css")));
        // line 22
        echo "
        ";
        // line 23
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.stylesheets"));
        echo "
    ";
    }

    // line 32
    public function block_top($context, array $blocks = array())
    {
        // line 33
        echo "        <div id=\"menu\" class=\"ui large sticky inverted stackable menu\">
            ";
        // line 34
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.before_currency_switcher"));
        echo "

            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("sylius.controller.shop.currency_switch:renderAction"));
        echo "
            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("sylius.controller.shop.locale_switch:renderAction"));
        echo "

            ";
        // line 39
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.before_security_widget"));
        echo "

            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("sylius.controller.shop.security_widget:renderAction"));
        echo "

            ";
        // line 43
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.after_security_widget"));
        echo "
        </div>
    ";
    }

    // line 48
    public function block_header($context, array $blocks = array())
    {
        // line 49
        echo "            <header>
                ";
        // line 50
        $this->loadTemplate("@SyliusShop/_header.html.twig", "@SyliusShop/layout.html.twig", 50)->display($context);
        // line 51
        echo "
                ";
        // line 52
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.after_header"));
        echo "

                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sylius_shop_partial_taxon_index_by_code", array("code" => "category", "template" => "@SyliusShop/Taxon/_horizontalMenu.html.twig")));
        echo "
            </header>
        ";
    }

    // line 62
    public function block_content($context, array $blocks = array())
    {
        // line 63
        echo "        ";
    }

    // line 68
    public function block_footer($context, array $blocks = array())
    {
        // line 69
        echo "        ";
        $this->loadTemplate("@SyliusShop/_footer.html.twig", "@SyliusShop/layout.html.twig", 69)->display($context);
        // line 70
        echo "    ";
    }

    // line 73
    public function block_javascripts($context, array $blocks = array())
    {
        // line 74
        echo "    ";
        $this->loadTemplate("@SyliusUi/_javascripts.html.twig", "@SyliusShop/layout.html.twig", 74)->display(array_merge($context, array("path" => "assets/shop/js/app.js")));
        // line 75
        echo "
    ";
        // line 76
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.javascripts"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 76,  242 => 75,  239 => 74,  236 => 73,  232 => 70,  229 => 69,  226 => 68,  222 => 63,  219 => 62,  212 => 54,  207 => 52,  204 => 51,  202 => 50,  199 => 49,  196 => 48,  189 => 43,  184 => 41,  179 => 39,  174 => 37,  170 => 36,  165 => 34,  162 => 33,  159 => 32,  153 => 23,  150 => 22,  148 => 21,  141 => 16,  138 => 15,  134 => 13,  131 => 12,  125 => 8,  117 => 80,  115 => 79,  112 => 78,  110 => 73,  106 => 71,  104 => 68,  98 => 65,  95 => 64,  93 => 62,  88 => 60,  85 => 59,  83 => 58,  80 => 57,  78 => 48,  74 => 46,  72 => 32,  67 => 30,  60 => 26,  57 => 25,  55 => 15,  52 => 14,  50 => 12,  43 => 8,  35 => 3,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusShop/layout.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/layout.html.twig");
    }
}
