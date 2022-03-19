<?php

namespace App\Providers;

use App\Models\menu;
use Illuminate\Support\ServiceProvider;

class ContentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */

    public $menuItems;

    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->menuItems = menu::all();
        view()->composer('layouts.app', function ($view) {
            $view->with(['contents' => $this->menuItems]);
        });
    }
}
