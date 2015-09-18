<?php

/* /patterns/components/test-group/include-inline-data/template.twig */
class __TwigTemplate_6d609d1a5c49c70a04f36913cb8039a98d0e340245818d9c5792c062ee27140c extends Twig_Template
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
        echo $subTemplate->render(new Rareloop\Primer\Templating\ViewData(array_merge(Rareloop\Primer\FileSystem::getDataForPattern("components/test-group/data-autoload", true), $context, ($customContext = json_decode(json_encode(array("title" => "Inlined data")), true)) ? $customContext : array())));
    }

    public function getTemplateName()
    {
        return "/patterns/components/test-group/include-inline-data/template.twig";
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
/* {% inc 'components/test-group/data-autoload' with { 'title': 'Inlined data' } %}*/
