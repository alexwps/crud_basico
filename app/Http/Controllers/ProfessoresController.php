<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfessoresController extends Controller
{ 
    //
    public function index()
    {
        $listaProfessores = DB::table('professores')->orderBy('nome','asc')->get();
        $listaProfessores = json_decode($listaProfessores, true);
        $totalProfessores = DB::table('professores')->count();
        return view('professores.index', ['lista' => $listaProfessores, 'total' => $totalProfessores ]);
    }

    public function create()
    {
        return view('professores.create');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'nome' => 'required|min:2|max:50',
            'email' => 'email:rfc,dns'
        ]);
        
        //não esquecer import do Professor model.
        Professor::create([
            'nome' => $request->nome,
            'idade' => $request->idade,
            'email' => $request->email
        ]);
        return redirect('/professores')->with('msgSuccess', 'Professor cadastrado com sucesso');
    }

    public function edit($id)
    {
        //find é o método que faz select * from professores where id= ?
        $professor = Professor::find($id);
        //retornamos a view passando a TUPLA de professor consultado
        return view('professores\edit', ['professor' => $professor]);
    }
    public function update(Request $request)
    {
        //find é o método que faz select * from professores where id= ?
        $professor = Professor::find($request->id);
        //método update faz um update professor set nome = ?, idade=? ...
        $professor->update([
            'nome' => $request->nome,
            'idade' => $request->idade,
            'email' => $request->email
        ]);
        return redirect('/professores');
    }

    public function destroy($id)
    {
       
        $professor = Professor::find($id);
        $professor->delete();
        return redirect('/professores');
    }
}
