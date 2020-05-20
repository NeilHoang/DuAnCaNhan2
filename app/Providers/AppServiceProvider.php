<?php

namespace App\Providers;

use App\Http\Reponsitory\Category\CategoryRepository;
use App\Http\Reponsitory\Image\ImageRepository;
use App\Http\Reponsitory\Review\ReviewRepository;
use App\Http\Service\Category\CategoryService;
use App\Http\Service\Image\ImageService;
use App\Http\Service\Review\ReviewService;
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
        $this->app->singleton(ImageService::class);
        $this->app->singleton(ImageRepository::class);
        $this->app->singleton(CategoryService::class);
        $this->app->singleton(CategoryRepository::class);
        $this->app->singleton(ReviewService::class);
        $this->app->singleton(ReviewRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
