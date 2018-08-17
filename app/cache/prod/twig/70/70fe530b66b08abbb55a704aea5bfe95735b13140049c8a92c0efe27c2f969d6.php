<?php

/* SyliusShopBundle:Email:verification.html.twig */
class __TwigTemplate_b9e5227d0f28367ceddb8f8f0a8685fc812d4266cef8a600d5e45e516e9b7f06 extends Twig_Template
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
        echo "    Email address verification
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $context["url"] = (( !(null === twig_get_attribute($this->env, $this->source, ($context["channel"] ?? null), "hostname", array()))) ? ((("http://" . twig_get_attribute($this->env, $this->source, ($context["channel"] ?? null), "hostname", array())) . $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_user_verification", array("token" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "emailVerificationToken", array()))))) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sylius_shop_user_verification", array("token" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "emailVerificationToken", array())))));
        // line 7
        echo "    ";
        // line 8
        echo "        To verify your email address - please visit <a href=\"";
        echo ($context["url"] ?? null);
        echo "\">";
        echo ($context["url"] ?? null);
        echo "</a>
    ";
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Email:verification.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  50 => 8,  48 => 7,  45 => 6,  42 => 5,  37 => 2,  34 => 1,  30 => 5,  27 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SyliusShopBundle:Email:verification.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Email/verification.html.twig");
    }
}
