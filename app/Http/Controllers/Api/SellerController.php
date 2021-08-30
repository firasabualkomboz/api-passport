<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerController extends Controller
{

    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $seller = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        $token = $seller->createToken('SellerToken')->accessToken;
        return response()->json(['token' => $token], 200);


    }
    public function login(Request $request)
    {
        $login = $request->validate([
            'email' => 'required',
            'password' =>  'required',
        ]);

        if(!Auth::attempt($login))
        {
            return response(['message' => 'Invalid login credentials']);
        }

        $accessToken = Auth::user()->createToken('authToken')->accessToken;

        return response(['seller' => Auth::user() , 'access_token_seller' => $accessToken]);

    }


}
