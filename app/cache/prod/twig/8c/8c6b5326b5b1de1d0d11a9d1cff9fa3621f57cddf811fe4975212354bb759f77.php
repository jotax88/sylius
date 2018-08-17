<?php

/* @SyliusAdmin/Customer/Show/_content.html.twig */
class __TwigTemplate_b870496a744262f9fa2d93db875459eadcb2c705e510fdae52c3836e0bea4bb7 extends Twig_Template
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
        $context["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "@SyliusAdmin/Customer/Show/_content.html.twig", 1);
        // line 2
        echo "
<div class=\"eight wide column\" id=\"info\">
    <div class=\"ui fluid card\">
        ";
        // line 5
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.customer.show.before_information", array("resource" => ($context["resource"] ?? null))));
        echo "

        <div class=\"content\">
            <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_customer_update", array("id" => twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "id", array()))), "html", null, true);
        echo "\" class=\"header\">
                ";
        // line 9
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "fullName", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "fullName", array()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.guest_customer"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.guest_customer"))), "html", null, true);
        echo "
            </a>
            <div class=\"meta\">
                <span class=\"date\">";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.customer_since"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "createdAt", array())), "html", null, true);
        echo "</span>
                <br />
                ";
        // line 14
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "group", array()))) {
            // line 15
            echo "                    <span class=\"group\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.group_membership"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "group", array()), "html", null, true);
            echo "</span>
                ";
        }
        // line 17
        echo "            </div>
        </div>
        <div class=\"content\">
            <div id=\"subscribed-to-newsletter\">
                <i class=\"";
        // line 21
        echo ((twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "subscribedToNewsletter", array())) ? ("green checkmark") : ("red remove"));
        echo " icon\"></i>
                ";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.subscribed_to_newsletter"), "html", null, true);
        echo "
            </div>
            ";
        // line 24
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "user", array()))) {
            // line 25
            echo "                ";
            $context["user"] = twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "user", array());
            // line 26
            echo "                <div id=\"verified-email\">
                    <i class=\"";
            // line 27
            echo ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "verified", array())) ? ("green checkmark") : ("red remove"));
            echo " icon\"></i>
                    ";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.email_verified"), "html", null, true);
            echo "
                </div>
                <br />
                ";
            // line 31
            if (call_user_func_array($this->env->getFunction('is_shop_enabled')->getCallable(), array())) {
                // line 32
                echo "                    ";
                echo $context["buttons"]->macro_default($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_impersonate_user", array("username" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "emailCanonical", array()))), "sylius.ui.impersonate", "impersonate", "unhide", "blue");
                echo "
                ";
            }
            // line 34
            echo "            ";
        }
        // line 35
        echo "        </div>
        <div class=\"extra content\">
            <a href=\"mailto:";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "email", array()), "html", null, true);
        echo "\">
                <i class=\"envelope icon\"></i> ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "email", array()), "html", null, true);
        echo "
            </a>
            ";
        // line 40
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "phoneNumber", array()))) {
            // line 41
            echo "                <div id=\"phone-number\">
                    <i class=\"phone icon\"></i> ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "phoneNumber", array()), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 45
        echo "        </div>

        ";
        // line 47
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.customer.show.after_information", array("resource" => ($context["resource"] ?? null))));
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Customer/Show/_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 47,  131 => 45,  125 => 42,  122 => 41,  120 => 40,  115 => 38,  111 => 37,  107 => 35,  104 => 34,  98 => 32,  96 => 31,  90 => 28,  86 => 27,  83 => 26,  80 => 25,  78 => 24,  73 => 22,  69 => 21,  63 => 17,  55 => 15,  53 => 14,  46 => 12,  40 => 9,  36 => 8,  30 => 5,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusAdmin/Customer/Show/_content.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Customer/Show/_content.html.twig");
    }
}
