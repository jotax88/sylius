<?php

/* @SyliusAdmin/Form/theme.html.twig */
class __TwigTemplate_dd6eccd20dec0b760215e09e5d49dfe0ef0b1bee5f9b2c80ff0b0888a6792bfd extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@SyliusUi/Form/theme.html.twig", "@SyliusAdmin/Form/theme.html.twig", 1);
        $this->blocks = array(
            '_sylius_product_attribute_configuration_choices_entry_widget' => array($this, 'block__sylius_product_attribute_configuration_choices_entry_widget'),
            'sylius_taxon_autocomplete_choice_row' => array($this, 'block_sylius_taxon_autocomplete_choice_row'),
            'sylius_product_autocomplete_choice_row' => array($this, 'block_sylius_product_autocomplete_choice_row'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusUi/Form/theme.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block__sylius_product_attribute_configuration_choices_entry_widget($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context["flags"] = $this->loadTemplate("@SyliusUi/Macro/flags.html.twig", "@SyliusAdmin/Form/theme.html.twig", 4);
        // line 5
        echo "
    <div class=\"ui styled fluid accordion\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["translation"]) {
            // line 8
            echo "            <div data-locale=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translation"], "vars", array()), "name", array()), "html", null, true);
            echo "\">
                <div class=\"title";
            // line 9
            if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()))) {
                echo " active";
            }
            echo "\">
                    <i class=\"dropdown icon\"></i>
                    ";
            // line 11
            echo $context["flags"]->macro_fromLocaleCode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translation"], "vars", array()), "name", array()));
            echo " ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_locale_name')->getCallable(), array(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translation"], "vars", array()), "name", array()))), "html", null, true);
            echo "
                </div>
                <div class=\"ui content";
            // line 13
            if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()))) {
                echo " active";
            }
            echo "\">
                    ";
            // line 14
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translation"], 'widget');
            // line 15
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            // line 16
            echo "</div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </div>
";
    }

    // line 22
    public function block_sylius_taxon_autocomplete_choice_row($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'row', array("remote_url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_ajax_taxon_by_name_phrase"), "load_edit_url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_ajax_taxon_by_code")));
        echo "
";
    }

    // line 26
    public function block_sylius_product_autocomplete_choice_row($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'row', array("remote_url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_ajax_product_by_name_phrase"), "load_edit_url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_ajax_product_by_code")));
        echo "
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Form/theme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 27,  121 => 26,  114 => 23,  111 => 22,  106 => 19,  90 => 16,  88 => 15,  86 => 14,  80 => 13,  73 => 11,  66 => 9,  61 => 8,  44 => 7,  40 => 5,  37 => 4,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusAdmin/Form/theme.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Form/theme.html.twig");
    }
}
