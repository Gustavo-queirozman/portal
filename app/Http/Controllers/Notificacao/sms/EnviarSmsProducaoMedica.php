<?php

namespace App\Http\Controllers\Notificacao\sms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Vonage\Client;
use Vonage\Client\Credentials\Basic;

class EnviarSmsProducaoMedica extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $basic  = new Basic('YOUR_API_KEY', 'YOUR_API_SECRET');
        $client = new Client($basic);

        $response = $client->sms()->send(
            new \Vonage\SMS\Message\SMS('+5538999400531', '+5538999400531', '')
        );

        if ($response->getStatus() == 0) {
            echo "Message sent successfully.";
        } else {
            echo "Message failed with status: " . $response->getStatus();
        }
    }
}
