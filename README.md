# Uka-url URL Shortener

Built with [Lumen 8.x](https://lumen.laravel.com), [Bootstrap v5](https://getbootstrap.com/) and [jQuery-3.5.1](https://jquery.com/)

[Go directly to the screenshot](#screenshot)

## Prerequisites

To make the application working you are going to need:
> - LAMP environment or equivalent with mod_rewrite enabled
> - composer

## Installation

Follow the next instructions:

> - Open console/terminal and run:<br>
    `git clone https://github.com/ukadev/uka-url.git`

> - Enter into the cloned folder and run:<br>
    `composer install`

> - Open the file .env in the application root directory (if doesn't exist, copy it from .env.example) and modify the following variables with your database connection details:<br> 
    `DB_CONNECTION=mysql`<br>
    `DB_HOST=127.0.0.1`<br>
    `DB_PORT=3306`<br>
    `DB_DATABASE=homestead`<br>
    `DB_USERNAME=homestead`<br>
    `DB_PASSWORD=secret`

> - After configure the database variables, execute the command from the root of the application:<br>
    `php artisan migrate`
    
> - Set up your virtual host to point to the folder called `public` as the website root folder. You can use the next example if you want it (may require modifications):

````
<VirtualHost *:80>
    ServerAdmin webmaster@localhost
    DocumentRoot /var/www/public
        <Directory /var/www/public>
                Options Indexes FollowSymLinks MultiViews
                AllowOverride all
                Order Deny,Allow
                Allow from all
                Require all granted
        </Directory>
        ErrorLog ${APACHE_LOG_DIR}/error.log
        CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
````


### Extra notes 

>- If you want to add a value to the KEY variable of the .env file, you can execute the following command in the console/terminal and paste it there:<br>
    `php -r "echo md5(uniqid()).\"\n\";"`

### Screenshot

![](https://raw.githubusercontent.com/ukadev/ukadev/main/image_2021-02-25_000639.png)
