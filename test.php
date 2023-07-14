<?php
require "vendor/autoload.php";
use FacteurDev\FacteurPhp\Facteur;

$facteur = new Facteur("facteur-ae71ffeb-378e-42ce-a5c9-208a920235a8");
try {
    $facteur->sendEmail([
        'from' => 'no-reply@gardien.dev',
        'to' => 'bouchezalexis1@gmail.com',
        'subject' => 'hello world',
        'text' => 'it works!',
        'html' => "<h1>it <u>works</u>!</h1>"
    ]);

    echo "Email sent!";
} catch (Exception $e) {
    echo $e->getMessage();
}