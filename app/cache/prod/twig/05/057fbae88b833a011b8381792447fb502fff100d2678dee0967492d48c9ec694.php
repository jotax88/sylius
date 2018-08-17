<?php

/* @SyliusAdmin/_search.html.twig */
class __TwigTemplate_00871b0079c067b7e118af9bf0a7d2b80535d95ce87b2a17bd8935dbabbb1e35 extends Twig_Template
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
        echo "<div class=\"item\">
    <form method=\"get\" action=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_product_index");
        echo "\">
        <div class=\"ui inverted transparent icon input\">
            <input type=\"text\" name=\"criteria[search][value]\" placeholder=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.search_products"), "html", null, true);
        echo "...\">
            <i class=\"search link icon\"></i>
        </div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/_search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusAdmin/_search.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/_search.html.twig");
    }
}
