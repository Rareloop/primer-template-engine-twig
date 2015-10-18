<?php

/* /patterns/components/test-group/data-autoload/template.twig */
class __TwigTemplate_f6af48b30a4070e8eb67a22819b4d3037e2a1ae1134003506c833ee47785fe96 extends Twig_Template
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
/* {{ one }}.{{ two }}*/
