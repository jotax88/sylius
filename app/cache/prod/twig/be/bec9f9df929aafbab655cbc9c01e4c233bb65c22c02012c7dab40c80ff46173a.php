<?php

/* @SyliusAdmin/Crud/Index/_actions.html.twig */
class __TwigTemplate_c5a4d96c886381690944f78176ad8ab741b271e56b2b069d899cdba83361b399 extends Twig_Template
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
        echo "<div class=\"middle aligned column\">
    <div class=\"ui right floated buttons\">
        ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "actionGroups", array(), "any", false, true), "main", array(), "any", true, true)) {
            // line 4
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "getEnabledActions", array(0 => "main"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 5
                echo "                ";
                echo call_user_func_array($this->env->getFunction('sylius_grid_render_action')->getCallable(), array(($context["resources"] ?? null), $context["action"], null));
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "        ";
        }
        // line 8
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Crud/Index/_actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  43 => 7,  34 => 5,  29 => 4,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusAdmin/Crud/Index/_actions.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Crud/Index/_actions.html.twig");
    }
}
