<?php

namespace App\Providers;

use App\Models\Blog\Menu;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        try{
            $menusGlobal = Menu::where('mn_parent_id',0)->get();
        }catch (\Exception $exception){

        }
        \View::share('menusGlobal', $menusGlobal ?? []);
    }
}
