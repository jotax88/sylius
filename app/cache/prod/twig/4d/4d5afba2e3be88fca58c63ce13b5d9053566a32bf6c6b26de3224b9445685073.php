<?php

/* @SyliusShop/Product/Show/Tabs/_attributes.html.twig */
class __TwigTemplate_69622f278e0a51e85c3a415382a8158c24172cdb06da8ff0e266162e9bbdc9b3 extends Twig_Template
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
        echo "<div class=\"ui bottom attached tab segment\" data-tab=\"attributes\">
    ";
        // line 2
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.tab_attributes", array("product" => ($context["product"] ?? null))));
        echo "

    <table id=\"sylius-product-attributes\" class=\"ui definition table\">
        <tbody>
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Sylius\Bundle\UiBundle\Twig\SortByExtension']->sortBy(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getAttributesByLocale", array(0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "request", array()), "locale", array()), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "request", array()), "defaultLocale", array()), 2 => ($context["sylius_base_locale"] ?? null)), "method"), "attribute.position"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
            // line 7
            echo "            <tr>
                <td class=\"sylius-product-attribute-name\">";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attribute"], "name", array()), "html", null, true);
            echo "</td>
                <td class=\"sylius-product-attribute-value\">
                    ";
            // line 10
            $this->loadTemplate(array(0 => (("SyliusAttributeBundle:Types:" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["attribute"], "attribute", array()), "type", array())) . ".html.twig"), 1 => "SyliusAttributeBundle:Types:default.html.twig"), "@SyliusShop/Product/Show/Tabs/_attributes.html.twig", 10)->display(array_merge($context, array("attribute" => $context["attribute"], "locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "request", array()), "locale", array()), "fallbackLocale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "request", array()), "defaultLocale", array()))));
            // line 11
            echo "                </td>
            </tr>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        </tbody>
    </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/Tabs/_attributes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 14,  60 => 11,  58 => 10,  53 => 8,  50 => 7,  33 => 6,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusShop/Product/Show/Tabs/_attributes.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Product/Show/Tabs/_attributes.html.twig");
    }
}
