<?php

/* SyliusShopBundle:Email:userRegistration.html.twig */
class __TwigTemplate_5e98031623166bcc19f6f3e3f7cf3680ee4a33587c4f296c0f74887555427bcd extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        // line 2
        echo "    User registration
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        // line 7
        echo "        Welcome to our store!
        <br/><br/>
        You have just been registered.
        <br/>
        Thank you ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", array()), "html", null, true);
        echo ".
    ";
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Email:userRegistration.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  47 => 7,  45 => 6,  42 => 5,  37 => 2,  34 => 1,  30 => 5,  27 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SyliusShopBundle:Email:userRegistration.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Email/userRegistration.html.twig");
    }
}
