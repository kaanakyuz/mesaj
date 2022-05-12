<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationData;

class LoginController extends Controller
{
    //
    function  index (Request $request) {

        $validated = $request->validate([
            'email' => 'email'
        ]);

       $user = User::where('email', $request->email)->first();
        if($user) {
        $authToken = $user->createToken('auth-token')->plainTextToken;
            return response()->json($authToken);
        } else {
            return response()->json("Token Bulunamadı");
        }
    }
}
