<?php

namespace FacteurDev\FacteurPhp;

use Exception;
use GuzzleHttp\Exception\GuzzleException;

class Facteur
{
    private string $apiKey;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     *
     * Send an email using the Facteur API.
     *
     * @throws Exception
     *
     * @param array $email
     *
     * @return void
     */
    public function sendEmail(array $email): void
    {
        $client = new \GuzzleHttp\Client();

        try {
            $response = $client->request(
                'POST',
                'https://facteur.dev/api/v1/emails',
                [
                    'json' => $email,
                    'headers' => [
                        'Authorization' => 'Bearer ' . $this->apiKey,
                        'Content-Type' => 'application/json',
                        'Accept' => 'application/json',
                    ],
                ]
            );
            if ($response->getStatusCode() !== 200) {
                throw new Exception('Error sending email');
            }
        } catch (GuzzleException $e) {
            throw new Exception('Error sending email');
        }
    }
}