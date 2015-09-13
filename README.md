# Twig Template Engine for Primer

A template engine for [Primer](http://github.com/rareloop/primer) that uses Twig rather than the deafult (Handlebars).

## Installation

1. In the `composer.json` in your Primer install, replace:

    ````json
    "rareloop/primer-template-engine-handlebars": "dev-master"
    ````

    with:

    ````json
    "rareloop/primer-template-engine-twig": "dev-master"
    ````

2. Run `composer update`.

3. Modify your `bootstrap/start.php` file and change the `Primer::start` call to include the `templateClass` e.g.
    
    ````php
    $primer = \Rareloop\Primer\Primer::start(array(
        'basePath' => __DIR__.'/..', 
        'templateClass' => 'Rareloop\Primer\TemplateEngine\Blade\Template'
    ));
    ````

4. Replace all `.hbs` files in your patterns and views with `.twig' files. If you don't want to do this by hand you can download the base Primer files in Twig format from [this repo [TODO]](http://).

## Usage

### Including patterns within one another

Any pattern can be included within another by using a custom Twig helper, e.g.

````twig
<div class="sub-pattern">
    {% inc 'elements/forms/input' %}
</div>
````

The `inc` helper is compatible with the standard `{% include %}` [Twig syntax](http://twig.sensiolabs.org/doc/tags/include.html) except that it will also load default pattern data too. If you want to override the data passed into the included pattern from the parent pattern you can pass in an object to be used as the context for the pattern.

````twig
{% inc elements/forms/input with { 'title': 'Inline data' } %}
````

Data available in the child pattern is resolved as follows:

- Default pattern data loaded from included patterns `data.json` *(lowest priority)*
- Current pattern context
- Inline data passed in via the `inc` function *(highest priority)*

### Twig Template Cache

By default Primer uses a directory called `cache` inside the project root for cache files. To change this to somewhere else you can set an alternative when you start Primer in `bootstrap/start.php`, e.g.

````php
$primer = \Rareloop\Primer\Primer::start(array(
    'basePath' => __DIR__.'/..', 
    'cachePath' => 'absolute/path/to/cache/dir',
    'templateClass' => 'Rareloop\Primer\TemplateEngine\Blade\Template',
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