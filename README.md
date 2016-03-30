# Symfony CMF Slugifier API

[![Build Status](https://travis-ci.org/symfony-cmf/slugifier-api.svg?branch=master)](https://travis-ci.org/symfony-cmf/slugifier-api)
[![Latest Stable Version](https://poser.pugx.org/symfony-cmf/slugifier-api/version.png)](https://packagist.org/packages/symfony-cmf/slugifier-api)
[![Total Downloads](https://poser.pugx.org/symfony-cmf/slugifier-api/d/total.png)](https://packagist.org/packages/symfony-cmf/slugifier-api)

This package is part of the [Symfony Content Management Framework (CMF)](http://cmf.symfony.com/)
and licensed under the [MIT License](LICENSE).

A "slugifier" is a function which transforms a string `such as this` into a
URL-friendly string `such-as-this`. Slugifiers are also known as "urlizers".

This package does not contain a slugifier itself, but provides a standard
interface to use for third party slugifiers.  Besides this, it comes with a
useful `CallbackSlugifier` which is capable of handling most third party
slugifiers.

## Requirements

* See also the `require` section of [composer.json](composer.json)

## Documentation

Perhaps the best way to document this simple component is with a
demonstration. You have an event subscriber which slugifies the title of a
blog post:

```php
<?php

use Symfony\Cmf\Api\Slugifier\SlugifierInterface;

class FooSubscriber
{
    private $slugifier;

    public function __construct(SlugifierInterface $slugifier)
    {
        $this->slugifier = $slugifier;
    }

    public function onEntitySave(\Some\Event $event)
    {
         $entity = $event->getEntity();
         $entity->setSlug($this->slugifier->slugify($entity->getTitle());
    }
}
```

You can then inject either a slugifier which already implements the CMF
``SlugifierInterface`` or you can use non-implementing libraries using the
`CallbackSlugifier`. The
[RoutingAutoBundle](https://github.com/symfony-cmf/RoutingAutoBundle) uses
[aferrandini/urlizer](https://github.com/aferrandini/Urlizer) package:

```php
$slugifier = new CallbackSlugifier('Ferrandini\Urlizer::urlize');
$fooSubscriber = new FooSubscriber($slugifier);
```

By using the Slugifier package you decouple your application from the slugifier
implementation.

See also:

* [All Symfony CMF documentation](http://symfony.com/doc/master/cmf/index.html) - complete Symfony CMF reference
* [Symfony CMF Website](http://cmf.symfony.com/) - introduction, live demo, support and community links

## Contributing

Pull requests are welcome. Please see our
[CONTRIBUTING](https://github.com/symfony-cmf/symfony-cmf/blob/master/CONTRIBUTING.md)
guide.

Unit and/or functional tests exist for this bundle. See the
[Testing documentation](http://symfony.com/doc/master/cmf/components/testing.html)
for a guide to running the tests.

Thanks to
[everyone who has contributed](https://github.com/symfony-cmf/RoutingBundle/contributors) already.
