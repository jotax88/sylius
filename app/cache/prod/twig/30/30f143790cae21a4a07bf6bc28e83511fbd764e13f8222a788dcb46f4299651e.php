<?php

/* @SyliusAdmin/Customer/Grid/Field/enabled.html.twig */
class __TwigTemplate_2f410d7f55ca73d2a90d0491477cf330ae89f9ab5c7f16dc60cd4d61b4ed54d1 extends Twig_Template
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
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "user", array()))) {
            // line 2
            echo "    ";
            $context["label"] = $this->loadTemplate("@SyliusUi/Macro/labels.html.twig", "@SyliusAdmin/Customer/Grid/Field/enabled.html.twig", 2);
            // line 3
            echo "    ";
            echo $context["label"]->macro_status(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "user", array()), "enabled", array()));
            echo "
";
        } else {
            // line 5
            echo "    <span class=\"ui icon label\">
        <i class=\"spy icon\"></i> ";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.guest"), "html", null, true);
            echo "
    </span>
";
        }
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Customer/Grid/Field/enabled.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  34 => 5,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusAdmin/Customer/Grid/Field/enabled.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Customer/Grid/Field/enabled.html.twig");
    }
}
