<?php

/* @SyliusUi/Grid/Action/_link.html.twig */
class __TwigTemplate_f099291513d62e78393687e1d9e0ee5047515f9dab4d6bb2b1b4925efe931bfb extends Twig_Template
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
        $context["path"] = ((twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "url", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "url", array())) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "route", array()), ((twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "parameters", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "parameters", array()), array())) : (array())))));
        // line 2
        echo "
<a class=\"item\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "\">";
        if (twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "icon", array(), "any", true, true)) {
            echo "<i class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "icon", array()), "html", null, true);
            echo " icon\"></i> ";
        }
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "label", array())), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "@SyliusUi/Grid/Action/_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusUi/Grid/Action/_link.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Grid/Action/_link.html.twig");
    }
}
