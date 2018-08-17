<?php

/* @SyliusShop/Cart/_widget.html.twig */
class __TwigTemplate_734b0762a4d90e2e42d33d35d7e5ee7cee1925f4deb0eb72e6738e17eb008258 extends Twig_Template
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
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "@SyliusShop/Cart/_widget.html.twig", 1);
        // line 2
        echo "
<div id=\"sylius-cart-button\" class=\"ui circular cart button\">
    ";
        // line 4
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.partial.cart.summary.before_widget_content", array("cart" => ($context["cart"] ?? null))));
        echo "

    <i class=\"cart icon\"></i>
    <span id=\"sylius-cart-total\">
        ";
        // line 8
        echo $context["money"]->macro_convertAndFormat(twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "itemsTotal", array()));
        echo "
    </span>
    ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("sylius.ui.item.choice", twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "items", array())), array(), "messages");
        // line 11
        echo "
    ";
        // line 12
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.partial.cart.summary.after_widget_content", array("cart" => ($context["cart"] ?? null))));
        echo "
</div>
<div class=\"ui large flowing cart hidden popup\">
    ";
        // line 15
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.partial.cart.summary.before_popup_content", array("cart" => ($context["cart"] ?? null))));
        echo "

    ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "empty", array())) {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.your_cart_is_empty"), "html", null, true);
            echo ".
    ";
        } else {
            // line 20
            echo "    <div class=\"ui list\">
        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 22
                echo "        <div class=\"item\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", array()), "html", null, true);
                echo " x <strong>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "product", array()), "html", null, true);
                echo "</strong> ";
                echo $context["money"]->macro_convertAndFormat(twig_get_attribute($this->env, $this->source, $context["item"], "unitPrice", array()));
                echo "</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "        <div class=\"item\"><strong>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.subtotal"), "html", null, true);
            echo "</strong>: ";
            echo $context["money"]->macro_convertAndFormat(twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "itemsTotal", array()));
            echo "</div>
    </div>
    <a href=\"";
            // line 26
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_cart_summary");
            echo "\" class=\"ui fluid basic text button\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.view_and_edit_cart"), "html", null, true);
            echo "</a>
    <div class=\"ui divider\"></div>
    <a href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_checkout_start");
            echo "\" class=\"ui fluid primary button\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.checkout"), "html", null, true);
            echo "</a>
    ";
        }
        // line 30
        echo "
    ";
        // line 31
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.partial.cart.summary.after_popup_content", array("cart" => ($context["cart"] ?? null))));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Cart/_widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 31,  107 => 30,  100 => 28,  93 => 26,  85 => 24,  72 => 22,  68 => 21,  65 => 20,  59 => 18,  57 => 17,  52 => 15,  46 => 12,  43 => 11,  41 => 10,  36 => 8,  29 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusShop/Cart/_widget.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Cart/_widget.html.twig");
    }
}
