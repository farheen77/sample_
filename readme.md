# Laravel Crud App

A simple crud App with Laravel 5.5.

## Installation

Clone the repository-
```
git clone https://github.com/dilaniMaheswaran/sample.git
```

Then cd into the folder with this command-
```
cd sample
```

Then do a composer install
```
composer install
```

Then create a environment file
```
.env
```

Then generate your application key
```
php artisan key:generate
```

Then edit `.env` file with appropriate credential for your database server. Just edit these two parameter(`DB_USERNAME`, `DB_PASSWORD`).

Then do a database migration using this command-
```
php artisan migrate
```

## Run server

Run server using this command-
```
php artisan serve
```

Then go to `http://localhost:8000` from your browser and see the app.