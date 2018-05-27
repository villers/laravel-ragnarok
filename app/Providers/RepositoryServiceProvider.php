<?php

namespace App\Providers;

use App\Repositories\AccRegNumRepository;
use App\Repositories\AccRegNumRepositoryEloquent;
use App\Repositories\CartInventoryRepository;
use App\Repositories\CartInventoryRepositoryEloquent;
use App\Repositories\CategoryRepository;
use App\Repositories\CategoryRepositoryEloquent;
use App\Repositories\CharRepository;
use App\Repositories\CharRepositoryEloquent;
use App\Repositories\GuildRepository;
use App\Repositories\GuildRepositoryEloquent;
use App\Repositories\ItemCashDbRepositoryEloquent;
use App\Repositories\ItemCashDbRepository;
use App\Repositories\LoginRepository;
use App\Repositories\LoginRepositoryEloquent;
use App\Repositories\NewsRepository;
use App\Repositories\NewsRepositoryEloquent;
use App\Repositories\SiteOnlinepeakRepository;
use App\Repositories\SiteOnlinepeakRepositoryEloquent;
use App\Repositories\TotemRepository;
use App\Repositories\TotemRepositoryEloquent;
use App\Repositories\VendingItemRepository;
use App\Repositories\VendingItemRepositoryEloquent;
use App\Repositories\VendingRepository;
use App\Repositories\VendingRepositoryEloquent;
use App\Repositories\VoteRepository;
use App\Repositories\VoteRepositoryEloquent;
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
        $this->app->bind(AccRegNumRepository::class, AccRegNumRepositoryEloquent::class);
        $this->app->bind(NewsRepository::class, NewsRepositoryEloquent::class);
        $this->app->bind(CategoryRepository::class, CategoryRepositoryEloquent::class);
        $this->app->bind(CharRepository::class, CharRepositoryEloquent::class);
        $this->app->bind(GuildRepository::class, GuildRepositoryEloquent::class);
        $this->app->bind(SiteOnlinepeakRepository::class, SiteOnlinepeakRepositoryEloquent::class);
        $this->app->bind(VendingRepository::class, VendingRepositoryEloquent::class);
        $this->app->bind(VendingItemRepository::class, VendingItemRepositoryEloquent::class);
        $this->app->bind(CartInventoryRepository::class, CartInventoryRepositoryEloquent::class);
        $this->app->bind(VoteRepository::class, VoteRepositoryEloquent::class);
        $this->app->bind(LoginRepository::class, LoginRepositoryEloquent::class);
        $this->app->bind(TotemRepository::class, TotemRepositoryEloquent::class);
        $this->app->bind(ItemCashDbRepository::class, ItemCashDbRepositoryEloquent::class);
        //:end-bindings:
    }
}
