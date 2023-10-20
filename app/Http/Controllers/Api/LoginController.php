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
        $message='message';
        $resultat = false;
        $request->validate([
        'email' => 'email|required',
        'password' => 'required'
        ]);
        $user = User::where('email', '=', $request->email)->first();

        if($user){
            $password = Hash::check($request->password, $user->password);
            if ($password) {
                $tokenResult = $user->createToken('authToken')->plainTextToken;
                $resultat = true;
                return response()->json([
                    $tokenResult,
                    $message => 'Login successful',
                    $resultat => true
                ]);
            } else {
                $message = 'Password invalid';
                $resultat = false;
                return response()->json($message, $resultat);
            }
        } else {
            $message = 'User invalide';
            $resultat = false;
            return response()->json([
                $message,
                $resultat
            ]);
        }
    } 
}
