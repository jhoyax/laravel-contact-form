<?php

namespace Jhoyax\LaravelContactForm\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Jhoyax\LaravelContactForm\Events\ContactFormSubmittedEvent;
use Jhoyax\LaravelContactForm\Listeners\ContactFormSubmittedNotificationListener;

class ContactFormEventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        ContactFormSubmittedEvent::class => [
            ContactFormSubmittedNotificationListener::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
