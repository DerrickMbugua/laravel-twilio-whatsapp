<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;

use function PHPUnit\Framework\once;

class whatsappController extends Controller
{

    public function message(){
// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md


// Find your Account SID and Auth Token at twilio.com/console
// and set the environment variables. See http://twil.io/secure
$sid    = "AC38a6c200dee219b0f026f681557a7e82";
$token = getenv("TWILIO_AUTH_TOKEN");
$twilio = new Client($sid, $token);

$message = $twilio->messages
                  ->create("whatsapp:+254715153806", // to
                           [
                               "mediaUrl" => ["https://images.unsplash.com/photo-1545093149-618ce3bcf49d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=668&q=80"],
                               "from" => "whatsapp:+14155238886"
                           ]
                  );

print($message->sid);
    }
}
