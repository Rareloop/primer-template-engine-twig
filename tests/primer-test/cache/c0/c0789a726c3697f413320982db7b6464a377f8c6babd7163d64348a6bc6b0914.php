<?php

/* /patterns/components/test-group/include-non-primer-partial/template.twig */
class __TwigTemplate_8ae4e57e7fb648ea87508f635bba7072a511e01156bd4539713c65256abd1dc8 extends Twig_Template
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
        $this->loadTemplate("components/test-group/include-non-primer-partial/child.twig", "/patterns/components/test-group/include-non-primer-partial/template.twig", 1)->display($context);
    }

    public function getTemplateName()
    {
        return "/patterns/components/test-group/include-non-primer-partial/template.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {% include 'components/test-group/include-non-primer-partial/child.twig' %}*/
