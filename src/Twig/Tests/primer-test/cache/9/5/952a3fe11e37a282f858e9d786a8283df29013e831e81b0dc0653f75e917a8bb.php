<?php

/* /patterns/components/test-group/data-autoload/template.twig */
class __TwigTemplate_60b60fb7df897da2500fe9598a35f4f19ccea21fbfaf54747537d7d8b7c1c189 extends Twig_Template
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
        return "/patterns/components/test-group/data-autoload/template.twig";
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
