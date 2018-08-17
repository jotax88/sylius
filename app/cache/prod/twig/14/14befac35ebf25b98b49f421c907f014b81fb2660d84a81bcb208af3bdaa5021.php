<?php

/* @SyliusUi/Menu/top.html.twig */
class __TwigTemplate_17ade6f938ff606993188b4e9314ae1e38e94e12b28bf6c1ebd679adaa4ca806 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "@SyliusUi/Menu/top.html.twig", 1);
        $this->blocks = array(
            'root' => array($this, 'block_root'),
            'items' => array($this, 'block_items'),
            'item' => array($this, 'block_item'),
            'link' => array($this, 'block_link'),
            'transition' => array($this, 'block_transition'),
            'icon' => array($this, 'block_icon'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "@SyliusUi/Menu/top.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_root($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $context["id"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", array(0 => "column_id"), "method");
        // line 7
        echo "
    <div class=\"six wide right aligned column\"";
        // line 8
        if (($context["id"] ?? null)) {
            echo " id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\"";
        }
        echo ">
        ";
        // line 9
        $this->displayBlock("items", $context, $blocks);
        echo "
    </div>
";
    }

    // line 13
    public function block_items($context, array $blocks = array())
    {
        // line 14
        echo "    <div class=\"ui buttons\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "children", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 16
            echo "            ";
            $this->displayBlock("item", $context, $blocks);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </div>
";
    }

    // line 21
    public function block_item($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        if (("edit" == twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attribute", array(0 => "type"), "method"))) {
            // line 23
            echo "        ";
            echo $context["buttons"]->macro_edit(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "uri", array()), twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", array()));
            echo "
    ";
        } elseif (("show" == twig_get_attribute($this->env, $this->source,         // line 24
($context["item"] ?? null), "attribute", array(0 => "type"), "method"))) {
            // line 25
            echo "        ";
            echo $context["buttons"]->macro_show(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "uri", array()), twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", array()));
            echo "
    ";
        } elseif (("delete" == twig_get_attribute($this->env, $this->source,         // line 26
($context["item"] ?? null), "attribute", array(0 => "type"), "method"))) {
            // line 27
            echo "        ";
            echo $context["buttons"]->macro_delete(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "uri", array()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", array())), true, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attribute", array(0 => "resource_id"), "method"));
            echo "
    ";
        } elseif (("transition" == twig_get_attribute($this->env, $this->source,         // line 28
($context["item"] ?? null), "attribute", array(0 => "type"), "method"))) {
            // line 29
            echo "        ";
            $this->displayBlock("transition", $context, $blocks);
            echo "
    ";
        } else {
            // line 31
            echo "        ";
            $this->displayBlock("link", $context, $blocks);
            echo "
    ";
        }
    }

    // line 35
    public function block_link($context, array $blocks = array())
    {
        // line 36
        echo "    ";
        $context["color"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "labelAttribute", array(0 => "color"), "method");
        // line 37
        echo "
    <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "uri", array()), "html", null, true);
        echo "\" class=\"ui ";
        if (($context["color"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["color"] ?? null), "html", null, true);
            echo " ";
        }
        echo "labeled icon button\">
        ";
        // line 39
        $this->displayBlock("icon", $context, $blocks);
        echo "
        ";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", array())), "html", null, true);
        echo "
    </a>
";
    }

    // line 44
    public function block_transition($context, array $blocks = array())
    {
        // line 45
        echo "    ";
        $context["color"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "labelAttribute", array(0 => "color"), "method");
        // line 46
        echo "
    <form action=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "uri", array()), "html", null, true);
        echo "\" method=\"post\" style=\"float: right;\">
        <input type=\"hidden\" name=\"_method\" value=\"PUT\">
        <button class=\"ui ";
        // line 49
        if (($context["color"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["color"] ?? null), "html", null, true);
            echo " ";
        }
        echo "labeled icon loadable button\" type=\"submit\">
            ";
        // line 50
        $this->displayBlock("icon", $context, $blocks);
        echo "
            ";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", array())), "html", null, true);
        echo "
        </button>
    </form>
";
    }

    // line 56
    public function block_icon($context, array $blocks = array())
    {
        // line 57
        echo "    ";
        $context["icon"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "labelAttribute", array(0 => "icon"), "method");
        // line 58
        echo "    ";
        if (($context["icon"] ?? null)) {
            echo "<i class=\"icon ";
            echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
            echo "\"></i> ";
        }
    }

    public function getTemplateName()
    {
        return "@SyliusUi/Menu/top.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 58,  215 => 57,  212 => 56,  204 => 51,  200 => 50,  193 => 49,  188 => 47,  185 => 46,  182 => 45,  179 => 44,  172 => 40,  168 => 39,  159 => 38,  156 => 37,  153 => 36,  150 => 35,  142 => 31,  136 => 29,  134 => 28,  129 => 27,  127 => 26,  122 => 25,  120 => 24,  115 => 23,  112 => 22,  109 => 21,  104 => 18,  87 => 16,  70 => 15,  67 => 14,  64 => 13,  57 => 9,  49 => 8,  46 => 7,  43 => 6,  40 => 5,  36 => 1,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusUi/Menu/top.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Menu/top.html.twig");
    }
}
