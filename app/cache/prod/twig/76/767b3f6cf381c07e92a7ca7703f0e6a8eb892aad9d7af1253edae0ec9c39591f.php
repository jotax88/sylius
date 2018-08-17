<?php

/* @SyliusUi/Grid/Action/links.html.twig */
class __TwigTemplate_67aeee16e00c68af821f00c117945eb06e097bed2b0afe6cbe78161de1e3bed0 extends Twig_Template
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
        $context["visible"] = ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "visible", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "visible", array())) : (true));
        // line 2
        echo "
";
        // line 3
        if (($context["visible"] ?? null)) {
            // line 4
            echo "    <div class=\"ui";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "icon", array(), "any", true, true)) {
                echo " labeled icon";
            }
            echo " floating dropdown ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "class", array()), "")) : ("")), "html", null, true);
            echo " link button\">
        ";
            // line 5
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "icon", array(), "any", true, true)) {
                echo "<i class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "icon", array()), "html", null, true);
                echo " icon\"></i>";
            }
            // line 6
            echo "        <span class=\"text\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "label", array())), "html", null, true);
            echo "</span>
        <div class=\"menu\">
            ";
            // line 8
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "header", array(), "any", true, true)) {
                // line 9
                echo "            <div class=\"header\">
                ";
                // line 10
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "header", array(), "any", false, true), "icon", array(), "any", true, true)) {
                    echo "<i class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "header", array()), "icon", array()), "html", null, true);
                    echo " icon\"></i>";
                }
                // line 11
                echo "                ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "header", array()), "label", array())), "html", null, true);
                echo "
            </div>
            <div class=\"divider\"></div>
            ";
            }
            // line 15
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "links", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 16
                echo "                ";
                $context["is_link_visible"] = ((twig_get_attribute($this->env, $this->source, $context["link"], "visible", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, $context["link"], "visible", array())) : (true));
                // line 17
                echo "
                ";
                // line 18
                if (($context["is_link_visible"] ?? null)) {
                    // line 19
                    echo "                    ";
                    $this->loadTemplate("@SyliusUi/Grid/Action/_link.html.twig", "@SyliusUi/Grid/Action/links.html.twig", 19)->display($context);
                    // line 20
                    echo "                ";
                }
                // line 21
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@SyliusUi/Grid/Action/links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 22,  102 => 21,  99 => 20,  96 => 19,  94 => 18,  91 => 17,  88 => 16,  70 => 15,  62 => 11,  56 => 10,  53 => 9,  51 => 8,  45 => 6,  39 => 5,  30 => 4,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusUi/Grid/Action/links.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Grid/Action/links.html.twig");
    }
}
