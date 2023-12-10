<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\View;    

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
            View::composer('Navbar', function ($view) {
                $controller = new UserController();
                $userInfo = $controller->getCurrentUser();
                $view->with('user', $userInfo);
            });
    }
}
