<?php

/* @SyliusShop/Product/Show/_addToCart.html.twig */
class __TwigTemplate_afab9416992161e98f0f0dd0879e9ecbfadd43921366c3dd2716991ae3a793ba extends Twig_Template
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
        $context["product"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order_item"] ?? null), "variant", array()), "product", array());
        // line 2
        echo "
";
        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), array(0 => "SyliusUiBundle:Form:theme.html.twig"), true);
        // line 4
        echo "
<div class=\"ui segment\" id=\"sylius-product-selecting-variant\">
    ";
        // line 6
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.before_add_to_cart", array("product" => ($context["product"] ?? null), "order_item" => ($context["order_item"] ?? null))));
        echo "

    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_ajax_cart_add_item", array("productId" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", array()))), "attr" => array("id" => "sylius-product-adding-to-cart", "class" => "ui loadable form", "novalidate" => "novalidate", "data-redirect" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "getRedirectRoute", array(0 => "summary"), "method")))));
        echo "
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
    <div class=\"ui red label bottom pointing hidden sylius-validation-error\" id=\"sylius-cart-validation-error\"></div>
    ";
        // line 11
        if ( !twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "simple", array())) {
            // line 12
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variantSelectionMethodChoice", array())) {
                // line 13
                echo "            ";
                $this->loadTemplate("@SyliusShop/Product/Show/_variants.html.twig", "@SyliusShop/Product/Show/_addToCart.html.twig", 13)->display($context);
                // line 14
                echo "        ";
            } else {
                // line 15
                echo "            ";
                $this->loadTemplate("@SyliusShop/Product/Show/_options.html.twig", "@SyliusShop/Product/Show/_addToCart.html.twig", 15)->display($context);
                // line 16
                echo "        ";
            }
            // line 17
            echo "    ";
        }
        // line 18
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "cartItem", array()), "quantity", array()), 'row');
        echo "

    ";
        // line 20
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.add_to_cart_form", array("product" => ($context["product"] ?? null), "order_item" => ($context["order_item"] ?? null))));
        echo "

    <button type=\"submit\" class=\"ui huge primary icon labeled button\"><i class=\"cart icon\"></i> ";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.add_to_cart"), "html", null, true);
        echo "</button>
    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", array()), 'row');
        echo "
    ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end', array("render_rest" => false));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/_addToCart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 24,  83 => 23,  79 => 22,  74 => 20,  68 => 18,  65 => 17,  62 => 16,  59 => 15,  56 => 14,  53 => 13,  50 => 12,  48 => 11,  43 => 9,  39 => 8,  34 => 6,  30 => 4,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusShop/Product/Show/_addToCart.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Product/Show/_addToCart.html.twig");
    }
}
