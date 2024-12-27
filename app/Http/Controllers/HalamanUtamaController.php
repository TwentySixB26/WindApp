<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\User;
use Illuminate\Http\Request;

class HalamanUtamaController extends Controller
{
    public function index(){

        //mengambil data di database
        $statuses = Status::orderBy('created_at' , 'DESC')->get() ;
        $followers = auth()->user()->followers()->latest()->limit(5)->get();

        //mengembalikan data
        return view('halamanUtama/Home/home',[
            'head' => 'Home',
            'followers' => $followers,
            'statuses' => $statuses,
            'menu' => 'home',
        ]) ;
    }
}
