<?php

/* @SyliusUi/Menu/simple.html.twig */
class __TwigTemplate_e99df64650791645f78e0248fdf0fe826d96630e02f9f931611cd1a40a0af3cc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "@SyliusUi/Menu/simple.html.twig", 1);
        $this->blocks = array(
            'root' => array($this, 'block_root'),
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
    public function block_root($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"ui fluid vertical menu\">
        <div class=\"header item\">";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", array())), "html", null, true);
        echo "</div>
        ";
        // line 6
        $this->displayBlock("list", $context, $blocks);
        echo "
    </div>
";
    }

    // line 10
    public function block_list($context, array $blocks = array())
    {
        // line 11
        echo "    ";
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
            // line 12
            echo "        ";
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

    // line 16
    public function block_item($context, array $blocks = array())
    {
        // line 17
        echo "    <a class=\"item\" href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "uri", array()), "html", null, true);
        echo "\">
        ";
        // line 18
        $this->displayBlock("icon", $context, $blocks);
        echo "
        ";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", array())), "html", null, true);
        echo "
    </a>
";
    }

    // line 23
    public function block_icon($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        $context["icon"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "labelAttribute", array(0 => "icon"), "method");
        // line 25
        echo "    ";
        if (($context["icon"] ?? null)) {
            echo "<i class=\"icon ";
            echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
            echo "\"></i> ";
        }
    }

    public function getTemplateName()
    {
        return "@SyliusUi/Menu/simple.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 25,  114 => 24,  111 => 23,  104 => 19,  100 => 18,  95 => 17,  92 => 16,  73 => 12,  55 => 11,  52 => 10,  45 => 6,  41 => 5,  38 => 4,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusUi/Menu/simple.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Menu/simple.html.twig");
    }
}
