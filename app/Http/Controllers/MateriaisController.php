<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\Mail\Contato;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
class MateriaisController extends Controller
{
    public function index()
    {
        $materiais = json_decode(file_get_contents("public/materiais.json"), true);
        $func = function($m) {
            if(isset($m['content'])) {
                $m['exerpt'] = Str::of($m['content'])->words(60, '[...]');
            } else {
                $m['exerpt'] = "Sem conteúdo";
            }
            return $m;
        };

        
        $materiais = array_map($func, $materiais);
        
        
        // $order = Order::findOrFail($orderId);
        // print_r($materiais);
        
        return view("materiais")->with(["materiais"=>$materiais]);
        // return response()->json(['resp' => $res]);
        // echo "Enviado";
        // exit;
    }
}
