<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusLikeController extends Controller
{
    public function like(Status $status)
    {
        $liker = auth()->user();

        $liker->likes()->attach($status);
        $redirectUrl = request('redirect', url('/home'));

        return redirect($redirectUrl);
    }


    public function unlike(Status $status)
    {
        $liker = auth()->user();

        $liker->likes()->detach($status);
        $redirectUrl = request('redirect', url('/home'));

        return redirect($redirectUrl);
    }
}
