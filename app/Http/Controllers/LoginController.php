<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function index(){
        return view('login/login', [
            'head' => 'Login Wind App',
            "succes" => false
        ]) ;
    }

    public function authenticate(){
        //melakukan validasi ketika input diketik
        $validated = request()->validate(
            [
                'email' => 'required|email:dns|' ,
                'password' => 'required|' ,
            ]
        ) ;


        //melakukan login/mengecek data yang ingin login ada di database atau tidak
        if (Auth::attempt($validated)) {
            request()->session()->regenerate();     //membuat session agar ketika login sukses maka semua data yang berhubungan  dengan yang login tadi bisa diakses
            return redirect('/home');        //redirect
        }  ;

        return  view('/login/login', ["head" => 'Login Wind App',"succes" => true]) ;



    }


    public function redirect(){
            return Socialite::driver('google')->redirect() ;
            //1. socialite harus di instal terlebih dahulu,seperti pada awal instlasi tadi
            //composer require Laravel/socialite


            //2. google diambil bersasarkan yang ditulis di services.php
    }

    public function callback() {
            //mengambil data user yang melakukan autentikasi
            $googleUser=  Socialite::driver(driver: 'google')->user();


            //mengecek apakah akun yang melakukan autentikasi ada di database atau tidak
            $user = User::where(['email'=> $googleUser->email])->first();

            // Mendapatkan URL gambar avatar
            $avatarUrl = $googleUser->avatar;

            // Mengunduh gambar dari URL
            $imageContents = Http::get($avatarUrl);

            // Membuat nama file untuk gambar
            $imageName = basename($avatarUrl). '.jpg';

            // Menyimpan gambar ke dalam storage 'profile' di folder 'public'
            Storage::put("public/profile/{$imageName}", $imageContents);


            //jika user tidak ada di database
            if (!$user) {
                //jika user tidak ada maka akan didaftarkan terlebih dahulu ke dalam database
                $user = User::create([
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'username' => 'user'. $googleUser->id ,
                    'avatar' => 'profile/' . $imageName,
                    'password' => 'password' . $googleUser->email,

                ]) ;

                $user->username = 'user' . $user->id;
                $user->save();
            }



            //jika ada di database maka akan melakukan autentikasi
            Auth::login($user) ;

            //melakukan redirect jika login sukses
            return redirect('/home') ;
        }


    public function logout() {
            Auth::logout();
            request()->session()->invalidate();
            request()->session()->regenerateToken();
            return redirect('/login');
        }

}
