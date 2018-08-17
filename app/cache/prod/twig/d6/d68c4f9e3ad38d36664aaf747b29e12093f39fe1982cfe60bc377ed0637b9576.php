<?php

/* @SyliusShop/login.html.twig */
class __TwigTemplate_735cd07f4b12506496d07555a090ce4d6d42ce80acbc36dccfec039fb4c406ee extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "@SyliusShop/login.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusShop/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), array(0 => "SyliusUiBundle:Form:theme.html.twig"), true);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->loadTemplate("@SyliusShop/Login/_header.html.twig", "@SyliusShop/login.html.twig", 6)->display($context);
        // line 7
        echo "
    ";
        // line 8
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.login.after_content_header"));
        echo "

    <div class=\"ui padded segment\">
        <div class=\"ui two column very relaxed stackable grid\">
            <div class=\"column\">
                ";
        // line 13
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.login.before_login"));
        echo "

                <h4 class=\"ui dividing header\">";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.registered_customers"), "html", null, true);
        echo "</h4>
                <p>";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.if_you_have_an_account_sign_in_with_your_email_address"), "html", null, true);
        echo ".</p>
                ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_login_check"), "attr" => array("class" => "ui loadable form", "novalidate" => "novalidate")));
        echo "
                    ";
        // line 18
        $this->loadTemplate("@SyliusShop/Login/_form.html.twig", "@SyliusShop/login.html.twig", 18)->display($context);
        // line 19
        echo "
                    ";
        // line 20
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.login.form", array("form" => ($context["form"] ?? null))));
        echo "

                    <button type=\"submit\" class=\"ui blue submit button\">";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.login"), "html", null, true);
        echo "</button>
                    <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_request_password_reset_token");
        echo "\" class=\"ui right floated button\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.forgot_password"), "html", null, true);
        echo "</a>
                    <input type=\"hidden\" name=\"_csrf_shop_security_token\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("shop_authenticate"), "html", null, true);
        echo "\">
                ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end', array("render_rest" => false));
        echo "

                ";
        // line 27
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.login.after_login"));
        echo "
            </div>
            <div class=\"ui hidden vertical divider\">
            </div>
            <div class=\"column\">
                ";
        // line 32
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.login.before_register"));
        echo "

                ";
        // line 34
        $this->loadTemplate("@SyliusShop/Login/_register.html.twig", "@SyliusShop/login.html.twig", 34)->display($context);
        // line 35
        echo "
                ";
        // line 36
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.login.after_register"));
        echo "
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 36,  113 => 35,  111 => 34,  106 => 32,  98 => 27,  93 => 25,  89 => 24,  83 => 23,  79 => 22,  74 => 20,  71 => 19,  69 => 18,  65 => 17,  61 => 16,  57 => 15,  52 => 13,  44 => 8,  41 => 7,  38 => 6,  35 => 5,  31 => 1,  29 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusShop/login.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/login.html.twig");
    }
}
