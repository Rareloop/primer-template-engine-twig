<?php

/* /patterns/components/test-group/include-aliased-inline-data/template.twig */
class __TwigTemplate_b7788cf8d099e86eb433cc103373761828731d0aea4c8f5107b397214af176da extends Twig_Template
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
        $patternId = "components/test-group/data-autoload~alias";
        if (strpos($patternId, "~") !== false) {
            $parts = explode("~", $patternId);
            if (count($parts) > 1) {
                $patternId = $parts[0];
            }
        }
        $subTemplate = new Rareloop\Primer\TemplateEngine\Twig\Template("patterns/" . $patternId, "template");
        echo $subTemplate->render(new Rareloop\Primer\Templating\ViewData(array_merge(Rareloop\Primer\FileSystem::getDataForPattern("components/test-group/data-autoload~alias", true), $context, ($customContext = json_decode(json_encode(array("title" => "Inline data")), true)) ? $customContext : array())));
    }

    public function getTemplateName()
    {
        return "/patterns/components/test-group/include-aliased-inline-data/template.twig";
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
/* {% inc 'components/test-group/data-autoload~alias' with { 'title': 'Inline data' } %}*/
