<?php

namespace Jhoyax\LaravelContactForm\Eloquent;

use Illuminate\Database\Eloquent\Model;

class ContactFormSubmission extends Model
{
    protected $fillable = ['name', 'email_address', 'message'];
}
