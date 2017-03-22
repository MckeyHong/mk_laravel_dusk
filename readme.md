<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Laravel Dusk Example

使用 laravel auth，使用 Dusk 測試下面功能是否正常。

- 首頁
- 註冊
- 登入
- 登出
- 忘記密碼

## Laravel Dusk flow

* 安裝 Laravel 專案

```
composer create-project --prefer-dist laravel/laravel blog
```

* 新增一個該專案使用的資料庫，並調整 .env 資料庫及 mail 設定。
	* mail 用於忘記密碼使用。

* 使用 Laravel 內建的認證快速建立使用者認證功能。 

	```
	php artisan make:auth
	```

* 執行 migrate 動作

	```
	// 需先確認 .env 的資料庫是否設定正確
	php artisan migrate
	```

* 安裝 瀏覽器測試 Laravel Dusk 套件

	```
	composer require laravel/dusk
	```

* 註冊 Dusk 服務提供者(service provider)<br /> 有兩種方式可以註冊 Dusk
  
	* config / app.php

		```
		'providers' => [
			...
			Laravel\Dusk\DuskServiceProvider::class,
		],
		```
	* app / Providers / AppServiceProvider.php

	
		```
		use Laravel\Dusk\DuskServiceProvider;
	
		/**
		 * Register any application services.
		 *
		 * @return void
		 */
		public function register()
		{
		    if ($this->app->environment('local', 'testing')) {
		        $this->app->register(DuskServiceProvider::class);
		    }
		}
		```

* 執行 `dusk:install` Artisan 命令 <br />
  在 tests 目錄產生 dusk 相關測試目錄及樣版

	```
	php artisan dusk:install
	```

**Dusk測試的路徑為 APP_URL (.env)**

* 建立測試

	```
	// 產生於 tests/Browser 目錄底下
	php artisan dusk:make RegisterTest
	```

* 運行測試
	
	```
	php artisan dusk
	```

## Documentation

- [Laravel Dusk - 英文](https://goo.gl/GZ15CV)
- [Laravel Dusk - 簡中](https://goo.gl/5pstsB)
