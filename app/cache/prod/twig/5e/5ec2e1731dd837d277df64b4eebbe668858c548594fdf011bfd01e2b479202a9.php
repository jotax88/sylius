<?php

/* SyliusUiBundle:Layout:sidebar.html.twig */
class __TwigTemplate_8898cacd116338fd581807a69465019dc80102a21eac70cc13cfc26267d34348 extends Twig_Template
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
            'sidebar' => array($this, 'block_sidebar'),
            'topbar' => array($this, 'block_topbar'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'pre_content' => array($this, 'block_pre_content'),
            'content' => array($this, 'block_content'),
            'post_content' => array($this, 'block_post_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>

<html>
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
        // line 21
        echo "</head>

<body class=\"pushable\">
<div class=\"ui sidebar vertical inverted menu visible left\" id=\"sidebar\">
    ";
        // line 25
        $this->displayBlock('sidebar', $context, $blocks);
        // line 27
        echo "</div>
<div class=\"ui fixed inverted menu\">
    ";
        // line 29
        $this->displayBlock('topbar', $context, $blocks);
        // line 31
        echo "</div>
<div class=\"pusher\">
    <div class=\"full height\" id=\"wrapper\">
        <div id=\"content\">
            ";
        // line 35
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 38
        echo "
            ";
        // line 39
        $this->displayBlock('pre_content', $context, $blocks);
        // line 41
        echo "
            ";
        // line 42
        $this->displayBlock('content', $context, $blocks);
        // line 44
        echo "
            ";
        // line 45
        $this->displayBlock('post_content', $context, $blocks);
        // line 47
        echo "        </div>
    </div>
</div>

";
        // line 51
        $this->loadTemplate("@SyliusUi/Modal/_confirmation.html.twig", "SyliusUiBundle:Layout:sidebar.html.twig", 51)->display($context);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('javascripts', $context, $blocks);
        // line 55
        echo "</body>
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
    }

    // line 25
    public function block_sidebar($context, array $blocks = array())
    {
        // line 26
        echo "    ";
    }

    // line 29
    public function block_topbar($context, array $blocks = array())
    {
        // line 30
        echo "    ";
    }

    // line 35
    public function block_flash_messages($context, array $blocks = array())
    {
        // line 36
        echo "                ";
        $this->loadTemplate("@SyliusUi/_flashes.html.twig", "SyliusUiBundle:Layout:sidebar.html.twig", 36)->display($context);
        // line 37
        echo "            ";
    }

    // line 39
    public function block_pre_content($context, array $blocks = array())
    {
        // line 40
        echo "            ";
    }

    // line 42
    public function block_content($context, array $blocks = array())
    {
        // line 43
        echo "            ";
    }

    // line 45
    public function block_post_content($context, array $blocks = array())
    {
        // line 46
        echo "            ";
    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Layout:sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 53,  177 => 46,  174 => 45,  170 => 43,  167 => 42,  163 => 40,  160 => 39,  156 => 37,  153 => 36,  150 => 35,  146 => 30,  143 => 29,  139 => 26,  136 => 25,  128 => 16,  125 => 15,  121 => 13,  118 => 12,  112 => 8,  106 => 55,  104 => 53,  101 => 52,  99 => 51,  93 => 47,  91 => 45,  88 => 44,  86 => 42,  83 => 41,  81 => 39,  78 => 38,  76 => 35,  70 => 31,  68 => 29,  64 => 27,  62 => 25,  56 => 21,  54 => 15,  51 => 14,  49 => 12,  42 => 8,  33 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SyliusUiBundle:Layout:sidebar.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Layout/sidebar.html.twig");
    }
}
