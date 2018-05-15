<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Billing\Stripe;
use App\Task;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('components.sidebar', function($view) {
          $view->with('archive', Task::archive());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
      $this->app->singleton(Stripe::class, function () {
        return new Stripe(config('services.stripe.secret'));
      });
    }
}
