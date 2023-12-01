<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\Contracts\HasApiTokens;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $resultat = [
            'message' => '',
            'statut' => false,
        ];
        $request->validate([
        'email' => 'email|required',
        'password' => 'required'
        ]);
        $user = User::where('email', '=', $request->email)->first();

        if($user){
            $password = Hash::check($request->password, $user->password);
            if ($password) {
                $tokenResult = $user->createToken('authToken')->plainTextToken;
                $resultat = [
                    'message' => 'login successful',
                    'statut' => true,
                    'token' => $tokenResult
                ];
            } else {
                $resultat = [
                    'message' => 'password invalid',
                    'statut' => false
                ];
            }
            return response()->json($resultat);
        } else {
            return response()->json($resultat);
        }
    } 
}
