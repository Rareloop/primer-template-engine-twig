# Twig Template Engine for Primer

![CI](https://travis-ci.org/Rareloop/primer-template-engine-twig.svg)

A template engine for [Primer](http://github.com/rareloop/primer) that uses Twig rather than the deafult (Handlebars).

## Installation

1. In the `composer.json` in your Primer install, replace:

    ````json
    "rareloop/primer-template-engine-handlebars": "dev-master"
    ````

    with:

    ````json
    "rareloop/primer-template-engine-twig": "1.0.*"
    ````

2. Run `composer update`.

3. Modify your `bootstrap/start.php` file and change the `Primer::start` call to include the `templateClass` e.g.
    
    ````php
    $primer = Primer::start(array(
        'basePath' => __DIR__.'/..', 
        'templateClass' => Rareloop\Primer\TemplateEngine\Twig\Template::class,
    ));
    ````

4. Replace all `.hbs` files in your patterns and views with `.twig' files. If you don't want to do this by hand you can download the base Primer files in Twig format from [this repo](https://github.com/Rareloop/primer-patterns-twig).

## Usage

### Including patterns within one another

Any pattern can be included within another by using the standard `include` syntax, e.g.

````twig
<div class="sub-pattern">
    {% include 'elements/forms/input' %}
</div>
````

More information on using `{% include %}` and manipulating the passed in context can be found on the [Twig website](http://twig.sensiolabs.org/doc/tags/include.html).

### Extending Templates
By default, Primer will wrap all page Templates with a common View (`views/template.twig`). When using `{% extends %}` this wrapping is sometimes undesirable, in such circumstances you can disable this behaviour in a couple of ways.

1. On a per page Template basis. Add the following to the Templates `data.json` file:

    ```
    {
        "primer": {
            "view": "custom-view"
        }
    }
    ```
2. Site wide. Add `wrapTemplate: false` to the `Primer::start` call in `bootstrap/start.php`, e.g.
    ```php
    $primer = Primer::start([
        'basePath' => __DIR__.'/..',
    
        'templateClass' => TwigTemplateEngine::class,
        'wrapTemplate' => false,
    ]);
    ```


### Twig Template Cache

By default Primer uses a directory called `cache` inside the project root for cache files. To change this to somewhere else you can set an alternative when you start Primer in `bootstrap/start.php`, e.g.

````php
$primer = Primer::start(array(
    'basePath' => __DIR__.'/..', 
    'cachePath' => 'absolute/path/to/cache/dir',
    'templateClass' => Rareloop\Primer\TemplateEngine\Twig\Template::class,
));

````

### Custom Events

Most of the Primer events are still available, this package adds a few engine specific events too:

- ### Twig Engine Initialisation
    
    Called when the Twig engine is created. Useful for registering custom helpers with the Twig engine.

    ````php
    Event::listen('twig.init', function ($twig) {

    });
    ````
