<?php

/* TwigBundle:Exception:error404.html.twig */
class __TwigTemplate_a9461c2e4aff9ed98bc77686f0b378805003f1a37104bc7401cafd1ae2c07458 extends Twig_Template
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
        $this->loadTemplate("@SyliusShop/error404.html.twig", "TwigBundle:Exception:error404.html.twig", 1)->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error404.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "TwigBundle:Exception:error404.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\app/Resources/TwigBundle/views/Exception/error404.html.twig");
    }
}
