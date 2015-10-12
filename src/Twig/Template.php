<?php namespace Rareloop\Primer\TemplateEngine\Twig;

use Rareloop\Primer\Templating\Template as PrimerTemplate;
use Rareloop\Primer\TemplateEngine\Twig\Twig;
use Rareloop\Primer\Primer;
use Rareloop\Primer\Templating\ViewData;

class Template extends PrimerTemplate
{
    /**
     * Array of file extensions
     *
     * @var array
     */
    public static $extension = 'twig';

    /**
     * Render this template with the provided data
     *
     * @param  ViewData $data [description]
     * @return [type]       [description]
     */
    public function render($data = null)
    {
        // Ensure that $data is not null
        if (!isset($data)) {
            $data = new ViewData(array());
        }

        // Access the singleton Twig engine
        $engine = Twig::instance();

        // Render the template
        return $engine->render($this->templatePath(), $data->toArray());
    }

    /**
     * Get the raw template data
     *
     * @return String The template before compilation
     */
    public function raw()
    {
        // Access the singleton Twig engine
        $engine = Twig::instance();

        return $engine->getLoader()->getSource($this->templatePath());
    }

    /**
     * Returns the path to the requested template file
     *
     * @return String Filepath
     */
    protected function templatePath()
    {
        if (isset($this->filename)) {
            // The Twig loader is setup to load from the Primer base path so we need to remove this
            // from the template path so that we have it relative to the base
            $path = str_replace(Primer::$BASE_PATH, '', $this->directory);

            // Render the template
            return $path . '/'. $this->filename . '.' . self::$extension;
        } else {
            throw new \Exception('Attempting to get template path before loading a template');
        }
    }
}
