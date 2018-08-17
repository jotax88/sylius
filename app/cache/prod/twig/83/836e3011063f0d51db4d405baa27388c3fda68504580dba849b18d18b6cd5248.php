<?php

/* @SyliusShop/Product/Index/_search.html.twig */
class __TwigTemplate_d14c87abaeba207989947730ee2d3fcb27a9535741d3d99fbd745d3e8287b7f9 extends Twig_Template
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
        echo "<div class=\"ui segment\">
    <form method=\"get\" action=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_index", array("slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "slug"), "method"))), "html", null, true);
        echo "\" class=\"ui loadable form\">
        <div class=\"ui stackable grid\">
            <div class=\"eleven wide column\">
                ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "definition", array()), "enabledFilters", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
            // line 6
            echo "                    ";
            echo call_user_func_array($this->env->getFunction('sylius_grid_render_filter')->getCallable(), array(($context["products"] ?? null), $context["filter"]));
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "            </div>
            <div class=\"three wide column\">
                <div class=\"ui buttons\">
                    <button type=\"submit\" class=\"ui primary icon labeled button\"><i class=\"search icon\"></i> ";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.search"), "html", null, true);
        echo "</button>
                    <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_index", array("slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "slug"), "method"))), "html", null, true);
        echo "\" class=\"ui negative icon labeled button\">
                        <i class=\"cancel icon\"></i> ";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.clear"), "html", null, true);
        echo "
                    </a>
                </div>
            </div>
        </div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Index/_search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 13,  54 => 12,  50 => 11,  45 => 8,  36 => 6,  32 => 5,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusShop/Product/Index/_search.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Product/Index/_search.html.twig");
    }
}
