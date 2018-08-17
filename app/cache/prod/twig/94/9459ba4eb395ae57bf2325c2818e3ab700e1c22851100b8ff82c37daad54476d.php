<?php

/* @SyliusAdmin/_notification.html.twig */
class __TwigTemplate_038a81572faf92805c59da7a62a14699c0652ede0b64f24ab61ce1e58ae4123d extends Twig_Template
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
        echo "<div class=\"ui floated simple dropdown icon item\" id=\"sylius-version-notification\" data-frequency=\"";
        echo twig_escape_filter($this->env, ($context["frequency"] ?? null), "html", null, true);
        echo "\" data-url=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_ajax_get_version");
        echo "\" data-current-version=\"";
        echo twig_escape_filter($this->env, ($context["currentVersion"] ?? null), "html", null, true);
        echo "\">
    <i class=\"outline bell icon\"></i>
    <div class=\"menu\">
        <div class=\"ui message\" id=\"no-notifications\">
            <span>";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.no_new_notifications"), "html", null, true);
        echo "</span>
        </div>
        <div class=\"ui message\" id=\"notifications\">
            <span>
                ";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.there_is_a_new_version_of_sylius_available"), "html", null, true);
        echo "
                <i class=\"remove link icon\" data-dismiss style=\"margin-left: 1em; margin-right: -0.5em;\"></i>
            </span>
            <br/>
            <span>";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.contact_your_technician_to_upgrade"), "html", null, true);
        echo "</span>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/_notification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 13,  42 => 9,  35 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusAdmin/_notification.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/_notification.html.twig");
    }
}
