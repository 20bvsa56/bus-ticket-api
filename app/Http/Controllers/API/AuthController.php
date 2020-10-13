<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\Login as LoginResource;


class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required | unique:users',
            'password' => 'required',
            'phoneNumber' => 'required | max:10',
        ]);

        $validatedData['password'] = bcrypt($request->password);
        $validatedData['role_id'] = 2;

        $users = User::create($validatedData);
        return response ($users);
        $users->save;

    }

    public function login()
    {
        $log = request(['firstName', 'password']);
        if (Auth::guard('web')->attempt(request(['firstName', 'password'])) == false) {
            return response('Invalid');
        }
//        return response('Valid');
        //return LoginResource::collection($log);
       return response($log);
        // return response(['Login Successful.']);

    }

}

