<?php

/* @SyliusUi/Security/_login.html.twig */
class __TwigTemplate_ee16d4dbce38cfac35bfce618445c2ffb76e749cace7a5103d33a0095f1202e7 extends Twig_Template
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
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), array(0 => "@SyliusUi/Form/theme.html.twig"), true);
        // line 2
        echo "
";
        // line 3
        $context["messages"] = $this->loadTemplate("@SyliusUi/Macro/messages.html.twig", "@SyliusUi/Security/_login.html.twig", 3);
        // line 4
        echo "
<div class=\"ui middle aligned center aligned grid\">
    <div class=\"column\">
        ";
        // line 7
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.login.before_form", array("form" => ($context["form"] ?? null))));
        echo "

        ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["paths"] ?? null), "logo", array(), "any", true, true)) {
            // line 10
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, ($context["paths"] ?? null), "logo", array())), "html", null, true);
            echo "\" class=\"ui fluid image\" id=\"logo\">
        ";
        }
        // line 12
        echo "
        ";
        // line 13
        if (($context["last_error"] ?? null)) {
            // line 14
            echo "            <div class=\"ui left aligned basic segment\">
                ";
            // line 15
            echo $context["messages"]->macro_error(twig_get_attribute($this->env, $this->source, ($context["last_error"] ?? null), "message", array()));
            echo "
            </div>
        ";
        }
        // line 18
        echo "
        ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("action" => (((isset($context["action"]) || array_key_exists("action", $context))) ? (_twig_default_filter(($context["action"] ?? null), "/")) : ("/")), "attr" => array("class" => "ui large loadable form", "novalidate" => "novalidate")));
        echo "
            <div class=\"ui left aligned segment\">
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_username", array()), 'row', array("value" => (((isset($context["last_username"]) || array_key_exists("last_username", $context))) ? (_twig_default_filter(($context["last_username"] ?? null), "")) : (""))));
        echo "
                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_password", array()), 'row');
        echo "
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_remember_me", array()), 'row');
        echo "
                <input type=\"hidden\" name=\"_csrf_admin_security_token\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("admin_authenticate"), "html", null, true);
        echo "\">
                <button type=\"submit\" class=\"ui fluid large primary submit button\">Login</button>
            </div>

            ";
        // line 28
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.login.form", array("form" => ($context["form"] ?? null))));
        echo "

        ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end', array("render_rest" => false));
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusUi/Security/_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 30,  89 => 28,  82 => 24,  78 => 23,  74 => 22,  70 => 21,  65 => 19,  62 => 18,  56 => 15,  53 => 14,  51 => 13,  48 => 12,  42 => 10,  40 => 9,  35 => 7,  30 => 4,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusUi/Security/_login.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Security/_login.html.twig");
    }
}
