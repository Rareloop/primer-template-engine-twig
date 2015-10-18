<?php

/* /patterns/components/test-group/include-interpolated-inline-data/template.twig */
class __TwigTemplate_a8f3e63b2cd4943b4d92c5dcb8536eb9f8ab23b6215f3b618c1c2c17a8b15eb0 extends Twig_Template
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
        $this->loadTemplate("components/test-group/include-interpolated-inline-data-child", "/patterns/components/test-group/include-interpolated-inline-data/template.twig", 1)->display(array_merge($context, array("param1" => (isset($context["childData"]) ? $context["childData"] : null))));
    }

    public function getTemplateName()
    {
        return "/patterns/components/test-group/include-interpolated-inline-data/template.twig";
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
/* {% include 'components/test-group/include-interpolated-inline-data-child' with {'param1': childData} %}*/
