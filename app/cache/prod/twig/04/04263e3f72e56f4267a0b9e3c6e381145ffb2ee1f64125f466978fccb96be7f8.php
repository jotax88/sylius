<?php

/* SyliusUiBundle:Form:theme.html.twig */
class __TwigTemplate_0744ac540e9b290a517756eca8fc3eab8fd66a5b1cfe44f2c99b18acf509c1f4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "SyliusUiBundle:Form:theme.html.twig", 1);
        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'form_errors' => array($this, 'block_form_errors'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'money_widget' => array($this, 'block_money_widget'),
            'choice_row' => array($this, 'block_choice_row'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'sylius_province_widget' => array($this, 'block_sylius_province_widget'),
            'sylius_zone_member_widget' => array($this, 'block_sylius_zone_member_widget'),
            'sylius_promotion_rule_widget' => array($this, 'block_sylius_promotion_rule_widget'),
            'sylius_promotion_action_widget' => array($this, 'block_sylius_promotion_action_widget'),
            'sylius_promotion_configuration_widget' => array($this, 'block_sylius_promotion_configuration_widget'),
            'sylius_product_option_value_widget' => array($this, 'block_sylius_product_option_value_widget'),
            'sylius_translations_row' => array($this, 'block_sylius_translations_row'),
            'sylius_resource_autocomplete_choice_row' => array($this, 'block_sylius_resource_autocomplete_choice_row'),
            'sylius_product_variant_generation_widget' => array($this, 'block_sylius_product_variant_generation_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"";
        if (($context["required"] ?? null)) {
            echo "required ";
        }
        echo "field";
        if ((( !($context["compound"] ?? null) || (((isset($context["force_error"]) || array_key_exists("force_error", $context))) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " error";
        }
        echo "\">";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 8
        echo "</div>";
    }

    // line 11
    public function block_form_errors($context, array $blocks = array())
    {
        // line 12
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 14
                echo "<div class=\"ui red ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", array()))) {
                    echo "pointing ";
                }
                echo "label sylius-validation-error\"";
                if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", array()))) {
                    echo " style=\"margin-bottom: 10px;\"";
                }
                echo ">
                ";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", array()), "html", null, true);
                echo "
            </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    // line 21
    public function block_checkbox_row($context, array $blocks = array())
    {
        // line 22
        echo "<div class=\"field";
        if ((( !($context["compound"] ?? null) || (((isset($context["force_error"]) || array_key_exists("force_error", $context))) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " error";
        }
        echo "\">
        <div class=\"ui toggle checkbox\">";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 27
        echo "</div>
    </div>";
    }

    // line 31
    public function block_radio_row($context, array $blocks = array())
    {
        // line 32
        echo "<div class=\"field";
        if ((( !($context["compound"] ?? null) || (((isset($context["force_error"]) || array_key_exists("force_error", $context))) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " error";
        }
        echo "\">
        <div class=\"ui radio checkbox\">";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 37
        echo "</div>
    </div>";
    }

    // line 41
    public function block_money_widget($context, array $blocks = array())
    {
        // line 42
        echo "<div class=\"ui labeled input\">
        <div class=\"ui label\">";
        // line 43
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_currency_symbol')->getCallable(), array(($context["currency"] ?? null))), "html", null, true);
        echo "</div>";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 45
        echo "</div>";
    }

    // line 48
    public function block_choice_row($context, array $blocks = array())
    {
        // line 49
        echo "<div class=\"";
        if (($context["required"] ?? null)) {
            echo "required ";
        }
        echo "field";
        if ((( !($context["compound"] ?? null) || (((isset($context["force_error"]) || array_key_exists("force_error", $context))) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " error";
        }
        echo "\">";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 51
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()))) : ("")) . " ui dropdown")));
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', array("attr" => ($context["attr"] ?? null)));
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 54
        echo "</div>";
    }

    // line 57
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 58
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        <div class=\"grouped fields\">";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 61
            echo "                <div class=\"field\">
                    <div class=\"ui toggle checkbox\">";
            // line 63
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => ($context["choice_translation_domain"] ?? null)));
            // line 64
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 65
            echo "</div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "</div>
    </div>";
    }

    // line 72
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 73
        echo "<div class=\"ui right labeled input\">";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 75
        echo "<div class=\"ui basic label\">%</div>
    </div>";
    }

    // line 79
    public function block_collection_widget($context, array $blocks = array())
    {
        // line 80
        $context["__internal_3e0042952dab8c0201c409d2431723438ea7bb0e3c2083f01b11a5fd847bb37c"] = $this->loadTemplate("SyliusResourceBundle:Macros:notification.html.twig", "SyliusUiBundle:Form:theme.html.twig", 80);
        // line 81
        echo "    ";
        $context["self"] = $this;
        // line 82
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()))) : ("")) . " controls collection-widget")));
        // line 83
        echo "
    ";
        // line 84
        ob_start();
        // line 85
        echo "        <div data-form-type=\"collection\" ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo "
            ";
        // line 86
        if (((isset($context["prototype"]) || array_key_exists("prototype", $context)) && ($context["allow_add"] ?? null))) {
            // line 87
            echo "                data-prototype='";
            echo twig_escape_filter($this->env, $context["self"]->macro_collection_item(($context["prototype"] ?? null), ($context["allow_delete"] ?? null), ($context["button_delete_label"] ?? null), "__name__"));
            echo "'";
        }
        // line 89
        echo ">
            ";
        // line 90
        echo $context["__internal_3e0042952dab8c0201c409d2431723438ea7bb0e3c2083f01b11a5fd847bb37c"]->macro_error(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", array()), "errors", array()));
        echo "

            ";
        // line 92
        if (twig_test_iterable((((isset($context["prototypes"]) || array_key_exists("prototypes", $context))) ? (_twig_default_filter(($context["prototypes"] ?? null))) : ("")))) {
            // line 93
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["prototypes"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["subPrototype"]) {
                // line 94
                echo "                    <input type=\"hidden\" data-form-prototype=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["self"]->macro_collection_item($context["subPrototype"], ($context["allow_delete"] ?? null), ($context["button_delete_label"] ?? null), "__name__"));
                echo "\" />
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['subPrototype'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "            ";
        }
        // line 97
        echo "
            <div data-form-collection=\"list\">
                ";
        // line 99
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 100
            echo "                    ";
            echo $context["self"]->macro_collection_item($context["child"], ($context["allow_delete"] ?? null), ($context["button_delete_label"] ?? null), twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()));
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "            </div>

            ";
        // line 104
        if (((isset($context["prototype"]) || array_key_exists("prototype", $context)) && ($context["allow_add"] ?? null))) {
            // line 105
            echo "                <a href=\"#\" class=\"ui labeled icon button\" data-form-collection=\"add\">
                    <i class=\"plus square outline icon\"></i>
                    ";
            // line 107
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["button_add_label"] ?? null)), "html", null, true);
            echo "
                </a>
            ";
        }
        // line 110
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 128
    public function block_sylius_province_widget($context, array $blocks = array())
    {
        // line 129
        echo "<div class=\"ui compact segment\">
    <div class=\"inline fields\">
        ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "code", array()), 'row');
        echo "
        ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", array()), 'row');
        echo "
        ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "abbreviation", array()), 'row');
        echo "
    </div>
</div>
";
    }

    // line 138
    public function block_sylius_zone_member_widget($context, array $blocks = array())
    {
        // line 139
        echo "    <div class=\"ui compact segment\">
        <div class=\"inline fields\">
            ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "code", array()), 'row');
        echo "
        </div>
    </div>
";
    }

    // line 146
    public function block_sylius_promotion_rule_widget($context, array $blocks = array())
    {
        // line 147
        echo "    <div class=\"ui segment\">
        ";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 152
    public function block_sylius_promotion_action_widget($context, array $blocks = array())
    {
        // line 153
        echo "    <div class=\"ui segment\">
        ";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 158
    public function block_sylius_promotion_configuration_widget($context, array $blocks = array())
    {
        // line 159
        echo "    <div class=\"configuration\">
        ";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 161
            echo "            <hr/>";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
            echo "<hr/>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "    </div>
";
    }

    // line 166
    public function block_sylius_product_option_value_widget($context, array $blocks = array())
    {
        // line 167
        echo "    <div class=\"ui segment\">
        ";
        // line 168
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "code", array()), 'row');
        echo "
            <div class=\"five fields\">
            ";
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "translations", array()));
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
        foreach ($context['_seq'] as $context["locale"] => $context["translationForm"]) {
            // line 171
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["translationForm"], "value", array()), 'row', array("label" => call_user_func_array($this->env->getFilter('sylius_locale_name')->getCallable(), array($context["locale"]))));
            echo "
                ";
            // line 172
            if ((0 == (twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()) % 5))) {
                // line 173
                echo "                </div>
                <div class=\"five fields\">
                ";
            }
            // line 176
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['locale'], $context['translationForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "            </div>
    </div>
";
    }

    // line 181
    public function block_sylius_translations_row($context, array $blocks = array())
    {
        // line 182
        echo "<h4 class=\"ui dividing header\">";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        echo "</h4>
    <div class=\"ui grid\">
        ";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translation"]) {
            // line 185
            echo "            <div class=\"four wide column\">
                ";
            // line 186
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translation"], 'label', (twig_test_empty($_label_ = call_user_func_array($this->env->getFilter('sylius_locale_name')->getCallable(), array(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translation"], "vars", array()), "name", array())))) ? array() : array("label" => $_label_)));
            echo "
            </div>
            <div class=\"twelve wide column\">
                ";
            // line 189
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translation"], 'widget');
            echo "
            </div>";
            // line 191
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "    </div>";
    }

    // line 196
    public function block_sylius_resource_autocomplete_choice_row($context, array $blocks = array())
    {
        // line 197
        echo "    <div class=\"";
        if (($context["required"] ?? null)) {
            echo "required ";
        }
        echo "field";
        if ((( !($context["compound"] ?? null) || (((isset($context["force_error"]) || array_key_exists("force_error", $context))) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " error";
        }
        echo "\">";
        // line 198
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 199
        echo "<div
            class=\"sylius-autocomplete ui fluid search selection dropdown ";
        // line 200
        if (($context["multiple"] ?? null)) {
            echo "multiple";
        }
        echo "\"
            data-url=\"";
        // line 201
        echo twig_escape_filter($this->env, ($context["remote_url"] ?? null), "html", null, true);
        echo "\"
            data-choice-name=\"";
        // line 202
        echo twig_escape_filter($this->env, ($context["choice_name"] ?? null), "html", null, true);
        echo "\"
            data-choice-value=\"";
        // line 203
        echo twig_escape_filter($this->env, ($context["choice_value"] ?? null), "html", null, true);
        echo "\"
            data-criteria-type=\"";
        // line 204
        echo twig_escape_filter($this->env, ($context["remote_criteria_type"] ?? null), "html", null, true);
        echo "\"
            data-criteria-name=\"";
        // line 205
        echo twig_escape_filter($this->env, ($context["remote_criteria_name"] ?? null), "html", null, true);
        echo "\"
            data-load-edit-url=\"";
        // line 206
        echo twig_escape_filter($this->env, ($context["load_edit_url"] ?? null), "html", null, true);
        echo "\"
        >";
        // line 208
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', array("attr" => array("class" => "autocomplete")));
        // line 209
        echo "<i class=\"dropdown icon\"></i>
            <div class=\"default text\">";
        // line 210
        if ((isset($context["placeholder"]) || array_key_exists("placeholder", $context))) {
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["placeholder"] ?? null)), "html", null, true);
            echo " ";
        }
        echo "</div>
            <div class=\"menu\"></div>
        </div>";
        // line 213
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 214
        echo "</div>
";
    }

    // line 217
    public function block_sylius_product_variant_generation_widget($context, array $blocks = array())
    {
        // line 218
        echo "    <div class=\"ui segment\">
        <div class=\"ui two column stackable grid\">
            <div class=\"column\">
                ";
        // line 221
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "optionValues", array()), 'row', array("label" => false));
        echo "
            </div>
            <div class=\"column\">
                ";
        // line 224
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "code", array()), 'row');
        echo "
                ";
        // line 225
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", array()), 'row');
        echo "
            </div>
        </div>
        <h4 class=\"ui dividing header\">";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.pricing"), "html", null, true);
        echo "</h4>
        ";
        // line 229
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "channelPricings", array()), 'row', array("label" => false));
        echo "
    </div>
";
    }

    // line 114
    public function macro_collection_item($__form__ = null, $__allow_delete__ = null, $__button_delete_label__ = null, $__index__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "allow_delete" => $__allow_delete__,
            "button_delete_label" => $__button_delete_label__,
            "index" => $__index__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 115
            echo "    ";
            ob_start();
            // line 116
            echo "        <div data-form-collection=\"item\" data-form-collection-index=\"";
            echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
            echo "\">
            ";
            // line 117
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
            ";
            // line 118
            if (($context["allow_delete"] ?? null)) {
                // line 119
                echo "                <a href=\"#\" data-form-collection=\"delete\" class=\"ui red labeled icon button\" style=\"margin-bottom: 1em;\">
                    <i class=\"trash icon\"></i>
                    ";
                // line 121
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["button_delete_label"] ?? null)), "html", null, true);
                echo "
                </a>
            ";
            }
            // line 124
            echo "        </div>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Form:theme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  673 => 124,  667 => 121,  663 => 119,  661 => 118,  657 => 117,  652 => 116,  649 => 115,  634 => 114,  627 => 229,  623 => 228,  617 => 225,  613 => 224,  607 => 221,  602 => 218,  599 => 217,  594 => 214,  592 => 213,  583 => 210,  580 => 209,  578 => 208,  574 => 206,  570 => 205,  566 => 204,  562 => 203,  558 => 202,  554 => 201,  548 => 200,  545 => 199,  543 => 198,  533 => 197,  530 => 196,  526 => 193,  520 => 191,  516 => 189,  510 => 186,  507 => 185,  503 => 184,  497 => 182,  494 => 181,  488 => 177,  474 => 176,  469 => 173,  467 => 172,  462 => 171,  445 => 170,  440 => 168,  437 => 167,  434 => 166,  429 => 163,  420 => 161,  416 => 160,  413 => 159,  410 => 158,  403 => 154,  400 => 153,  397 => 152,  390 => 148,  387 => 147,  384 => 146,  376 => 141,  372 => 139,  369 => 138,  361 => 133,  357 => 132,  353 => 131,  349 => 129,  346 => 128,  340 => 110,  334 => 107,  330 => 105,  328 => 104,  324 => 102,  307 => 100,  290 => 99,  286 => 97,  283 => 96,  272 => 94,  267 => 93,  265 => 92,  260 => 90,  257 => 89,  252 => 87,  250 => 86,  245 => 85,  243 => 84,  240 => 83,  237 => 82,  234 => 81,  232 => 80,  229 => 79,  224 => 75,  222 => 74,  220 => 73,  217 => 72,  212 => 68,  204 => 65,  202 => 64,  200 => 63,  197 => 61,  193 => 60,  188 => 58,  185 => 57,  181 => 54,  179 => 53,  177 => 52,  175 => 51,  173 => 50,  163 => 49,  160 => 48,  156 => 45,  154 => 44,  151 => 43,  148 => 42,  145 => 41,  140 => 37,  138 => 36,  136 => 35,  134 => 34,  127 => 32,  124 => 31,  119 => 27,  117 => 26,  115 => 25,  113 => 24,  106 => 22,  103 => 21,  92 => 15,  81 => 14,  77 => 13,  75 => 12,  72 => 11,  68 => 8,  66 => 7,  64 => 6,  62 => 5,  52 => 4,  49 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SyliusUiBundle:Form:theme.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Form/theme.html.twig");
    }
}
