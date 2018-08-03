<?php namespace Rareloop\Primer\TemplateEngine\Twig;

use Rareloop\Primer\Events\Event;
use Rareloop\Primer\Primer;
use Rareloop\Primer\TemplateEngine\Twig\Loader;
use Rareloop\Primer\TemplateEngine\Twig\Twig;
use Rareloop\Primer\Templating\Template as PrimerTemplate;
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
     * The Twig_Environment singleton
     *
     * @var Twig_Environment
     */
    protected static $twig;

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

        // Render the template
        return $this->twigEnvironment()->render($this->templatePath(), $data->toArray());
    }

    /**
     * Get the singleton Twig Environment
     *
     * @return Twig_Environment
     */
    protected function twigEnvironment()
    {
        if (!isset(self::$twig)) {
            self::$twig = $this->buildTwigEnvironment();

            Event::fire('twig.init', self::$twig);
        }

        return self::$twig;
    }

    /**
     * Create a new Twig Environment with the correct settings
     *
     * @return Twig_Environment
     */
    protected function buildTwigEnvironment()
    {
        $primerLoader = new Loader();

        // Setup the loader to look from the base directory
        $fileSystemLoader = new \Twig_Loader_Filesystem([
            Primer::$PATTERN_PATH,
            Primer::$VIEW_PATH,
            Primer::$BASE_PATH
        ]);

        $loader = new \Twig_Loader_Chain([$fileSystemLoader, $primerLoader]);

        // Create the engine with the correct cache path and set it to
        // invalidate the cache when a template changes
        return new \Twig_Environment($loader, array(
            'cache' => Primer::$CACHE_PATH,
            'auto_reload' => true,
        ));
    }

    /**
     * Get the raw template data
     *
     * @return String The template before compilation
     */
    public function raw()
    {
        return file_get_contents($this->templatePath());
    }

    /**
     * Returns the path to the requested template file
     *
     * @return String Filepath
     */
    protected function templatePath()
    {
        if (isset($this->filename)) {
            // Render the template
            return $this->directory . '/'. $this->filename . '.' . self::$extension;
        } else {
            throw new \Exception('Attempting to get template path before loading a template');
        }
    }
}
