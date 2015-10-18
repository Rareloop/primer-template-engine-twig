<?php

/* /patterns/components/test-group/include-with-inline-context/template.twig */
class __TwigTemplate_2f17f6aafdaf128c86a9695ee2645f15ad4fc20dc72965aee0ae04957b69cb71 extends Twig_Template
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
        $this->loadTemplate("components/test-group/include-with-inline-context-child", "/patterns/components/test-group/include-with-inline-context/template.twig", 1)->display(array_merge($context, (isset($context["contextFromData"]) ? $context["contextFromData"] : null)));
    }

    public function getTemplateName()
    {
        return "/patterns/components/test-group/include-with-inline-context/template.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {% include 'components/test-group/include-with-inline-context-child' with contextFromData %}*/
