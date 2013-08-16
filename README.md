# Timezone #

<img src="http://stream1.gifsoup.com/view6/2862683/back-to-the-future-o.gif" alt="Timezone" align="right" width="240"/>

**Version:** *1.0.0*<br/>

**Timezone** fixes issues you may run into with PHP and it's `date.timezone` ini setting.
This library should *only* be a dependency on end user applications and frameworks.
It should *not* be a dependency on smaller libraries or plugins.<br/>
It can be installed in whichever way you prefer, but I recommend [Composer][packagist].
```json
{
    "require": {
        "adlawson/timezone": "1.0.0"
    }
}
```


### When should I consider using this library? ###
It is useful if you ever see this warning
```plain
Exception: DateTime::__construct(): It is not safe to rely on the system's timezone settings. You are *required* to use
the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are
still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now,
but please set date.timezone to select your timezone.
```

This library works by setting the default timezone to `UTC` if it isn't already set in `php.ini`.
Unfortunately, it does so by ignoring [`PSR-1#2.3`][psr-1-23] and executes itself when the file is included.


### Usage ###
If you installed this library with composer, all you need to do is include composer's autoloader.
```php
<?php
require 'vendor/autoload.php';
```

Otherwise, you'll need to include the file in this library directly.
```php
<?php
require '/path/to/adlawson/timezone/lib/timezone.php';
```


### Notes ###
This is a fairly horrible but convenient way to cover up the timezone issue in PHP.
It's by no means a silver bullet and should only be used if you're confident you know what it actually does.

When I wrote this, I had seen a very similar fix somewhere on github but I couldn't for the life of me find it again.
If anybody knows which library I'm referring to, please send me a link. Thanks.


### License ###
The content of this library is released under the **MIT License** by **Andrew Lawson**.<br/>
You can find a copy of this license at http://www.opensource.org/licenses/mit or in [`LICENSE`][license]

<!-- URLs -->
[packagist]: https://packagist.org/packages/adlawson/timezone
[license]: https://github.com/adlawson/timezone/blob/master/LICENSE
[psr-1-23]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-1-basic-coding-standard.md#23-side-effects
