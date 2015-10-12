<?php namespace Rareloop\Primer\TemplateEngine\Twig;

use Rareloop\Primer\TemplateEngine\Twig\IncTokenParser;
use Rareloop\Primer\Events\Event;
use Rareloop\Primer\Primer;
use Rareloop\Primer\TemplateEngine\Twig\Loader;

class Twig extends \Twig_Environment
{
    // Singleton instance
    private static $_instance;

    /**
     * Twig engine constructor
     */
    public function __construct()
    {
        $primerLoader = new Loader();

        // Setup the loader to look from the base directory
        $fileSystemLoader = new \Twig_Loader_Filesystem([Primer::$PATTERN_PATH, Primer::$VIEW_PATH, Primer::$BASE_PATH]);

        $loader = new \Twig_Loader_Chain([$fileSystemLoader, $primerLoader]);

        // Create the engine with the correct cache path and set it to
        // invalidate the cache when a template changes
        parent::__construct($loader, array(
            'cache' => Primer::$CACHE_PATH,
            'auto_reload' => true,
        ));

        // Register our custom {% inc %} tag
        $this->addTokenParser(new IncTokenParser());
    }

    /**
     * Singleton function
     *
     * @return Twig A singleton instance of the Twig engine
     */
    public static function instance()
    {
        if (!isset(self::$_instance)) {
            self::$_instance = new Twig();

            Event::fire('twig.init', self::$_instance);
        }

        return self::$_instance;
    }
}
