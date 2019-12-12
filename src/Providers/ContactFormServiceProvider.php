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

        $this->publishes([
            __DIR__ . '/../../config/contact_form.php' => config_path('contact_form.php'),
        ], 'config');
        $this->publishes([
            __DIR__ . '/../../database/migrations'=> database_path('migrations'),
        ], 'migrations');
        $this->publishes([
            __DIR__ . '/../../resources/lang' => resource_path('lang/vendor/contact_form'),
        ], 'lang');
        $this->publishes([
            __DIR__ . '/../../resources/views' => resource_path('views/vendor/contact_form'),
        ], 'views');
    }
}
