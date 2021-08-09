<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\Contato;
use Illuminate\Support\Facades\Mail;

class ContatoController extends Controller
{
    public function enviar(Request $request)
    {
        // $order = Order::findOrFail($orderId);
        $data = $request->toArray();
        // Ship order...
        Mail::to('presidenteclinicadafamilia@gmail.com')->bcc('marcelodmdo@gmail.com')->send(new Contato($data));
        try {
            return response()->json(['success'], 200);
        } catch(\Exception $e){
                // Get error here
                
            // return response(['error' => $e]);
            return response()->json(['error' => $e], 503);
        }
        
        // $res = Mail::to('marcelodmdo@gmail.com')->send(new Contato());
        // return response()->json(['resp' => $res]);
        // echo "Enviado";
        // exit;
    }
}
