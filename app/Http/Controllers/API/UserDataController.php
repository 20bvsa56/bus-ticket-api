<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserData as UserDataResource;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class UserDataController extends Controller
{
    public function getUsersData(Request $request){
        //get user data
        $id=$request->input('id');

        $usersData = DB::table('users')->where('id','=',$id)->get();

        //return collection of user data as a resource . here, collection returns a list of items
        return UserDataResource::collection($usersData);
    }
}
