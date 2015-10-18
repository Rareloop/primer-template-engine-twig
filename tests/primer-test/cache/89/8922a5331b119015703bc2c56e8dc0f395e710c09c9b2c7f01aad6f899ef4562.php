<?php

/* /patterns/components/test-group/include-inline-data/template.twig */
class __TwigTemplate_21cb85251b05b2e12b6ad96adb5c16ae9e6a7619b18b31b313a4310fa9ed0e88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->loadTemplate("components/test-group/data-autoload", "/patterns/components/test-group/include-inline-data/template.twig", 1)->display(array_merge($context, array("one" => "Inlined data")));
    }

    public function getTemplateName()
    {
        return "/patterns/components/test-group/include-inline-data/template.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {% include 'components/test-group/data-autoload' with {'one': 'Inlined data'} %}*/
