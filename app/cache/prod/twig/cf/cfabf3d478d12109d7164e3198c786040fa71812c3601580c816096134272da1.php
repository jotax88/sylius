<?php

/* @SyliusShop/Product/Index/_main.html.twig */
class __TwigTemplate_706cf0f5722062fdafde1de7e36b42ad5ccbbccf79061c3d75c678158f1734ef extends Twig_Template
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
        $context["messages"] = $this->loadTemplate("@SyliusUi/Macro/messages.html.twig", "@SyliusShop/Product/Index/_main.html.twig", 1);
        // line 2
        $context["pagination"] = $this->loadTemplate("@SyliusUi/Macro/pagination.html.twig", "@SyliusShop/Product/Index/_main.html.twig", 2);
        // line 3
        echo "
";
        // line 4
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.index.before_search", array("products" => twig_get_attribute($this->env, $this->source, ($context["resources"] ?? null), "data", array()))));
        echo "

";
        // line 6
        $this->loadTemplate("@SyliusShop/Product/Index/_search.html.twig", "@SyliusShop/Product/Index/_main.html.twig", 6)->display($context);
        // line 7
        echo "
";
        // line 8
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.index.after_search", array("products" => twig_get_attribute($this->env, $this->source, ($context["resources"] ?? null), "data", array()))));
        echo "

";
        // line 10
        $this->loadTemplate("@SyliusShop/Product/Index/_pagination.html.twig", "@SyliusShop/Product/Index/_main.html.twig", 10)->display($context);
        // line 11
        $this->loadTemplate("@SyliusShop/Product/Index/_sorting.html.twig", "@SyliusShop/Product/Index/_main.html.twig", 11)->display($context);
        // line 12
        echo "
<div class=\"ui clearing hidden divider\"></div>

";
        // line 15
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.index.before_list", array("products" => twig_get_attribute($this->env, $this->source, ($context["resources"] ?? null), "data", array()))));
        echo "

";
        // line 17
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["resources"] ?? null), "data", array())) > 0)) {
            // line 18
            echo "    <div class=\"ui three cards\" id=\"products\">
        ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["resources"] ?? null), "data", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 20
                echo "            ";
                $this->loadTemplate("@SyliusShop/Product/_box.html.twig", "@SyliusShop/Product/Index/_main.html.twig", 20)->display($context);
                // line 21
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "    </div>
    <div class=\"ui hidden divider\"></div>

    ";
            // line 25
            echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.index.before_pagination", array("products" => twig_get_attribute($this->env, $this->source, ($context["resources"] ?? null), "data", array()))));
            echo "

    ";
            // line 27
            echo $context["pagination"]->macro_simple(twig_get_attribute($this->env, $this->source, ($context["resources"] ?? null), "data", array()));
            echo "
";
        } else {
            // line 29
            echo "    ";
            echo $context["messages"]->macro_info("sylius.ui.no_results_to_display");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Index/_main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 29,  108 => 27,  103 => 25,  98 => 22,  84 => 21,  81 => 20,  64 => 19,  61 => 18,  59 => 17,  54 => 15,  49 => 12,  47 => 11,  45 => 10,  40 => 8,  37 => 7,  35 => 6,  30 => 4,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusShop/Product/Index/_main.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Product/Index/_main.html.twig");
    }
}
