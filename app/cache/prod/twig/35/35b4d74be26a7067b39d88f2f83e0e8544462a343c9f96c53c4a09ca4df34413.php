<?php

/* @SyliusAdmin/_channelLinks.html.twig */
class __TwigTemplate_97014d77b01979cc7eca0c8e2d20ecf66531d94b5d560cac613158ea22b685ee extends Twig_Template
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
        if ((twig_length_filter($this->env, ($context["channels"] ?? null)) > 1)) {
            // line 2
            echo "    <div class=\"ui simple dropdown item\">
        <span>
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.view_your_store"), "html", null, true);
            echo "
        </span>
        <i class=\"dropdown icon\"></i>
        <div class=\"menu\">
            ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["channels"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["channel"], "hostname", array()))) {
                    // line 9
                    echo "            <a href=\"http://";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "hostname", array()), "html", null, true);
                    echo "\" target=\"_blank\" class=\"item\">
                ";
                    // line 10
                    $this->loadTemplate("@SyliusAdmin/Common/_channel.html.twig", "@SyliusAdmin/_channelLinks.html.twig", 10)->display($context);
                    // line 11
                    echo "            </a>
            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "        </div>
    </div>
";
        } elseif ((twig_length_filter($this->env,         // line 15
($context["channels"] ?? null)) == 1)) {
            // line 16
            echo "    ";
            $context["channel"] = twig_first($this->env, ($context["channels"] ?? null));
            // line 17
            echo "
    ";
            // line 18
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["channel"] ?? null), "hostname", array()))) {
                // line 19
                echo "    <a href=\"http://";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["channel"] ?? null), "hostname", array()), "html", null, true);
                echo "\" target=\"_blank\" class=\"item\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.view_your_store"), "html", null, true);
                echo "</a>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/_channelLinks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 19,  77 => 18,  74 => 17,  71 => 16,  69 => 15,  65 => 13,  54 => 11,  52 => 10,  47 => 9,  36 => 8,  29 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusAdmin/_channelLinks.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/_channelLinks.html.twig");
    }
}
