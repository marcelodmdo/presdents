<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\Contato;

class PageController extends Controller
{
    public function index()
    {
        return view("home");
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
