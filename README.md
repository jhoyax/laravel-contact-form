# Laravel Contact Form

This package allows you to include contact form anywhere in views.
You can also add/edit fields in the table by overwriting the migration file and update validation rules in config file.

## Installation

```
composer require jhoyax/laravel-contact-form
```

Optional: Overwrite config, migrations, lang or views

```
php artisan vendor:publish --tag=contact_form_config
php artisan vendor:publish --tag=contact_form_migrations
php artisan vendor:publish --tag=contact_form_lang
php artisan vendor:publish --tag=contact_form_views
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
