<?php

/* /patterns/components/test-group/include-override-data/template.twig */
class __TwigTemplate_c96471e4dacb581bb7c9c91bfbc17c3d8887d547dda61a99f296d77cab59746b extends Twig_Template
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
        $patternId = "components/test-group/data-autoload";
        if (strpos($patternId, "~") !== false) {
            $parts = explode("~", $patternId);
            if (count($parts) > 1) {
                $patternId = $parts[0];
            }
        }
        $subTemplate = new Rareloop\Primer\TemplateEngine\Twig\Template("patterns/" . $patternId, "template");
        echo $subTemplate->render(new Rareloop\Primer\Templating\ViewData(array_merge(Rareloop\Primer\FileSystem::getDataForPattern("components/test-group/data-autoload", true), $context)));
    }

    public function getTemplateName()
    {
        return "/patterns/components/test-group/include-override-data/template.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {% inc 'components/test-group/data-autoload' %}*/
