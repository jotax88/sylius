<?php

/* knp_menu.html.twig */
class __TwigTemplate_94a8640e8556af2988fac98ea9087b042538e7fb48cd2ff3c9c7de584804a44a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("knp_menu_base.html.twig", "knp_menu.html.twig", 1);
        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_compressed_root($context, array $blocks = array())
    {
        // line 12
        ob_start();
        // line 13
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 17
    public function block_root($context, array $blocks = array())
    {
        // line 18
        $context["listAttributes"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "childrenAttributes", array());
        // line 19
        $this->displayBlock("list", $context, $blocks);
    }

    // line 22
    public function block_list($context, array $blocks = array())
    {
        // line 23
        if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "hasChildren", array()) &&  !(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "depth", array()) === 0)) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "displayChildren", array()))) {
            // line 24
            echo "    ";
            $context["knp_menu"] = $this;
            // line 25
            echo "    <ul";
            echo $context["knp_menu"]->macro_attributes(($context["listAttributes"] ?? null));
            echo ">
        ";
            // line 26
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
    }

    // line 31
    public function block_children($context, array $blocks = array())
    {
        // line 33
        $context["currentOptions"] = ($context["options"] ?? null);
        // line 34
        $context["currentItem"] = ($context["item"] ?? null);
        // line 36
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "depth", array()))) {
            // line 37
            $context["options"] = twig_array_merge(($context["options"] ?? null), array("depth" => (twig_get_attribute($this->env, $this->source, ($context["currentOptions"] ?? null), "depth", array()) - 1)));
        }
        // line 40
        if (( !(null === twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "matchingDepth", array())) && (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "matchingDepth", array()) > 0))) {
            // line 41
            $context["options"] = twig_array_merge(($context["options"] ?? null), array("matchingDepth" => (twig_get_attribute($this->env, $this->source, ($context["currentOptions"] ?? null), "matchingDepth", array()) - 1)));
        }
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentItem"] ?? null), "children", array()));
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
            // line 44
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
        // line 47
        $context["item"] = ($context["currentItem"] ?? null);
        // line 48
        $context["options"] = ($context["currentOptions"] ?? null);
    }

    // line 51
    public function block_item($context, array $blocks = array())
    {
        // line 52
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "displayed", array())) {
            // line 54
            $context["classes"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attribute", array(0 => "class"), "method"))) ? (array(0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 55
            if (twig_get_attribute($this->env, $this->source, ($context["matcher"] ?? null), "isCurrent", array(0 => ($context["item"] ?? null)), "method")) {
                // line 56
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "currentClass", array())));
            } elseif (twig_get_attribute($this->env, $this->source,             // line 57
($context["matcher"] ?? null), "isAncestor", array(0 => ($context["item"] ?? null), 1 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "matchingDepth", array())), "method")) {
                // line 58
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "ancestorClass", array())));
            }
            // line 60
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "actsLikeFirst", array())) {
                // line 61
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "firstClass", array())));
            }
            // line 63
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "actsLikeLast", array())) {
                // line 64
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "lastClass", array())));
            }
            // line 66
            echo "
    ";
            // line 68
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "hasChildren", array()) &&  !(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "depth", array()) === 0))) {
                // line 69
                echo "        ";
                if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "branch_class", array())) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "displayChildren", array()))) {
                    // line 70
                    $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "branch_class", array())));
                    // line 71
                    echo "        ";
                }
                // line 72
                echo "    ";
            } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "leaf_class", array()))) {
                // line 73
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "leaf_class", array())));
            }
            // line 76
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attributes", array());
            // line 77
            if ( !twig_test_empty(($context["classes"] ?? null))) {
                // line 78
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), array("class" => twig_join_filter(($context["classes"] ?? null), " ")));
            }
            // line 81
            echo "    ";
            $context["knp_menu"] = $this;
            // line 82
            echo "    <li";
            echo $context["knp_menu"]->macro_attributes(($context["attributes"] ?? null));
            echo ">";
            // line 83
            if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "uri", array())) && ( !twig_get_attribute($this->env, $this->source, ($context["matcher"] ?? null), "isCurrent", array(0 => ($context["item"] ?? null)), "method") || twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "currentAsLink", array())))) {
                // line 84
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 86
                echo "        ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 89
            $context["childrenClasses"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 90
            $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? null), array(0 => ("menu_level_" . twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "level", array()))));
            // line 91
            $context["listAttributes"] = twig_array_merge(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "childrenAttributes", array()), array("class" => twig_join_filter(($context["childrenClasses"] ?? null), " ")));
            // line 92
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>
";
        }
    }

    // line 97
    public function block_linkElement($context, array $blocks = array())
    {
        $context["knp_menu"] = $this;
        echo "<a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["knp_menu"]->macro_attributes(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "linkAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
    }

    // line 99
    public function block_spanElement($context, array $blocks = array())
    {
        $context["knp_menu"] = $this;
        echo "<span";
        echo $context["knp_menu"]->macro_attributes(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "labelAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
    }

    // line 101
    public function block_label($context, array $blocks = array())
    {
        if ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "allow_safe_labels", array()) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", array());
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", array()), "html", null, true);
        }
    }

    // line 3
    public function macro_attributes($__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 5
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 6
                    echo sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "knp_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 6,  273 => 5,  269 => 4,  257 => 3,  247 => 101,  236 => 99,  223 => 97,  214 => 92,  212 => 91,  210 => 90,  208 => 89,  204 => 86,  200 => 84,  198 => 83,  194 => 82,  191 => 81,  188 => 78,  186 => 77,  184 => 76,  181 => 73,  178 => 72,  175 => 71,  173 => 70,  170 => 69,  167 => 68,  164 => 66,  161 => 64,  159 => 63,  156 => 61,  154 => 60,  151 => 58,  149 => 57,  147 => 56,  145 => 55,  143 => 54,  141 => 52,  138 => 51,  134 => 48,  132 => 47,  115 => 44,  98 => 43,  95 => 41,  93 => 40,  90 => 37,  88 => 36,  86 => 34,  84 => 33,  81 => 31,  73 => 26,  68 => 25,  65 => 24,  63 => 23,  60 => 22,  56 => 19,  54 => 18,  51 => 17,  44 => 13,  42 => 12,  39 => 11,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "knp_menu.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Resources\\views\\knp_menu.html.twig");
    }
}
