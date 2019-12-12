# Laravel Contact Form

This package allows you to include contact form anywhere in views.
You can also add/edit fields in the table by overwriting the migration file.

## Installation

```
composer require jhoyax/laravel-contact-form
```

Optional: Overwrite config, migrations, lang or views

```
php artisan vendor:publish --tag=config
php artisan vendor:publish --tag=migrations
php artisan vendor:publish --tag=lang
php artisan vendor:publish --tag=views
```

## Configuration

Update contact form message receiver in your .env file.

```
CONTACT_FORM_SEND_TO=hello@world.com
```

## Usage

Include the form.

```
@include('contact_form::default')
```
