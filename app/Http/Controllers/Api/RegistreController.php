<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegistreController extends Controller
{
    public function registre(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $user = new User();
        $user->username = $request->username ;
        $user->email = $request->email ;
        $user->password = bcrypt($request->password);

        $res = $user->save();

        return response()->json([
            'message' => 'Create user successfull',
            'status_code' => 200,
            'data' => $res,
        ]);
    }
}
