<?php

/* /views/template.twig */
class __TwigTemplate_1519b198c33197a6ff253b5b4663e115e768cb6b28d1fb606c85253c7ed087a0 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["primer"]) ? $context["primer"] : null), "items", array()), "html", null, true);
    }

    public function getTemplateName()
    {
        return "/views/template.twig";
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
/* {{ primer.items }}*/
