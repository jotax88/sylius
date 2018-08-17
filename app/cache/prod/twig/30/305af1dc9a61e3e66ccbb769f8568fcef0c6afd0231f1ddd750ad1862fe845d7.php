<?php

/* @SyliusShop/Account/dashboard.html.twig */
class __TwigTemplate_d7074e634b433bdfe5f3abb02dac14a3de1c7bf38f540067a015f03c6e8e67bd extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/Account/layout.html.twig", "@SyliusShop/Account/dashboard.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'subcontent' => array($this, 'block_subcontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusShop/Account/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"ui breadcrumb\">
        <a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_homepage");
        echo "\" class=\"section\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.home"), "html", null, true);
        echo "</a>
        <div class=\"divider\"> / </div>
        <div class=\"active section\">";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.my_account"), "html", null, true);
        echo "</div>
    </div>
";
    }

    // line 11
    public function block_subcontent($context, array $blocks = array())
    {
        // line 12
        echo "    <h1 class=\"ui dividing header\">
        ";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.my_account"), "html", null, true);
        echo "
        <div class=\"sub header\">";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.manage_your_personal_information_and_preferences"), "html", null, true);
        echo "</div>
    </h1>

    ";
        // line 17
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.dashboard.after_content_header", array("customer" => ($context["customer"] ?? null))));
        echo "

    <div class=\"ui large list\" id=\"customer-information\">
        <div class=\"item\">
            ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "fullName", array()), "html", null, true);
        echo "
        </div>
        <div class=\"item\">
            <strong>
                ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "email", array()), "html", null, true);
        echo "
            </strong>
        </div>
        <div class=\"item\">
            ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "user", array()), "verified", array())) {
            // line 30
            echo "                <span class=\"ui icon green basic label\"><i class=\"checkmark icon\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.verified"), "html", null, true);
            echo "</span>
            ";
        } else {
            // line 32
            echo "                <span class=\"ui icon red basic label\"><i class=\"remove icon\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.not_verified"), "html", null, true);
            echo "</span>
            ";
        }
        // line 34
        echo "        </div>
    </div>

    ";
        // line 37
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.dashboard.after_information", array("customer" => ($context["customer"] ?? null))));
        echo "

    <div class=\"ui text menu\">
        <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_account_profile_update");
        echo "\" class=\"item\"><i class=\"pencil icon\"></i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.edit"), "html", null, true);
        echo "</a>
        <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_account_change_password");
        echo "\" class=\"item\"><i class=\"lock icon\"></i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.change_password"), "html", null, true);
        echo "</a>
        ";
        // line 42
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "user", array()), "verified", array())) {
            // line 43
            echo "            <form class=\"item\" id=\"verification-form\" action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_user_request_verification_token");
            echo "\" method=\"post\">
                <button type=\"submit\" class=\"ui basic icon mini button\">
                    <i class=\"checkmark icon\"></i> ";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.verify"), "html", null, true);
            echo "
                </button>
            </form>
        ";
        }
        // line 49
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Account/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 49,  135 => 45,  129 => 43,  127 => 42,  121 => 41,  115 => 40,  109 => 37,  104 => 34,  98 => 32,  92 => 30,  90 => 29,  83 => 25,  76 => 21,  69 => 17,  63 => 14,  59 => 13,  56 => 12,  53 => 11,  46 => 7,  39 => 5,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusShop/Account/dashboard.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Account/dashboard.html.twig");
    }
}
