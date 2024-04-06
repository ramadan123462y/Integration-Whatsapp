<?php

namespace App\Http\Services;

use Twilio\Rest\Client;


class Watsapp
{

    public function SendWhatsAppMessage($meassge, $to_number_whatsapp = "+201091087457")
    {
        $sid    = env('TWILIO_SID');
        $token  = env('TWILIO_AUTH_TOKEN');
        $twilio = new Client($sid, $token);

        $message = $twilio->messages
            ->create(
                "whatsapp:$to_number_whatsapp", // to
                array(
                    "from" => env('TWILIO_WHATSAPP_NUMBER'),
                    "body" => $meassge
                )
            );


    }
}
