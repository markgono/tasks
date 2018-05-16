<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Billing\Stripe;
use App\Task;
use App\Tag;

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
          $archive = Task::archive();
          $tags = Tag::has('tasks')->pluck('name');

          $view->with(compact('archive', 'tags'));
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
