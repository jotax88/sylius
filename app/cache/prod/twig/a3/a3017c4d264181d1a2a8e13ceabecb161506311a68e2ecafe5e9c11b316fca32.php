<?php

/* SyliusAdminBundle:Customer:_form.html.twig */
class __TwigTemplate_88843083a9a2da267a981803cf394e02670469e943542917fc4ea5e9178c33b8 extends Twig_Template
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
        echo "<div class=\"ui two column stackable grid\">
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
    <div class=\"column\">
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.customer_details"), "html", null, true);
        echo "</h4>
            <div class=\"two fields\">
                ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "firstName", array()), 'row');
        echo "
                ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "lastName", array()), 'row');
        echo "
            </div>
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", array()), 'row');
        echo "
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "group", array()), 'row');
        echo "
        </div>
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.extra_information"), "html", null, true);
        echo "</h4>
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "gender", array()), 'row');
        echo "
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "birthday", array()), 'row');
        echo "
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phoneNumber", array()), 'row');
        echo "
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "subscribedToNewsletter", array()), 'row');
        echo "
        </div>
    </div>
    <div class=\"column\">
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.account_credentials"), "html", null, true);
        echo "</h4>
            ";
        // line 24
        if ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "user", array())) || (null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "user", array()), "id", array())))) {
            // line 25
            echo "                <div class=\"field\">
                    <div class=\"ui toggle checkbox\">
                       ";
            // line 27
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "createUser", array()), 'row');
            echo "
                    </div>
                </div>
            ";
        }
        // line 31
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "user", array(), "any", true, true)) {
            // line 32
            echo "                <div id=\"user-form\" ";
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "user", array(), "any", false, true), "vars", array(), "any", false, true), "data", array(), "any", false, true), "id", array(), "any", true, true)) {
                echo " style=\"display: none\" ";
            }
            echo ">
                    ";
            // line 33
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "user", array()), "plainPassword", array()), 'row');
            echo "
                    ";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "user", array()), "enabled", array()), 'row');
            echo "
                </div>
            ";
        }
        // line 37
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Customer:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 37,  111 => 34,  107 => 33,  100 => 32,  97 => 31,  90 => 27,  86 => 25,  84 => 24,  80 => 23,  72 => 18,  68 => 17,  64 => 16,  60 => 15,  56 => 14,  50 => 11,  46 => 10,  41 => 8,  37 => 7,  32 => 5,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SyliusAdminBundle:Customer:_form.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Customer/_form.html.twig");
    }
}
