<?php namespace Rareloop\Primer\TemplateEngine\Twig;

// Move into its own file once it works
class IncNode extends \Twig_Node_Include
{
    /**
     * Compiles the node to PHP.
     *
     * @param Twig_Compiler $compiler A Twig_Compiler instance
     */
    public function compile(\Twig_Compiler $compiler)
    {
        $compiler->addDebugInfo($this);
        if ($this->getAttribute('ignore_missing')) {
            $compiler
                ->write("try {\n")
                ->indent()
            ;
        }
        $this->addGetTemplate($compiler);
        $compiler->write('echo $subTemplate->render(');
        $this->addTemplateArguments($compiler);
        $compiler->raw(");\n");
        if ($this->getAttribute('ignore_missing')) {
            $compiler
                ->outdent()
                ->write("} catch (Twig_Error_Loader \$e) {\n")
                ->indent()
                ->write("// ignore missing template\n")
                ->outdent()
                ->write("}\n\n")
            ;
        }
    }

    protected function addGetTemplate(\Twig_Compiler $compiler)
    {
        $compiler
            // Create a variable with the template string
            ->write('$patternId = ')
            ->subcompile($this->getNode('expr'))
            ->raw(";\n")

            // Check to see if we should be loading the template from a parent
            // template (e.g. we have a ~ in the name)
            ->write('if (strpos($patternId, "~") !== false) {' . "\n")
            ->indent()
            ->write('$parts = explode("~", $patternId);' . "\n")
            ->write('if (count($parts) > 1) {' . "\n")
            ->indent()
            ->write('$patternId = $parts[0];' . "\n")
            ->outdent()
            ->write("}\n")
            ->outdent()
            ->write("}\n")

            // Load the correct template
            ->write('$subTemplate = new Rareloop\Primer\TemplateEngine\Twig\Template("patterns/" . $patternId, "template");')
            ->raw("\n")
         ;
    }

    protected function addTemplateArguments(\Twig_Compiler $compiler)
    {
        $compiler
            ->raw('new Rareloop\Primer\Templating\ViewData(array_merge(')
            ->raw('Rareloop\Primer\FileSystem::getDataForPattern(')
            ->subcompile($this->getNode('expr'))
            ->raw(', true)')
            ->raw(', ')
            ->raw('$context')
        ;

        if (null !== $this->getNode('variables')) {
            $compiler
                ->raw(', ($customContext = json_decode(json_encode(')
                ->subcompile($this->getNode('variables'))
                ->raw('), true)) ? $customContext : array()')
            ;
        }

        $compiler->raw('))');
    }
}
