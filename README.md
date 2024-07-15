[![Latest Stable Version](http://poser.pugx.org/magenizr/magento2-raygun/v?v=1)](https://packagist.org/packages/magenizr/magento2-raygun) [![Total Downloads](http://poser.pugx.org/magenizr/magento2-raygun/downloads?v=1)](https://packagist.org/packages/magenizr/magento2-raygun) [![Latest Unstable Version](http://poser.pugx.org/magenizr/magento2-raygun/v/unstable?v=1)](https://packagist.org/packages/magenizr/magento2-raygun) [![License](http://poser.pugx.org/magenizr/magento2-raygun/license?v=1)](https://packagist.org/packages/magenizr/magento2-raygun) [![PHP Version Require](http://poser.pugx.org/magenizr/magento2-raygun/require/php?v=1)](https://packagist.org/packages/magenizr/magento2-raygun)

Connect Magento with [Raygun](https://raygun.com) and never let another error go unnoticed again. Monitor your full tech stack across both desktop and mobile, with all the information you need to take action.

![Magenizr Raygun - Backend](https://images2.imgbox.com/3b/12/GYCKkEYK_o.png)

| [![Magenizr Raygun](https://images2.imgbox.com/b1/e3/XxDyKqGr_o.png)](https://images2.imgbox.com/b1/e3/XxDyKqGr_o.png) | [![Magenizr Raygun](https://images2.imgbox.com/c9/3b/8KUX893A_o.png)](https://images2.imgbox.com/c9/3b/8KUX893A_o.png) | [![Magenizr Raygun](https://images2.imgbox.com/d6/af/fj0dlj4L_o.png)](https://images2.imgbox.com/d6/af/fj0dlj4L_o.png) |
|--------------------------------------------------------------------------------------------------------------------------|------------------------------------------------------------------------------------------------------------------------|-----------------------------------------------------------------------------------------------------------------------|
| [![Magenizr Raygun](https://images2.imgbox.com/db/da/YPLBhWYC_o.png)](https://images2.imgbox.com/db/da/YPLBhWYC_o.png) | [![Magenizr Raygun](https://images2.imgbox.com/d3/c1/BXstolhs_o.png)](https://images2.imgbox.com/d3/c1/BXstolhs_o.png) | [![Magenizr Raygun](https://images2.imgbox.com/81/64/JJ3kYEaq_o.png)](https://images2.imgbox.com/81/64/JJ3kYEaq_o.png) |
| [![Magenizr Raygun](https://images2.imgbox.com/c1/db/UmF9qhrA_o.png)](https://images2.imgbox.com/c1/db/UmF9qhrA_o.png) |                                                                                                                        | |

## Features

- PHP Crash Reporting
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
- PHP 7.x, 8.x

## Installation (Composer 2)

1. Update your composer.json `composer require "magenizr/magento2-raygun":"^1.1.1" --no-update`
2. Use `composer update magenizr/magento2-raygun --no-install` to update your composer.lock file.

```
Updating dependencies
Lock file operations: 1 install, 1 update, 0 removals
  - Locking magenizr/magento2-raygun (1.1.1)
```

3. And then `composer install` to install the package.

```
Installing dependencies from lock file (including require-dev)
Verifying lock file contents can be installed on current platform.
Package operations: 1 install, 0 update, 0 removals
  - Installing magenizr/magento2-raygun (1.1.1): Extracting archive
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

## License

[OSL - Open Software Licence 3.0](https://opensource.org/licenses/osl-3.0.php)
