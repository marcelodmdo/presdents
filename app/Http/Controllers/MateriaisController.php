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
        $nM = array();
        foreach($materiais as $m) {
            if(isset($m["content"])) {
                $nM[] = $m;
            }
        }
        
        $func = function($m) {
            
            if(isset($m['content'])) {
                $m['exerpt'] = Str::of($m['content'])->words(50, '[...]');
                return $m;
            } else {
                $m['exerpt'] = "Sem conteúdo";
            }
            
        };
        // echo "<pre>";
        // print_r($nM);exit;

        
        $materiais = array_map($func, $nM);
        
        
        // $order = Order::findOrFail($orderId);
        // print_r($materiais);
        
        return view("materiais")->with(["materiais"=>$materiais]);
        // return response()->json(['resp' => $res]);
        // echo "Enviado";
        // exit;
    }
    public function reading ($slug) {
        $materiais = json_decode(file_get_contents("public/materiais.json"), true);
        $material = null;
        foreach($materiais as $m) {
            if($m["slug"] === $slug) {
                $material = $m;
                break;
            }
        }
        if(!$material) {
            abort(404);
        }
        // echo "<pre>";
        // print_r($material);exit;
        return view("reading")->with(["materia"=>$material]);
    }
}
