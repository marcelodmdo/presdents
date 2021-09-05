<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\Mail\Contato;
use Illuminate\Support\Facades\Mail;

class MateriaisController extends Controller
{
    public function index()
    {
        $materiais = file_get_contents("public/materiais.json");

        // $order = Order::findOrFail($orderId);
        // print_r($materiais);
        return view("materiais")->with(["materiais"=>json_decode($materiais, false)]);
        // return response()->json(['resp' => $res]);
        // echo "Enviado";
        // exit;
    }
}
