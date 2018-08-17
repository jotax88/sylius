<?php

/* TwigBundle:Exception:error500.html.twig */
class __TwigTemplate_ba9babf3b6b777f02e73d7d14d5766d8633c4a068f904e4de33cbdaf059dac46 extends Twig_Template
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
        $this->loadTemplate("@SyliusShop/error500.html.twig", "TwigBundle:Exception:error500.html.twig", 1)->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error500.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "TwigBundle:Exception:error500.html.twig", "C:\\xampp\\htdocs\\Proyectos Git\\silyus\\acme\\app/Resources/TwigBundle/views/Exception/error500.html.twig");
    }
}
