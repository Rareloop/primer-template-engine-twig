<?php

/* /patterns/components/test-group/include-aliased/template.twig */
class __TwigTemplate_0fa3253cd73053bc733487ec8547e170f71997e88f91c587631b13625c7ababc extends Twig_Template
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
        $patternId = "components/test-group/basic-pattern~alias";
        if (strpos($patternId, "~") !== false) {
            $parts = explode("~", $patternId);
            if (count($parts) > 1) {
                $patternId = $parts[0];
            }
        }
        $subTemplate = new Rareloop\Primer\TemplateEngine\Twig\Template("patterns/" . $patternId, "template");
        echo $subTemplate->render(new Rareloop\Primer\Templating\ViewData(array_merge(Rareloop\Primer\FileSystem::getDataForPattern("components/test-group/basic-pattern~alias", true), $context)));
    }

    public function getTemplateName()
    {
        return "/patterns/components/test-group/include-aliased/template.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {% inc 'components/test-group/basic-pattern~alias' %}*/
