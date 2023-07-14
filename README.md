# Facteur PHP SDK

> Send emails in your PHP applications with Facteur.

## Requirements

- PHP 8.1 or higher
- Composer
- A [Facteur](https://www.facteur.dev) account, with an API key and a verified sender domain

## Installation

```bash
composer require facteurdev/facteur-php
```

## Usage

```php
use FacteurDev\FacteurPhp\Facteur;

$facteur = new Facteur('<your-api-key>');
try {
    $facteur->sendEmail([
        'from' => 'hank@rearden.com',
        'to' => 'dagny@taggart.com',
        'subject' => 'Hello, World!',
        'text' => 'it works!',
        'html' => "<h1>it <u>works</u>!</h1>"
    ]);
} catch (Exception $e) {
    echo $e->getMessage();
}
```
