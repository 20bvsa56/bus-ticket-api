<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function register(Request $request)
    {
        $firstName=$request->input('firstName');
        $lastName=$request->input('lastName');
        $email=$request->input('email');
        $password=$request->input('password');
        $phoneNumber=$request->input('phoneNumber');

        $bpassword= bcrypt($password);

        echo DB::insert('insert into users(role_id,firstName,lastName,email,password,phoneNumber) values (?,?,?,?,?,?)',[2,$firstName,$lastName,$email,$bpassword,$phoneNumber]);
    }

   public function login(Request $request){
       $email=$request->input('email');
       $password=$request->input('password');

       $data=DB::select('select id,email,password from users where email=? and  password=?',[$email,$password]);

       if(count($data)){
           return response(['data' => $data]);
           echo 'Login Successful';
       }
       else{
           echo'Error!!Login unsuccessful';
       }
   }
}
