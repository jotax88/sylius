<?php

/* @SyliusUi/Layout/centered.html.twig */
class __TwigTemplate_2a3934d212884928508c8ca188d4529278f10d6ac48e89a718c78b0c0dbac068 extends Twig_Template
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
<body class=\"centered\">
";
        // line 23
        $this->displayBlock('pre_content', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('content', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('post_content', $context, $blocks);
        // line 31
        echo "
";
        // line 32
        $this->displayBlock('javascripts', $context, $blocks);
        // line 34
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

    // line 23
    public function block_pre_content($context, array $blocks = array())
    {
    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
    }

    // line 29
    public function block_post_content($context, array $blocks = array())
    {
    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@SyliusUi/Layout/centered.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  119 => 32,  114 => 29,  109 => 26,  104 => 23,  96 => 16,  93 => 15,  89 => 13,  86 => 12,  80 => 8,  74 => 34,  72 => 32,  69 => 31,  67 => 29,  64 => 28,  62 => 26,  59 => 25,  57 => 23,  53 => 21,  51 => 15,  48 => 14,  46 => 12,  39 => 8,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusUi/Layout/centered.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Layout/centered.html.twig");
    }
}
