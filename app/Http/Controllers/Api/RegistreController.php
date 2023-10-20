<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistreController extends Controller
{
    public function registre(Request $request)
    {
        $res = '';
         $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        try {
            $user = User::create([
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
    
            $user->save();
            return response()->json([
               'message' => 'Create user successfull',
                'status_code' => 200,
                'data' => $user,
            ]);
        } catch (\Exception $e) {
            $res = $e->getMessage();
            return response()->json($res);
        }

    }
}
