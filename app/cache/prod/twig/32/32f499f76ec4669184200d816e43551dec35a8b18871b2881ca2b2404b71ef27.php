<?php

/* @SyliusShop/Product/Show/_images.html.twig */
class __TwigTemplate_9a576041f6ec99b57b1afa479f848feea5467bd2c86c04fb67a78cbb8de45c55 extends Twig_Template
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
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "imagesByType", array(0 => "main"), "method"))) {
            // line 2
            echo "    ";
            $context["source_path"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "imagesByType", array(0 => "main"), "method"), "first", array()), "path", array());
            // line 3
            echo "    ";
            $context["original_path"] = $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(($context["source_path"] ?? null), "sylius_shop_product_original");
            // line 4
            echo "    ";
            $context["path"] = $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(($context["source_path"] ?? null), (((isset($context["filter"]) || array_key_exists("filter", $context))) ? (_twig_default_filter(($context["filter"] ?? null), "sylius_shop_product_large_thumbnail")) : ("sylius_shop_product_large_thumbnail")));
        } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 5
($context["product"] ?? null), "images", array()), "first", array())) {
            // line 6
            echo "    ";
            $context["source_path"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "images", array()), "first", array()), "path", array());
            // line 7
            echo "    ";
            $context["original_path"] = $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(($context["source_path"] ?? null), "sylius_shop_product_original");
            // line 8
            echo "    ";
            $context["path"] = $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(($context["source_path"] ?? null), (((isset($context["filter"]) || array_key_exists("filter", $context))) ? (_twig_default_filter(($context["filter"] ?? null), "sylius_shop_product_large_thumbnail")) : ("sylius_shop_product_large_thumbnail")));
        } else {
            // line 10
            echo "    ";
            $context["original_path"] = "//placehold.it/400x300";
            // line 11
            echo "    ";
            $context["path"] = ($context["original_path"] ?? null);
        }
        // line 13
        echo "
<div data-product-image=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "\" data-product-link=\"";
        echo twig_escape_filter($this->env, ($context["original_path"] ?? null), "html", null, true);
        echo "\"></div>
<a href=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["original_path"] ?? null), "html", null, true);
        echo "\" class=\"ui fluid image\" data-lightbox=\"sylius-product-image\">
    <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "\" id=\"main-image\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", array()), "html", null, true);
        echo "\" />
</a>
";
        // line 18
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "images", array())) > 1)) {
            // line 19
            echo "<div class=\"ui divider\"></div>

";
            // line 21
            echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.before_thumbnails", array("product" => ($context["product"] ?? null))));
            echo "

<div class=\"ui small images\">
    ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "images", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 25
                echo "    ";
                $context["path"] = (( !(null === twig_get_attribute($this->env, $this->source, $context["image"], "path", array()))) ? ($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(twig_get_attribute($this->env, $this->source, $context["image"], "path", array()), "sylius_shop_product_small_thumbnail")) : ("//placehold.it/200x200"));
                // line 26
                echo "    <div class=\"ui image\">
    ";
                // line 27
                if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "isConfigurable", array(), "method") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variants", array())) > 0))) {
                    // line 28
                    echo "        ";
                    $this->loadTemplate("@SyliusShop/Product/Show/_imageVariants.html.twig", "@SyliusShop/Product/Show/_images.html.twig", 28)->display($context);
                    // line 29
                    echo "    ";
                }
                // line 30
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(twig_get_attribute($this->env, $this->source, $context["image"], "path", array()), "sylius_shop_product_original"), "html", null, true);
                echo "\" data-lightbox=\"sylius-product-image\">
            <img src=\"";
                // line 31
                echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
                echo "\" data-large-thumbnail=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(twig_get_attribute($this->env, $this->source, $context["image"], "path", array()), "sylius_shop_product_large_thumbnail"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", array()), "html", null, true);
                echo "\" />
        </a>
    </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/_images.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 35,  121 => 31,  116 => 30,  113 => 29,  110 => 28,  108 => 27,  105 => 26,  102 => 25,  85 => 24,  79 => 21,  75 => 19,  73 => 18,  66 => 16,  62 => 15,  56 => 14,  53 => 13,  49 => 11,  46 => 10,  42 => 8,  39 => 7,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusShop/Product/Show/_images.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Product/Show/_images.html.twig");
    }
}
