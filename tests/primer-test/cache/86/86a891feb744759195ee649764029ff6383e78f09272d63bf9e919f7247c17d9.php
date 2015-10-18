<?php

/* components/test-group/include-interpolated-inline-data-child */
class __TwigTemplate_1f95ce2d097e01c2e209dff65f24ec666df7ac033cce92bfbb83884676f341ee extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["param1"]) ? $context["param1"] : null), "title", array()), "html", null, true);
    }

    public function getTemplateName()
    {
        return "components/test-group/include-interpolated-inline-data-child";
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
/* {{ param1.title }}*/
