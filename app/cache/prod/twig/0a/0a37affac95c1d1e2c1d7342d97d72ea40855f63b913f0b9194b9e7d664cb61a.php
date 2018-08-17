<?php

/* @SyliusShop/Product/Index/_pagination.html.twig */
class __TwigTemplate_ef91d28f0da0f5680851df3ef04376eb7f0c6bc64fe59bba118d264b4e2a10c5 extends Twig_Template
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
        $context["paginationLimits"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["resources"] ?? null), "definition", array()), "limits", array());
        // line 2
        echo "
<div class=\"ui right floated small header\">
    <div class=\"content\">
        <div class=\"ui inline dropdown sylius-paginate\">
            ";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.show"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["resources"] ?? null), "data", array()), "maxPerPage", array()), "html", null, true);
        echo "
            <i class=\"dropdown icon\"></i>
            <div class=\"menu\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["paginationLimits"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["limit"]) {
            if (($context["limit"] != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["resources"] ?? null), "data", array()), "maxPerPage", array()))) {
                // line 10
                echo "                ";
                $context["path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge(twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "query", array()), "all", array())), array("limit" => $context["limit"])));
                // line 11
                echo "                <a class=\"item\" href=\"";
                echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["limit"], "html", null, true);
                echo "</a>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Index/_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 13,  47 => 11,  44 => 10,  39 => 9,  31 => 6,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusShop/Product/Index/_pagination.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Product/Index/_pagination.html.twig");
    }
}
