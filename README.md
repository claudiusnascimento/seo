# Config SEO in your laravel models

As the title says, this package config the Search Engine Optimization in your laravel models, even save the SEO in your database if you wanted to

## Installation

You can install the package via composer:

```bash
composer require claudiusnascimento/seo
```

### Add SeoServiceProvider in config\app.php service providers array

``` php
ClaudiusNascimento\Seo\SeoServiceProvider::class
```

### Add SeoFacade in config\app.php aliases array

``` php
'Seo' => ClaudiusNascimento\Seo\SeoFacade::class
```

### Add the trait in your model 

``` php
use ClaudiusNascimento\Seo\Traits\SeoTrait;

class Page
{
    use SeoTrait;
}
```

### Publish the config file (not mandatory)

``` php
php artisan vendor:publish --provider="ClaudiusNascimento\Seo\SeoServiceProvider" --tag="config"
```

## Usage

Now, you can set the SEO in your controllers, like so

``` php
public function homePage()
{
    $page = Page::find(1);

    \Seo::setTitle('Home Page');
}
```

Add the following, in the appropriate location, to generate the meta tags

``` php
{!! \Seo::generate() !!}
```

This line will generate the SEO HTML meta tags.


## Saving in Database

If you want, and I higly recomend, you can save the SEO in the database.

### Migrate the seo table

``` php
php artisan migrate --package=claudiusnascimento/seo
```

### In your edit model view, put the follow html

``` php
{{ $model->generateSeo() }}
```

This line will display the form do store the seo in your database. You can put this in other location, BUT, will need the $model instance.

### How this works

To generate the forms to store SEO, the package need the model id and model relation, the ID will get from $model->id, and the seo relation will get automatically from class_basename. Is higly recomended you change this behaviour.

In your model you can add the property:

``` php
public $seo_relation = 'pages'; // for example
```

Or, you can add a method:

``` php
public function getSeoRelation()
{
    return 'pages';
}
```

Now, the way you set the SEO in your controllers will change

``` php
public function homePage()
{
    $page = Page::find(1);

    \Seo::setModel($page);
}
```

And the code will get the SEO store in your edit views

*** you can put the seo form to store the SEO in any location. Just the model object is necessary ***


### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email cau@claudiusnascimento.com instead of using the issue tracker.

## Credits

- [Claudius Nascimento](https://github.com/claudiusnascimento)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
