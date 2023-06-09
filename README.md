[![Latest Stable Version](http://poser.pugx.org/magenizr/magento2-raygun/v)](https://packagist.org/packages/magenizr/magento2-raygun) [![Total Downloads](http://poser.pugx.org/magenizr/magento2-raygun/downloads)](https://packagist.org/packages/magenizr/magento2-raygun) [![Latest Unstable Version](http://poser.pugx.org/magenizr/magento2-raygun/v/unstable)](https://packagist.org/packages/magenizr/magento2-raygun) [![License](http://poser.pugx.org/magenizr/magento2-raygun/license)](https://packagist.org/packages/magenizr/magento2-raygun) [![PHP Version Require](http://poser.pugx.org/magenizr/magento2-raygun/require/php)](https://packagist.org/packages/magenizr/magento2-raygun)

Connect Magento with [Raygun](https://raygun.com) and never let another error go unnoticed again. Monitor your full tech stack across both desktop and mobile, with all the information you need to take action.

![Magenizr Raygun - Backend](https://images2.imgbox.com/58/7f/JZlH85Bn_o.jpeg)

| [![Magenizr Raygun](https://images2.imgbox.com/17/0c/P01p68xp_o.jpeg)](https://images2.imgbox.com/17/0c/P01p68xp_o.jpeg) | [![Magenizr Raygun](https://images2.imgbox.com/87/92/mtUM3izb_o.jpeg)](https://images2.imgbox.com/87/92/mtUM3izb_o.jpeg) | [![Magenizr Raygun](https://images2.imgbox.com/2a/c2/rUAraq6N_o.jpeg)](https://images2.imgbox.com/2a/c2/rUAraq6N_o.jpeg)|
|--------------------------------------------------------------------------------------------------------------------------|--------------------------------------------------------------------------------------------------------------------------|-----------------------------------------------------------------------|
| [![Magenizr Raygun](https://images2.imgbox.com/90/19/w33CZXim_o.jpeg)](https://images2.imgbox.com/90/19/w33CZXim_o.jpeg) | [![Magenizr Raygun](https://images2.imgbox.com/4a/5b/sH4sDEMp_o.jpeg)](https://images2.imgbox.com/4a/5b/sH4sDEMp_o.jpeg) ||


## Features

- PHP Crash Reporting ( [Details](https://raygun.com/platform/crash-reporting) )
- Real User Monitoring ( + Pulse )
- Customer Session tracking
- Disable Raygun for certain domains such as `.local` or `.dev`
- Debugging

## Usage

1. Simply go to `Stores > Configuration > Magenizr > Raygun`.
2. Paste your Raygun API key
3. Enable `PHP Crash Reporting` or `Real User Monitoring`
4. Clear cache
5. The next PHP exception or error in the frontend will get pushed to Raygun immediately

## System Requirements

- Magento 2.4.x
- PHP 5.6.x, 7.x

## Installation (Composer 2)

1. Update your composer.json `composer require "magenizr/magento2-raygun":"^1.0.0" --no-update`
2. Use `composer update magenizr/magento2-raygun --no-install` to update your composer.lock file.

```
Updating dependencies
Lock file operations: 1 install, 1 update, 0 removals
  - Locking magenizr/magento2-raygun (1.0.0)
  - Locking mindscape/raygun4php (v2.3.1)
```

3. And then `composer install` to install the package.

```
Installing dependencies from lock file (including require-dev)
Verifying lock file contents can be installed on current platform.
Package operations: 1 install, 0 update, 0 removals
  - Installing mindscape/raygun4php (v2.3.1): Extracting archive
  - Installing magenizr/magento2-raygun (1.0.0): Extracting archive
```

4. Enable the module

```
php bin/magento module:enable Magenizr_Raygun
```

## Support

If you experience any issues, don't hesitate to open an issue
on [Github](https://github.com/magenizr/Magenizr_Raygun/issues).

## Purchase

This module is available for free on [GitHub](https://github.com/magenizr).

## Contact

Follow us on [GitHub](https://github.com/magenizr), [Twitter](https://twitter.com/magenizr)
and [Facebook](https://www.facebook.com/magenizr).

## Roadmap

- Further options for Real User Monitoring ( Frontend )

## History

===== 1.0.0 =====

* First release

## License

[OSL - Open Software Licence 3.0](https://opensource.org/licenses/osl-3.0.php)
