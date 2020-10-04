<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phoneNumber' => 'required',
            'role_id' => 'required'
        ]);

        $validatedData['password'] = bcrypt($request->password);

        $users = User::create($validatedData);
        $users->save;

    }

    public function login()
    {
        $log = request(['email', 'password']);
        if (Auth::guard('web')->attempt(request(['email', 'password'])) == false) {
            return response(['Invalid Credentials.']);
        }
        return response(['data' => $log]);
        return response(['Login Successful.']);

    }

}

