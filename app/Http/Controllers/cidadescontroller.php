<?php

namespace App\Http\Controllers;

use App\Models\cidades;
use Illuminate\Http\Request;

class cidadescontroller extends Controller
{

    public function index() {
        return view('cidades.index', [
            'cidades' => cidades::all()
            ]);       
    }

    public function create() 
    {
        return view("cidades.create");
    }

    public function store(Request $request)
    {
        cidades::create([
            'nome' => $request->nome,
            'uf' => $request->uf
        ]);
        return redirect('/cidades');
    }
}
