<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';
    protected $namespaceAdmin = 'Core\Admin\Http\Controllers';
    protected $namespaceProduct = 'Frontend\Product\Http\Controllers';
    protected $namespaceBlog = 'Frontend\Blog\Http\Controllers';
    protected $namespaceUser = 'Frontend\User\Http\Controllers';
    protected $namespacePurchase = 'Frontend\Purchase\Http\Controllers';

    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();
        $this->mapWebRoutes();
        $this->mapAdminRoutes();
        $this->mapProductRoutes();
        $this->mapBlogRoutes();
        $this->mapUserRoutes();
        $this->mapPurchaseRoutes();
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware(['web','setLocale'])
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));
    }

    protected function mapAdminRoutes()
    {
        Route::prefix('cms-admin')
            ->middleware(['web','check_admin_login','setLocale'])
            ->namespace($this->namespaceAdmin)
            ->group(base_path('platform/core/admin/src/routes.php'));
    }

    protected function mapProductRoutes()
    {
        Route::prefix('san-pham')
            ->middleware(['web','setLocale'])
            ->namespace($this->namespaceProduct)
            ->group(base_path('platform/frontend/product/src/routes.php'));
    }

    protected function mapPurchaseRoutes()
    {
        Route::prefix('purchase')
            ->middleware(['web','setLocale'])
            ->namespace($this->namespacePurchase)
            ->group(base_path('platform/frontend/purchase/src/routes.php'));
    }

    protected function mapUserRoutes()
    {
        Route::prefix('account')
            ->middleware(['web','setLocale','check_user_login'])
            ->namespace($this->namespaceUser)
            ->group(base_path('platform/frontend/user/src/routes.php'));
    }

    protected function mapBlogRoutes()
    {
        Route::prefix('bai-viet')
        ->middleware(['web','setLocale'])
        ->namespace($this->namespaceBlog)
        ->group(base_path('platform/frontend/blog/src/routes.php'));
    }

}
