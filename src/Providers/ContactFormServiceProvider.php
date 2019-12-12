<?php

namespace Jhoyax\LaravelContactForm\Providers;

use Illuminate\Support\ServiceProvider;

class ContactFormServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(ContactFormEventServiceProvider::class);
        $this->app->register(ContactFormRouteServiceProvider::class);
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/contact_form.php', 'contact_form'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'contact_form');
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'contact_form');
    }
}
