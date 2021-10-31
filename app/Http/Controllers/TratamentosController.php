<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\Mail\Contato;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
class TratamentosController extends Controller
{
    public function createCollection($c, Array $args = []) {
        $coll = json_decode(file_get_contents("public/content/".$c.".json"), true);
        $nT = array();
        foreach($coll as $t) {
            $t["tipo"] = $c;
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
        
        if(isset($args["random"])) {
            $coll = collect($coll)->random($args["take"]);
        } else {
            $coll = collect($coll)->sortBy('slug')->values();
        }
        if(isset($args["except"])) {
            $list = [];
            foreach($coll as $i => $c) {
                // print_r($c);
                if( in_array($c["slug"], $args["except"])) {
                    continue;
                }
                $list[] = $c;
            }
            $coll = collect($list);
        }
        
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
        $ref = null;
        $total = count($collect);
        
        foreach($collect as $i => $c) {
            // print_r($c);
            if($c["slug"] === $opts["except"]) {
                $ref = $i;
                continue;
            }
            $list[] = $c;
        }
        
        // $list = collect($list)->slice($ref, $opts["take"]);
        // echo $total;
        // echo $opts["take"];
        $list__ = collect($list)->slice($ref, $opts["take"])->all();
        $list_ = [];
        $c = count($list__);
        
        // print_r($list__);
        if($c < $opts["take"]) {
            $add = [];
            $d = $opts["take"] - $c;
            while($c < $opts["take"]) {
                $c++;
            }
            // echo "resto" . ($c - $total);
            $list_ = collect($list)->slice(0, $d);
            // echo "Menor".$c;
            // echo count($list_);
            
        } 
        $list = collect($list__)->merge($list_);
        // print_r($list_);
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
