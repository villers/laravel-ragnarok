<?php

namespace App\Providers;

use App\Repositories\CategoryRepository;
use App\Repositories\CategoryRepositoryEloquent;
use App\Repositories\CharRepository;
use App\Repositories\CharRepositoryEloquent;
use App\Repositories\GuildRepository;
use App\Repositories\GuildRepositoryEloquent;
use App\Repositories\NewsRepository;
use App\Repositories\NewsRepositoryEloquent;
use App\Repositories\SiteOnlinepeakRepository;
use App\Repositories\SiteOnlinepeakRepositoryEloquent;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(NewsRepository::class, NewsRepositoryEloquent::class);
        $this->app->bind(CategoryRepository::class, CategoryRepositoryEloquent::class);
        $this->app->bind(CharRepository::class, CharRepositoryEloquent::class);
        $this->app->bind(GuildRepository::class, GuildRepositoryEloquent::class);
        $this->app->bind(SiteOnlinepeakRepository::class, SiteOnlinepeakRepositoryEloquent::class);
        //:end-bindings:
    }
}
