# Yet Another File Storage

## Requirements

- PHP 7.1
- MySQL 5.7
- Node.js 7.6
- NPM 4.6
- Composer

## Deploy

- Grab source code `git clone`
- Install project dependencies `composer install` and `npm install`
- Compile assets by running `npm run dev` for dev environment and `npm run prod` for prod environment
- Set up your env config file: `cp .env.example.php .env`
- Generate Laravel `API_KEY`: `php artisan key:generate`
- Setup DB connection in `.env`
- Run migrations: `php artisan migrate`
- Ccreate the symbolic link from `public/storage` to `storage/app/public`
to make your file storage public. You may use the `storage:link` Artisan command:
`php artisan storage:link`
- Set web server root to `public/index.php`. For dev environment you can
just use `php artisan serve`
