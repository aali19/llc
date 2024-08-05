<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class NmiService
{
    protected $client;
    protected $apiUrl;
    protected $apiKey;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiUrl = env('NMI_API_URL');
        $this->apiKey = env('NMI_API_KEY');
    }

    public function processPayment($amount, $creditCardNumber, $expirationDate)
    {
        $endpoint = "{$this->apiUrl}/transactions";
        $body = [
            'json' => [
                'api_key' => $this->apiKey,
                'amount' => $amount,
                'credit_card_number' => $creditCardNumber,
                'expiration_date' => $expirationDate,
                // Add other required parameters as needed
            ]
        ];

        try {
            $response = $this->client->post($endpoint, $body);
            $responseBody = json_decode($response->getBody()->getContents(), true);

            return $responseBody;
        } catch (\Exception $e) {
            Log::error("NMI API Error: " . $e->getMessage());
            return ['error' => 'Transaction failed'];
        }
    }

    // Add other methods for refunds, transaction queries, etc.
}
