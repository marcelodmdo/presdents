<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\Contato;
use App\Http\Controllers\TratamentosController as Tratamentos;
class PageController extends Controller
{
    public function index()
    {
        $opts = [
            "take" => 2
        ];
        $trats = new Tratamentos;
        $odontologicos = $trats->createCollection("odontologicos", $opts);
        $opts = [
            "take" => 2
        ];
        $estetico = $trats->createCollection("estetico", $opts);

        $excepts = [];
        foreach($odontologicos as $o) {
            $excepts[] = $o["slug"];
            unset($o);
        }
        foreach($estetico as $e) {
            $excepts[] = $e["slug"];
            unset($e);
        }
        $opts = [
            "take" => 5,
            "random" => true,
            "except" => $excepts
        ];
        $e = $trats->createCollection("estetico", $opts);
        $o = $trats->createCollection("odontologicos", $opts);
        $slider = $e->merge($o)->random(6);
        // print_r($slider);exit;
        // $array = collect($tratamentos)->sortBy('slug')->reverse()->toArray();
        // $order = Order::findOrFail($orderId);
        // print_r($array);
        $all = collect($odontologicos)->merge($estetico);
        // exit;
        // print_r($all);exit;
        return view("home")->with(["tratamentos"=>["odonto"=>$odontologicos, "estetico"=> $estetico, "all" => $all, "slider"=>$slider]]);
        
    }
    // public function tratamentos()
    // {
    //     return view("tratamentos");
    // }
    public function about()
    {
        return view("about");
    }
    public function agendamentos()
    {
        return view("agendamentos");
    }
    public function contato()
    {
        return view("contato");
    }
    public function agendar()
    {
        return redirect('https://agendar.dentaloffice.com.br/4bwx4ax');
    }
    
}
