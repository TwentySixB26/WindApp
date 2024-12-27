<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{


    public function index(){
        return view('register/register',[
            "head" => 'Wind App Register',
            "succes" => false
            ]) ;
    }

    public function store(){
        // melakukan validasi


        $validated = request()->validate(
            [
                'name' => 'required|min:2|max:50',
                'username' => 'required|unique:users,username',
                'email' => 'required|email:dns|unique:users,email' ,
                'password' => 'required|min:8|confirmed'
            ]) ;


        //jika lolos validasi maka password akan di enkripsi
        $validated['password'] = Hash::make($validated["password"]) ;



        //create user
        User::create(
            [
                'name' => $validated["name"] ,
                'username' => $validated["username"] ,
                'email' => $validated["email"] ,
                'password' => $validated["password"] ,
            ]
        ) ;


        //redirect
        // return redirect('/login');
        return  view('/register/register', ["head" => 'Wind App Register',"succes" => true]) ;
    }
}
