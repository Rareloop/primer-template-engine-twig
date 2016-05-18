<?php

namespace Rareloop\Primer\TemplateEngine\Twig;

use Rareloop\Primer\Primer;
use Rareloop\Primer\TemplateEngine\Twig\Template;

class Loader implements \Twig_LoaderInterface
{
    /**
     * Gets the source code of a template, given its name.
     *
     * @param  string $name string The name of the template to load
     *
     * @return string The template source code
     */
    public function getSource($name)
    {
        // Remove an extension
        $id = preg_replace('/\.' . Template::$extension . '$/', '', $name);
        $partialPath = Primer::$PATTERN_PATH . '/' . $id . '/template.' . Template::$extension;

        // Test if this is a complete path already then use our fallback for partials (included
        // files)
        if (file_exists($name)) {
            return file_get_contents($name);
        } else if (file_exists($partialPath)) {
            return file_get_contents($partialPath);
        } else {
            throw new \Twig_Error_Loader("Could not find a template to match `$name`");
        }
    }

    /**
     * Gets the cache key to use for the cache for a given template name.
     *
     * @param  string $name string The name of the template to load
     *
     * @return string The cache key
     */
    public function getCacheKey($name)
    {
        return md5($name);
    }

    /**
     * Returns true if the template is still fresh.
     *
     * @param string    $name The template name
     * @param timestamp $time The last modification time of the cached template
     */
    public function isFresh($name, $time)
    {
        return true;
    }
}
