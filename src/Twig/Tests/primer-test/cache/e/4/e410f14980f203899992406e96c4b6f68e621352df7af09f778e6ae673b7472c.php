<?php

/* /patterns/components/test-group/include-inline-not-set/template.twig */
class __TwigTemplate_8816689c3d115090b26a9c225e40057bdd4fc94257429f53a576230083ccfad5 extends Twig_Template
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
        echo $subTemplate->render(new Rareloop\Primer\Templating\ViewData(array_merge(Rareloop\Primer\FileSystem::getDataForPattern("components/test-group/data-autoload", true), $context, ($customContext = json_decode(json_encode((isset($context["variable"]) ? $context["variable"] : null)), true)) ? $customContext : array())));
    }

    public function getTemplateName()
    {
        return "/patterns/components/test-group/include-inline-not-set/template.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {% inc 'components/test-group/data-autoload' with variable %}*/
/* */
