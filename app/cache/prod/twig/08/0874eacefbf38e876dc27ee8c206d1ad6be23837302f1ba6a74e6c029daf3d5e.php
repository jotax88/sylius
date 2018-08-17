<?php

/* SyliusUiBundle:Menu:sidebar.html.twig */
class __TwigTemplate_d7b57fef82fe4b4e1e38751ab1766832377e624c6d520ead48584dba16a52663 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SyliusUiBundle:Menu:sidebar.html.twig", 1);
        $this->blocks = array(
            'list' => array($this, 'block_list'),
            'item' => array($this, 'block_item'),
            'icon' => array($this, 'block_icon'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_list($context, array $blocks = array())
    {
        // line 4
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
            // line 5
            echo "    ";
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
    }

    // line 9
    public function block_item($context, array $blocks = array())
    {
        // line 11
        $context["classes"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attribute", array(0 => "class"), "method"))) ? (array(0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attribute", array(0 => "class"), "method"))) : (array()));
        // line 12
        if (twig_get_attribute($this->env, $this->source, ($context["matcher"] ?? null), "isCurrent", array(0 => ($context["item"] ?? null)), "method")) {
            // line 13
            $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "currentClass", array())));
        } elseif (twig_get_attribute($this->env, $this->source,         // line 14
($context["matcher"] ?? null), "isAncestor", array(0 => ($context["item"] ?? null), 1 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "matchingDepth", array())), "method")) {
            // line 15
            $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "ancestorClass", array())));
        }
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "actsLikeFirst", array())) {
            // line 18
            $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "firstClass", array())));
        }
        // line 20
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "actsLikeLast", array())) {
            // line 21
            $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "lastClass", array())));
        }
        // line 23
        echo "
";
        // line 25
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "hasChildren", array()) &&  !(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "depth", array()) === 0))) {
            // line 26
            echo "    ";
            if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "branch_class", array())) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "displayChildren", array()))) {
                // line 27
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "branch_class", array())));
                // line 28
                echo "    ";
            }
        } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 29
($context["options"] ?? null), "leaf_class", array()))) {
            // line 30
            $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "leaf_class", array())));
        }
        // line 33
        $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attributes", array());
        // line 34
        if ( !twig_test_empty(($context["classes"] ?? null))) {
            // line 35
            $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), array("class" => twig_join_filter(($context["classes"] ?? null), " ")));
        }
        // line 37
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "level", array()) === 1)) {
            // line 38
            echo "<div class=\"item ";
            if (twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "class", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "class", array()), "html", null, true);
            }
            echo "\">
    <div class=\"header\">";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", array())), "html", null, true);
            echo "</div>
    <div class=\"menu\">
        ";
            // line 41
            $this->displayBlock("list", $context, $blocks);
            echo "
    </div>
</div>
";
        } else {
            // line 45
            echo "<a class=\"item ";
            if (twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "class", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "class", array()), "html", null, true);
            }
            echo "\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "uri", array()), "html", null, true);
            echo "\">
    ";
            // line 46
            $this->displayBlock("icon", $context, $blocks);
            echo "
    ";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", array())), "html", null, true);
            echo "
</a>
";
        }
    }

    // line 52
    public function block_icon($context, array $blocks = array())
    {
        // line 53
        $context["icon"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "labelAttribute", array(0 => "icon"), "method");
        // line 54
        if (($context["icon"] ?? null)) {
            echo "<i class=\"icon ";
            echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
            echo "\"></i> ";
        }
    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Menu:sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 54,  167 => 53,  164 => 52,  156 => 47,  152 => 46,  143 => 45,  136 => 41,  131 => 39,  124 => 38,  122 => 37,  119 => 35,  117 => 34,  115 => 33,  112 => 30,  110 => 29,  107 => 28,  105 => 27,  102 => 26,  100 => 25,  97 => 23,  94 => 21,  92 => 20,  89 => 18,  87 => 17,  84 => 15,  82 => 14,  80 => 13,  78 => 12,  76 => 11,  73 => 9,  54 => 5,  37 => 4,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SyliusUiBundle:Menu:sidebar.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Menu/sidebar.html.twig");
    }
}
