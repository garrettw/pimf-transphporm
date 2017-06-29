Welcome to PIMF Transphporm bundle
==============================
This is a run-ready "Hello world" application using PIMF micro framework and Transphporm (https://github.com/Level-2/Transphporm), a template engine that separates logic from markup and that uses a syntax already familiar to web developers.

Here you can learn how to work with \Pimf\View\Transphporm template engine and \Pimf\Router.

Installation & Configuration
----------------------------

**MUST have DOM (XML) and mbstring PHP extensions installed**

1. Clone this repository recusrsively:
```bash
git clone --recursive https://github.com/garrettw/pimf-transphporm.git
```

2. Install Composer into a fresh directory (also initializes PIMF)
```bash
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php
php -r "unlink('composer-setup.php');"
php composer.phar create-project garrettw/pimf-transphporm .
```

3. Navigate to your application in a web browser. If all is well, you should see a pretty PIMF splash page. Get ready - there is a lot more to learn!

Alternatively you can run PHP's built-in web server that is provided since PHP 5.4.0

```bash
php -S 127.0.0.1:1337
```

Please notice: this web server was designed to aid application development. It may also be useful for testing purposes or for
application demonstrations that are run in controlled environments. It is not intended to be a full-featured web server.
It should not be used on a public network.

Learning PIMF
-------------
One of the best ways to learn PIMF is to read through the entirety of its documentation. This guide details all aspects of the framework and how to apply them to your application. https://github.com/gjerokrsteski/pimf/wiki

Read the PIMF Starter book almost anywhere. Available as a PDF, EPUB and MOBI. You can now read it on all devices, as well as offline. https://leanpub.com/pimf-starter/
