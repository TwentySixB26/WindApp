<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class FollowingController extends Controller
{
    public function index(Status $status){

        //mengambil data di database
        // laravel tolong carikan saya status,yaitu status user yang di follow oleh orang yang sedang login

        // ambil data followers dari user yang sedang login
        //harus mengunakan pluck karena yang dibutuhkan hanya id, maka hasilnya yang diperleh dari pluck adalah bentuknya array contohnya ['1' , '3' ,'10]
        $query = auth()->user()->followings->pluck('id');

        // ambil data status dimana status yang akan diambil harus mempunyai user_id yang sama dengan $query
        // harus mengunakan whereIn karena jika where yang diabndingakan hanya satu,dan akan eror jika hasil dari pluck yang berupa array itu dibandingkan
        // where jika data yang ingin dibandingkan hanya satu, whereIn jika data yang ingin dibandingkan banyak, dan whereHas digunakan untuk jika ingin membandingkan data tapi berdasarkan tabel lain
        $statuses = Status::whereIn('user_id', $query)->orderBy('created_at', 'DESC')->get();


        $followers = auth()->user()->followers()->latest()->limit(5)->get();

        //mengembalikan data
        return view('halamanUtama/Home/following/following',[
            'head' => 'Home',
            'followers' => $followers,
            'statuses' => $statuses,
            'menu' => 'home',
        ]) ;
    }
}
