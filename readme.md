# Install

You need to install Vagrant then get the Laravel Box

```
  vagrant box add laravel/homestead
```

When the box is installed 

```
  composer global require "laravel/installer"
  laravel new site
```

Should do it. 

If you're not familiar with any of these elements, or my instructions don't work i suggest you go to the requirement section and follow the following link : 
[Install Homestead](https://laravel.com/docs/5.2/homestead) & [Install Laravel](https://laravel.com/docs/5.2/installation) 

## Requirement 

  - Wamp or other local server containing a php.exe 
  - Curl : http://curl.haxx.se/download.html
  - Composer : https://getcomposer.org/
  - Virtual Box : http://download.virtualbox.org/virtualbox/5.0.12/VirtualBox-5.0.12-104815-Win.exe
  - Vagrant : http://www.vagrantup.com/downloads.html
  - Cmdr : http://cmder.net/ (it's just a terminal with Linux shell command)
  - 
## Issues

 - To modfiy the hosts files (Windows/System32/drivers/etc/hosts) you need to launch a Text Editor in Admin mode, then open the hosts file. It could occur that your Antivirus (Avira for me) lock the possibility to set this files. You have to find how to desactivate this security before moving forward. 
 - Don't forget to generate a key in Homestead.yaml 
 - Surely miss something !

## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
