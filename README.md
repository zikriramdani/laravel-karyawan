## Tentang Aplikasi

Aplikasi Karyawan

### Beberapa Fitur yang tersedia:

-   Karyawan

### Setup Aplikasi

Jalankan perintah

```bash
composer update
```

atau:

```bash
composer install
```

Konfigurasi file .env

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=example_app
DB_USERNAME=root
DB_PASSWORD=
```

Opsional

```bash
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:QGRW4K7UVzS2M5HE2ZCLlUuiCtOIzRSfb38iWApkphE=
APP_DEBUG=true
APP_URL=http://example-app.test
```

Generate key

```bash
php artisan key:generate
```

Migrate database

```bash
php artisan migrate
```

Menjalankan aplikasi

```bash
php artisan serve
```

## Route API (Postman)

-   http://localhost:8000/api/karyawan => type GET // Get Data
-   http://localhost:8000/api/karyawan => type POST // Create Data
-   http://localhost:8000/api/karyawan/{id} => type PUT // Update Data
-   http://localhost:8000/api/karyawan/{id} => type DEL // Delete Data

## Link Tutorial

-   [Youtube]()
-   [W2Learn](https://www.w2learn.com)

## License

[MIT license](https://opensource.org/licenses/MIT)
