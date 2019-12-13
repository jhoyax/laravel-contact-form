<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Contact Form Send "To" Address
    |--------------------------------------------------------------------------
    */

    'send' => [
        'to' => env('CONTACT_FORM_SEND_TO', 'hello@world.com'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Contact Form Request Validation Rule
    |--------------------------------------------------------------------------
    |
    | Here you may customize the validaton rule.
    |
    */

    'rules' => [
        'name' => ['required', 'min:3', 'max:500'],
        'email_address' => ['required', 'email', 'min:3', 'max:500'],
        'message' => ['required', 'min:3'],
    ],
];
