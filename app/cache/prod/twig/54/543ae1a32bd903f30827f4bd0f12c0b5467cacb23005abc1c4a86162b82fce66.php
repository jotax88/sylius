<?php

/* @SyliusShop/_footer.html.twig */
class __TwigTemplate_0d9c385c74212bb776e3596bc02285982e57ec8c8d911376e3300d681501842d extends Twig_Template
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
        echo "<footer id=\"footer\" class=\"ui inverted vertical footer segment\">
    <div class=\"ui container\">
        <div class=\"ui inverted divided equal height stackable grid\">
            ";
        // line 4
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.before_footer"));
        echo "

            <div class=\"three wide column\">
                <h4 class=\"ui inverted header\">";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.your_store"), "html", null, true);
        echo "</h4>
                <div class=\"ui inverted link list\">
                    <a href=\"#\" class=\"item\">";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.about"), "html", null, true);
        echo "</a>
                    <a href=\"#\" class=\"item\">";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.terms_and_conditions"), "html", null, true);
        echo "</a>
                    <a href=\"#\" class=\"item\">";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.privacy_policy"), "html", null, true);
        echo "</a>
                    <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_contact_request");
        echo "\" class=\"item\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.contact_us"), "html", null, true);
        echo "</a>
                </div>
            </div>
            <div class=\"three wide column\">
                <h4 class=\"ui inverted header\">";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.customer_care"), "html", null, true);
        echo "</h4>
                <div class=\"ui inverted link list\">
                    <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_contact_request");
        echo "\" class=\"item\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.contact_us"), "html", null, true);
        echo "</a>
                    <a href=\"#\" class=\"item\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.faqs"), "html", null, true);
        echo "</a>
                    <a href=\"#\" class=\"item\">";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.delivery_and_shipping"), "html", null, true);
        echo "</a>
                    <a href=\"#\" class=\"item\">";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.returns_policy"), "html", null, true);
        echo "</a>
                </div>
            </div>
            <div class=\"eight wide column\">
                <h4 class=\"ui inverted header\">&copy; ";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.your_store"), "html", null, true);
        echo "</h4>
                <p>";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.powered_by"), "html", null, true);
        echo " <a href=\"http://sylius.com\" target=\"_blank\" style=\"color: #1abb9c;\">Sylius</a>.</p>
            </div>

            ";
        // line 29
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.after_footer"));
        echo "
        </div>
    </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 29,  90 => 26,  86 => 25,  79 => 21,  75 => 20,  71 => 19,  65 => 18,  60 => 16,  51 => 12,  47 => 11,  43 => 10,  39 => 9,  34 => 7,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusShop/_footer.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/_footer.html.twig");
    }
}
