<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FollowController extends Controller
{
    public function follow(User $user){
        $follower = auth()->user();// Mendapatkan pengguna yang sedang login (pengikut).

        $follower->followings()->attach($user); // Menambahkan pengguna yang ingin diikuti ke daftar "followings" pengguna yang login.
        return redirect('/' . 'profile/' . $user->username); // Mengarahkan kembali ke halaman profil dengan pesan sukses.
    }

    public function unfollow(User $user){
        $follower = auth()->user();// Mendapatkan pengguna yang sedang login (pengikut).

        $follower->followings()->detach($user); // Menambahkan pengguna yang ingin diikuti ke daftar "followings" pengguna yang login.
        return redirect('/' . 'profile/' . $user->username) ; // Mengarahkan kembali ke halaman profil dengan pesan sukses.
    }
}
