<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \App\Repositories\ItemRepositoryInterface::class,
            \App\Repositories\Eloquent\ItemRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // DBの文字コードがutf8mb4の場合は下記のコードを入れる
        Schema::defaultStringLength(191);
    }
}
