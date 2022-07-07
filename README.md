# Instagram Clone

Instagram clone, made with Laravel with some extra features that are not available in Instagram web.

- PHP 7.4.29
- Laravel v8.83.14

[![MIT License](https://img.shields.io/apm/l/atomic-design-ui.svg?)](https://github.com/tterb/atomic-design-ui/blob/master/LICENSEs)

## Preview

<a href="https://i.imgur.com/PCfpGa8.png" target="_blank"><img src="https://i.imgur.com/PCfpGa8.png" width="600px"></img></a>

<a href="https://i.imgur.com/neNYRKq.png" target="_blank"><img src="https://i.imgur.com/neNYRKq.png" width="600px"></img></a>

## Run locally

Assuming you already have all the components needed and environment set up for running Laravel:

- Open cmd and run `git clone https://github.com/ayaxxchanz/Laravel-Instagram-Clone/`
- Run `composer install`
- Run `cp .env.example .env`
- Open `.env` file in root. Change db connection to sqlite, `DB_CONNECTION=sqlite` and delete the rest (host, port, database, username, password) and save the file
- Create a new file named `database.sqlite` in `database` folder
- Run `php artisan key:generate`
- Run `php artisan migrate`
- Run `php artisan storage:link`
- Run `php artisan serve`


You can now access the application with the address given in cmd.

If you don't have all the components yet:
- Download [Node.js](https://nodejs.org/en/download/)
- Download [Composer](https://getcomposer.org/Composer-Setup.exe)
- Download [XAMPP](https://www.apachefriends.org/download.html)
