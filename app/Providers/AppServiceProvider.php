<?php

namespace App\Providers;

use App\Domain\Contracts\UserContracts;
use App\Domain\Repository\UserRepository;
use App\Models\User;
use App\Observer\UserObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerObserver();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserContracts::class, UserRepository::class);
//        $this->app->bind(AdvertisementContract::class, AdvertisementRepository::class);
//        $this->app->bind(PictureContract::class, PictureRepository::class);
    }

    private function registerObserver(){
        User::observe(UserObserver::class);
//        Advertisement::observe(AdvertisementObserver::class);
    }
}
