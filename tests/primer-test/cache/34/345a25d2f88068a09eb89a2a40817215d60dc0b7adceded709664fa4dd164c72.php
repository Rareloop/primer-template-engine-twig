<?php

/* components/test-group/data-autoload */
class __TwigTemplate_dca6dd1a1c40d470a998b134c65c506036342f971d63ad95c46dc2f373db2968 extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["one"]) ? $context["one"] : null), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, (isset($context["two"]) ? $context["two"] : null), "html", null, true);
    }

    public function getTemplateName()
    {
        return "components/test-group/data-autoload";
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
/* {{ one }}.{{ two }}*/
