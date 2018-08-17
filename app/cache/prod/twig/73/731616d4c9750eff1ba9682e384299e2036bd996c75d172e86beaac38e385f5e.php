<?php

/* @SyliusShop/Product/Show/Tabs/_details.html.twig */
class __TwigTemplate_86a5a595a2fabf56971b55f01889cf98eeac0767f380b99a77d6ccab0e869cc7 extends Twig_Template
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
        echo "<div class=\"ui bottom attached tab segment active\" data-tab=\"details\">
    ";
        // line 2
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.tab_details", array("product" => ($context["product"] ?? null))));
        echo "

    ";
        // line 4
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "description", array()))) {
            // line 5
            echo "        ";
            echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "description", array()), "html", null, true));
            echo "
    ";
        } else {
            // line 7
            echo "        ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.no_description"), "html", null, true);
            echo ".
    ";
        }
        // line 9
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/Tabs/_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  39 => 7,  33 => 5,  31 => 4,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusShop/Product/Show/Tabs/_details.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Product/Show/Tabs/_details.html.twig");
    }
}
