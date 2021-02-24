# Uka-url URL Shortener

Powered by [Lumen](https://lumen.laravel.com/docs) ,[Bootstrap v5.0.0-beta2](https://getbootstrap.com/) and [jQuery-3.5.1](https://jquery.com/)

## Installation

Execute the following commands:

> - Open console/terminal and run `git clone https://github.com/ukadev/uka-url.git {folder}`

> - Enter into the cloned folder and run `composer install`

> - Open the file .env and modify the following variables with yours:<br> 
    `DB_CONNECTION=mysql`<br>
    `DB_HOST=127.0.0.1`<br>
    `DB_PORT=3306`<br>
    `DB_DATABASE=homestead`<br>
    `DB_USERNAME=homestead`<br>
    `DB_PASSWORD=secret`<br><br>
    If you want to add a value to the KEY variable of that file, you can execute the following command in the console/terminal and paste it there: 
    <br>
    `php -r "echo md5(uniqid()).\"\n\";"`

> - After configure the database variables, execute the command from the root of the application:<br>
    `php artisan migate`
    
> - Configure your virtualhost to listen to public folder as root folder. You can use the next example if you want it (may require modifications):

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
