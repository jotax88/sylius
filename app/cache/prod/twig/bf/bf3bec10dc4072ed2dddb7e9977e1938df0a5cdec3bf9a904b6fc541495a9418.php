<?php

/* @SyliusAdmin/Customer/Show/_header.html.twig */
class __TwigTemplate_26b8eb12f7fbb4af31f7af1bcf171e01a7a7696bc1cf41745e971c24d90eec6d extends Twig_Template
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
        echo "<div class=\"ten wide column\">
    <h1 class=\"ui header\">
        <i class=\"circular user icon\"></i>
        <div class=\"content\">
            ";
        // line 5
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "fullName", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "fullName", array()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.guest_customer"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.guest_customer"))), "html", null, true);
        echo "
            <div class=\"sub header\">
                <div class=\"ui horizontal divided list\">
                    <div class=\"item\">
                        ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "email", array()), "html", null, true);
        echo "
                    </div>
                    ";
        // line 11
        if ((null === twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "user", array()))) {
            // line 12
            echo "                        <div class=\"item\">
                            <span class=\"ui label\">
                                <i class=\"icon spy\"></i> ";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.guest"), "html", null, true);
            echo "
                            </span>
                        </div>
                    ";
        }
        // line 18
        echo "                </div>
            </div>
        </div>
    </h1>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Customer/Show/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 18,  47 => 14,  43 => 12,  41 => 11,  36 => 9,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusAdmin/Customer/Show/_header.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Customer/Show/_header.html.twig");
    }
}
