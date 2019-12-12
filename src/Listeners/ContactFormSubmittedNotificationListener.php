<?php

namespace Jhoyax\LaravelContactForm\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use Jhoyax\LaravelContactForm\Events\ContactFormSubmittedEvent;
use Jhoyax\LaravelContactForm\Mail\ContactFormSubmittedMail;

class ContactFormSubmittedNotificationListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(ContactFormSubmittedEvent $event)
    {
        Mail::to(config('contact_form.send.to'))
            ->send(new ContactFormSubmittedMail($event->submission));
    }
}
