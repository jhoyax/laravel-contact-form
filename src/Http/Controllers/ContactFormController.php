<?php

namespace Jhoyax\LaravelContactForm\Http\Controllers;

use App\Http\Controllers\Controller;
use Jhoyax\LaravelContactForm\Eloquent\ContactFormSubmission;
use Jhoyax\LaravelContactForm\Events\ContactFormSubmittedEvent;
use Jhoyax\LaravelContactForm\Http\Requests\ContactFormRequest;

class ContactFormController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactFormRequest $request)
    {
        $submission = ContactFormSubmission::create($request->all());

        event(new ContactFormSubmittedEvent($submission));

        return back()->with('message', __('contact_form::messages.submitted'));
    }
}
