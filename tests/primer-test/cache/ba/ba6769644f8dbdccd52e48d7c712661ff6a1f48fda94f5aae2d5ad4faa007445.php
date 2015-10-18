<?php

/* /patterns/components/test-group/include-basic/template.twig */
class __TwigTemplate_8694e1608d207ae4b3293cf8d98ee32ccf1ca62d502b8513807651f96942f921 extends Twig_Template
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
        $this->loadTemplate("components/test-group/basic-pattern", "/patterns/components/test-group/include-basic/template.twig", 1)->display($context);
    }

    public function getTemplateName()
    {
        return "/patterns/components/test-group/include-basic/template.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {% include 'components/test-group/basic-pattern' %}*/
