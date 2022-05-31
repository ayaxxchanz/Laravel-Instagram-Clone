
## Running the Project Locally

Assuming you already have all the components needed and environment set up for running Laravel:

- Open cmd and run `git clone https://github.com/ayaxxchanz/Laravel-Instagram-Clone/`
- Run `composer install`
- Run `cp .env.example .env`
- Open `.env` file in root. Change db connection to sqlite, `DB_CONNECTION=sqlite` and delete the rest (host, port, database, username, password) and save the file
- Create a new file named `database.sqlite` in `database` folder
- Run `php artisan key:generate`
- Run `php artisan migrate`
- Run `php artisan serve`


You can now access the application with the address given in cmd.

If you don't have all the components yet:
- Download [Node.js](https://nodejs.org/en/download/)
- Download [Composer](https://getcomposer.org/Composer-Setup.exe)
- Download [XAMPP](https://www.apachefriends.org/download.html)