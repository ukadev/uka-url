[![Latest Stable Version](https://poser.pugx.org/ukadev/uka-url/v/stable.svg)](https://packagist.org/packages/ukadev/blogfolio) 
[![Total Downloads](https://poser.pugx.org/ukadev/uka-url/downloads.svg)](https://packagist.org/packages/ukadev/blogfolio) 
[![Latest Unstable Version](https://poser.pugx.org/ukadev/uka-url/v/unstable.svg)](https://packagist.org/packages/ukadev/blogfolio) 
[![License](https://poser.pugx.org/ukadev/blogfolio/license.svg)](https://packagist.org/packages/ukadev/blogfolio)
# ukaURL
Simple URL Shortener using 

### Tech
This app is made using:
  - [Blade Template System](https://github.com/PhiloNL/Laravel-Blade)
  - [Laravel Routing](https://github.com/illuminate/routing)
  - [Eloquent ORM](https://github.com/illuminate/database)
  - [Twitter Bootstrap](http://twitter.github.com/bootstrap/)
  - [jQuery](http://jquery.com)

### Demo
http://url.ukadev.com/

### Installation
In order to get this app working, you have to execute just a few steps (you must have [composer](https://getcomposer.org/) installed):
```sh
$ composer create-project ukadev/uka-url YOURFOLDER
```
Please note you have to replace YOURFOLDER with the name of the folder you want to install it

Then go to:
```sh
/app/Database/
```
and import the file named ukaurl.sql into your MySQL Database or just execute the next query:
```sh
CREATE TABLE `urls` (
  `id` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `original` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `counter` int(6) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
```

And finally configure the database information inside the file:
```sh
/app/Config/Database.php
```
