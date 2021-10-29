<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\Mail\Contato;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
class TratamentosController extends Controller
{
    public function createCollection($c, Array $args = []) {
        $coll = json_decode(file_get_contents("public/tratamentos/".$c.".json"), true);
        $nT = array();
        foreach($coll as $t) {
            if(isset($t["content"])) {
                $nT[] = $t;
            }
        }
        
        $func = function($t) {
            
            if(isset($t['content'])) {
                $st = "";
                foreach($t['content'] as $c) {
                    $st .= '<p class="mdl-typography--font-light mdl-typography--subhead">'. $c . "</p>";
                    
                }
                $t['exerpt'] = Str::of($st)->words(50, '[...]');
                
                return $t;
            } else {
                $t['exerpt'] = "Sem conteúdo";
            }
            
        };
        // echo "<pre>";
        // print_r($nM);exit;

        
        $coll = array_map($func, $nT);
        

        $coll = collect($coll)->sortBy('slug');
        if(!empty($args)) {
            if(isset($args["all"])) {

                $coll = $coll->all();
                // print_r($coll);exit;
            }
            if(isset($args["slice"])) {
                $coll = $coll->slice(0, $args["slice"]);
            }
            if(isset($args["take"])) {
                $coll = $coll->take($args["take"]);
            }
            
        }
        // $coll = $coll->toArray();
        return $coll;
    }
    public function selectToReading($slug, $collect) {
        $material = null;
        foreach($collect as $c) {
            // print_r($c);
            if($c["slug"] === $slug) {
                $material = $c;
                break;
            }
        }
        return $material;
    }
    public function sideList($collect, $opts) {
        $list = [];
        foreach($collect as $c) {
            // print_r($c);
            if($c["slug"] === $opts["except"]) {
                
                continue;
            }
            $list[] = $c;
        }
        $list = collect($list)->take($opts["take"]);
        return $list;
    }
    public function index()
    {
        $opts = [
            "take" => 4
        ];
        $odontologicos = $this->createCollection("odontologicos", $opts);
        $opts = [
            "take" => 3
        ];
        $estetico = $this->createCollection("estetico", $opts);
        // $array = collect($tratamentos)->sortBy('slug')->reverse()->toArray();
        // $order = Order::findOrFail($orderId);
        // print_r($array);
        // exit;
        
        return view("tratamentos")->with(["tratamentos"=>["odonto"=>$odontologicos, "estetico"=> $estetico]]);
        // return response()->json(['resp' => $res]);
        // echo "Enviado";
        // exit;
    }
    public function reading ($tipo, $slug) {
        $opts = [
            "all" => 4
        ];
        $collect = $this->createCollection($tipo, $opts);
        $tratamento = $this->selectToReading($slug, $collect);
        $opts = [
            "take" => 4,
            "except" => $slug
        ];
        $sideList = $this->sideList($collect,$opts);
        // print_r($sideList);

        if(!$tratamento) {
            abort(404);
        }
        // echo "<pre>";
        // print_r($material);exit;
        return view("reading-tratamento")->with(["tratamento"=>$tratamento, "sideList"=>$sideList, "tipo" => $tipo]);
    }
}
