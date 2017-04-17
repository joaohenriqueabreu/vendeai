<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

use App\Http\Requests;
use App\Reseller;

# Include the Autoloader (see "Libraries" for install instructions)
//require '../vendor/autoload.php';
use Mailgun\Mailgun;

class MailController extends Controller
{
    public static function storeNotification($reseller_id, $type)
    {
        # Using Mailgun API
        # Instantiate the client.
        $mgClient = new Mailgun(env('MAILGUN_SECRET'));
        $domain = env('MAILGUN_DOMAIN');

        $reseller = Reseller::find($reseller_id);

        // Constroi a mnesagem do email
        $content = 'ID: ' . $reseller->id . ", Nome: " . $reseller->name . " url: " . route('resellers.products.index', $reseller->id);

        # Make the call to the client.
        $result = $mgClient->sendMessage($domain, array(
            'from' => env('MAILGUN_FROM'),
            'to' => 'joaohenriqueabreu@gmail.com',
            'subject' => $type == 'new' ? '[VENDE AI DEV] - Nova loja solicitada!' : '[VENDE AI DEV] - Atualização solicitada!',
            'text' => $content
        ));

        return $result;
    }

    public function send(Request $request)
    {
        # Using Mailgun API
        # Instantiate the client.
        $mgClient = new Mailgun(env('MAILGUN_SECRET'));
        $domain = env('MAILGUN_DOMAIN');

        // Constroi a mnesagem do email
        $conteudo = 'Nome: ' . $request->name . ', telefone: ' . $request->phone .
            ', email: ' . $request->email . ' mensagem: ' . $request->conteudo;

        # Make the call to the client.
        $result = $mgClient->sendMessage($domain, array(
            'from' => env('MAILGUN_FROM'),
            'to' => env('MAILGUN_TO'),
            'subject' => 'Novo email recebido do site! Assunto: [' . $request->subject . ']',
            'text' => $conteudo
        ));
        return response()->json(['message' => 'Request completed']);
//        return redirect()->route('landing.home', ['message'=>'Item deleted successfully.']);
//        return true;
    }
}
