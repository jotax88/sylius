<?php

/* @SyliusUi/_flashes.html.twig */
class __TwigTemplate_6c2538a7526e13cd6c7fbe89748afb171ee5800245874e36c29e08309b0e2b85 extends Twig_Template
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
        if (( !(null === twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", array())) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", array()), "started", array()))) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(array(0 => "success", 1 => "error", 2 => "info", 3 => "warning"));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 3
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => $context["type"]), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                    // line 4
                    echo "            ";
                    if (("error" == $context["type"])) {
                        // line 5
                        echo "                ";
                        $context["result"] = "negative";
                        // line 6
                        echo "                ";
                        $context["icon"] = "remove";
                        // line 7
                        echo "            ";
                    }
                    // line 8
                    echo "            ";
                    if (("info" == $context["type"])) {
                        // line 9
                        echo "                ";
                        $context["result"] = "info";
                        // line 10
                        echo "                ";
                        $context["icon"] = "info";
                        // line 11
                        echo "            ";
                    }
                    // line 12
                    echo "            <div class=\"ui icon ";
                    echo twig_escape_filter($this->env, (((isset($context["result"]) || array_key_exists("result", $context))) ? (_twig_default_filter(($context["result"] ?? null), "positive")) : ("positive")), "html", null, true);
                    echo " message sylius-flash-message\">
                <i class=\"close icon\"></i>
                <i class=\"";
                    // line 14
                    echo twig_escape_filter($this->env, (((isset($context["icon"]) || array_key_exists("icon", $context))) ? (_twig_default_filter(($context["icon"] ?? null), "checkmark")) : ("checkmark")), "html", null, true);
                    echo " icon\"></i>
                <div class=\"content\">
                    <div class=\"header\">
                        ";
                    // line 17
                    $context["header"] = ("sylius.ui." . $context["type"]);
                    // line 18
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["header"] ?? null)), "html", null, true);
                    echo "
                    </div>
                    <p>
                    ";
                    // line 21
                    if (twig_test_iterable($context["flash"])) {
                        // line 22
                        echo "                        ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["flash"], "message", array()), twig_get_attribute($this->env, $this->source, $context["flash"], "parameters", array()), "flashes"), "html", null, true);
                        echo "
                    ";
                    } else {
                        // line 24
                        echo "                        ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["flash"], array(), "flashes"), "html", null, true);
                        echo "
                    ";
                    }
                    // line 26
                    echo "                    </p>
                </div>
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "@SyliusUi/_flashes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 30,  94 => 26,  88 => 24,  82 => 22,  80 => 21,  73 => 18,  71 => 17,  65 => 14,  59 => 12,  56 => 11,  53 => 10,  50 => 9,  47 => 8,  44 => 7,  41 => 6,  38 => 5,  35 => 4,  30 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusUi/_flashes.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/_flashes.html.twig");
    }
}
