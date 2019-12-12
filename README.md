# Laravel Contact Form

Simple contact form for your site.

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