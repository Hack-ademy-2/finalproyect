<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
        if (DB::connection()->getPdo()){


            $categories = Category::all();
            View::share('categories',$categories);
            Paginator::useBootstrap();
    
            $announcements = Announcement::all();
            View::share('announcements',$announcements);
            Paginator::useBootstrap();

        }

    }
} 
