## Requirement

* PHP >= 5.6.4
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension
* XML PHP Extension

`確保可以正常運作 Laravel 5.4 即可`


## Usage

* git clone 此專案

```
git clone git@github.com:MckeyHong/mk_laravel_dusk.git
```

* Copy `.env.example` 設定檔

```
cp .env.example .env
```

* 建置該專案的資料庫 `laravelDusk`，並調整 .env 中的資料庫連線設定及 mail 設定。

```
// 專案網址設定
APP_URL=http://localhost:8000

// 資料庫連線設定
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravelDusk
DB_USERNAME=homestead
DB_PASSWORD=secret

// mail 設定
MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
```

* Install dependencies:

```
composer install
```

* Run Migrate:

```
php artisan migrate
```

* Run Laravel Dusk:

```
php artisan dusk
```

