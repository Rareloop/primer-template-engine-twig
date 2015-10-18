<?php

/* components/test-group/include-with-inline-context-child */
class __TwigTemplate_2dfcf39cb3b7d64c7d5c9a539c56fa7bb590dd8266400949724a5a1caedc1602 extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
    }

    public function getTemplateName()
    {
        return "components/test-group/include-with-inline-context-child";
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
/* {{ title }}*/
