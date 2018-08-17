<?php

/* @SyliusShop/Product/Index/_sorting.html.twig */
class __TwigTemplate_092ce0ea1e5bed6bf80bb464fd6af28e4d2b9b1a6e7b986cfb7f93ec3f77d972 extends Twig_Template
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["resources"] ?? null), "data", array()), "nbResults", array()) > 0)) {
            // line 2
            echo "
";
            // line 3
            $context["definition"] = twig_get_attribute($this->env, $this->source, ($context["resources"] ?? null), "definition", array());
            // line 4
            echo "
";
            // line 5
            $context["route"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method");
            // line 6
            $context["route_parameters"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method");
            // line 7
            echo "
";
            // line 8
            $context["criteria"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "criteria", 1 => array()), "method");
            // line 9
            echo "
";
            // line 10
            $context["default_path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["route_parameters"] ?? null), array("criteria" => ($context["criteria"] ?? null))));
            // line 11
            $context["from_a_to_z_path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["route_parameters"] ?? null), array("sorting" => array("name" => "asc"), "criteria" => ($context["criteria"] ?? null))));
            // line 12
            $context["from_z_to_a_path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["route_parameters"] ?? null), array("sorting" => array("name" => "desc"), "criteria" => ($context["criteria"] ?? null))));
            // line 13
            $context["oldest_first_path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["route_parameters"] ?? null), array("sorting" => array("createdAt" => "asc"), "criteria" => ($context["criteria"] ?? null))));
            // line 14
            $context["newest_first_path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["route_parameters"] ?? null), array("sorting" => array("createdAt" => "desc"), "criteria" => ($context["criteria"] ?? null))));
            // line 15
            $context["cheapest_first_path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["route_parameters"] ?? null), array("sorting" => array("price" => "asc"), "criteria" => ($context["criteria"] ?? null))));
            // line 16
            $context["most_expensive_first_path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["route_parameters"] ?? null), array("sorting" => array("price" => "desc"), "criteria" => ($context["criteria"] ?? null))));
            // line 17
            echo "
";
            // line 18
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "sorting"), "method"))) {
                // line 19
                echo "    ";
                $context["current_sorting_label"] = twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.by_position"));
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 20
($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "sorting"), "method", false, true), "name", array(), "any", true, true) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "sorting"), "method"), "name", array()) == "asc"))) {
                // line 21
                echo "    ";
                $context["current_sorting_label"] = twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.from_a_to_z"));
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 22
($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "sorting"), "method", false, true), "name", array(), "any", true, true) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "sorting"), "method"), "name", array()) == "desc"))) {
                // line 23
                echo "    ";
                $context["current_sorting_label"] = twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.from_z_to_a"));
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 24
($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "sorting"), "method", false, true), "createdAt", array(), "any", true, true) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "sorting"), "method"), "createdAt", array()) == "desc"))) {
                // line 25
                echo "    ";
                $context["current_sorting_label"] = twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.newest_first"));
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 26
($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "sorting"), "method", false, true), "createdAt", array(), "any", true, true) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "sorting"), "method"), "createdAt", array()) == "asc"))) {
                // line 27
                echo "    ";
                $context["current_sorting_label"] = twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.oldest_first"));
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 28
($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "sorting"), "method", false, true), "price", array(), "any", true, true) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "sorting"), "method"), "price", array()) == "asc"))) {
                // line 29
                echo "    ";
                $context["current_sorting_label"] = twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.cheapest_first"));
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 30
($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "sorting"), "method", false, true), "price", array(), "any", true, true) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "sorting"), "method"), "price", array()) == "desc"))) {
                // line 31
                echo "    ";
                $context["current_sorting_label"] = twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.most_expensive_first"));
            }
            // line 33
            echo "
<div class=\"ui right floated small header\">
    <div class=\"content\">
        ";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.sort"), "html", null, true);
            echo "
        <div class=\"ui inline dropdown\">
            <div class=\"text\">";
            // line 38
            echo twig_escape_filter($this->env, ($context["current_sorting_label"] ?? null), "html", null, true);
            echo "</div>
            <i class=\"dropdown icon\"></i>
            <div class=\"menu\">
                <a class=\"item\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, ($context["default_path"] ?? null), "html", null, true);
            echo "\" data-text=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.by_position")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.by_position"), "html", null, true);
            echo "</a>
                <a class=\"item\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, ($context["from_a_to_z_path"] ?? null), "html", null, true);
            echo "\" data-text=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.from_a_to_z")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.from_a_to_z"), "html", null, true);
            echo "</a>
                <a class=\"item\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, ($context["from_z_to_a_path"] ?? null), "html", null, true);
            echo "\" data-text=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.from_z_to_a")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.from_z_to_a"), "html", null, true);
            echo "</a>
                <a class=\"item\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, ($context["newest_first_path"] ?? null), "html", null, true);
            echo "\" data-text=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.newest_first")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.newest_first"), "html", null, true);
            echo "</a>
                <a class=\"item\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, ($context["oldest_first_path"] ?? null), "html", null, true);
            echo "\" data-text=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.oldest_first")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.oldest_first"), "html", null, true);
            echo "</a>
                <a class=\"item\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, ($context["cheapest_first_path"] ?? null), "html", null, true);
            echo "\" data-text=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.cheapest_first")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.cheapest_first"), "html", null, true);
            echo "</a>
                <a class=\"item\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, ($context["most_expensive_first_path"] ?? null), "html", null, true);
            echo "\" data-text=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.most_expensive_first")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.most_expensive_first"), "html", null, true);
            echo "</a>
            </div>
        </div>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Index/_sorting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 47,  154 => 46,  146 => 45,  138 => 44,  130 => 43,  122 => 42,  114 => 41,  108 => 38,  103 => 36,  98 => 33,  94 => 31,  92 => 30,  89 => 29,  87 => 28,  84 => 27,  82 => 26,  79 => 25,  77 => 24,  74 => 23,  72 => 22,  69 => 21,  67 => 20,  64 => 19,  62 => 18,  59 => 17,  57 => 16,  55 => 15,  53 => 14,  51 => 13,  49 => 12,  47 => 11,  45 => 10,  42 => 9,  40 => 8,  37 => 7,  35 => 6,  33 => 5,  30 => 4,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SyliusShop/Product/Index/_sorting.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Product/Index/_sorting.html.twig");
    }
}
