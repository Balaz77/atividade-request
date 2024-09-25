<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
   public function users(UserRequest $request){
        $user=User::create([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'idade' => $request->idade,
            'email' => $request->email,
            'senha' => bcrypt($request->senha),
            'endereco' => $request->endereco,
            'complemento' => $request->complemento,
        ]);

        return response()->json($user,201);
   }
}
