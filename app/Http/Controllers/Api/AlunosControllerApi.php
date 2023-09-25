<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Aluno;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
USE Illuminate\Support\Str;

class AlunosControllerApi extends Controller
{
    public function index()
    {
        $alunosList = Aluno::all();
        return response()->json([
            "success" => true,
            "message" => "Lista de alunos",
            "data" => $alunosList
        ], 200);
    }

    public function loginapi(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' =>
            $validator->errors()], 401);
        }
        if (Auth::attempt(['email' => $request->email, 'password'
        => $request->password])) {
            $token = Str::random(64); #Generate token
            $userLogged = User::find(Auth::user()->id);
            $userLogged->api_token = $token;
            $userLogged->update();
            return response()->json([
                'status' => 'Autorizado',
                'token' => $token
            ], 200); #return token
        } else {
            return response()->json([
                'status' => 'Não autorizado',
                'lista' => $request->all()
            ], 401);
        }
    }
}
