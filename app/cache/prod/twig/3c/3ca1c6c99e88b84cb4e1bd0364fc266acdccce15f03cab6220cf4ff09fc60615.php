<?php

/* @SyliusAdmin/Product/_mainImage.html.twig */
class __TwigTemplate_618243ac6f00f91e90147bdbc1109217d8795d196529e570f9637f2aed85cdb6 extends Twig_Template
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
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "imagesByType", array(0 => "thumbnail"), "method"))) {
            // line 2
            echo "    ";
            $context["path"] = $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "imagesByType", array(0 => "thumbnail"), "method"), "first", array()), "path", array()), (((isset($context["filter"]) || array_key_exists("filter", $context))) ? (_twig_default_filter(($context["filter"] ?? null), "sylius_admin_product_thumbnail")) : ("sylius_admin_product_thumbnail")));
        } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 3
($context["product"] ?? null), "images", array()), "first", array())) {
            // line 4
            echo "    ";
            $context["path"] = $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "images", array()), "first", array()), "path", array()), (((isset($context["filter"]) || array_key_exists("filter", $context))) ? (_twig_default_filter(($context["filter"] ?? null), "sylius_admin_product_thumbnail")) : ("sylius_admin_product_thumbnail")));
        } else {
            // line 6
            echo "    ";
            $context["path"] = "//placehold.it/50x50";
        }
        // line 8
        echo "
<img src=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "\" alt=\"\" class=\"ui bordered image\" />
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Product/_mainImage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  38 => 8,  34 => 6,  30 => 4,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusAdmin/Product/_mainImage.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Product/_mainImage.html.twig");
    }
}
