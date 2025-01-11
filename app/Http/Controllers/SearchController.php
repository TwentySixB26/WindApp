<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $followers = auth()->user()->followers()->latest()->limit(5)->get();

        $query = User::inRandomOrder();

        if (request('search')) {
            $query = $query ->where('username', 'like' , '%' . request('search') . '%')
                            ->orWhere('name', 'like' , '%' . request('search') . '%');
        }

        $users = $query->take(100)->get();

        return view('halamanUtama/search/search',[
            'head' => 'Search Users',
            'followers' => $followers,
            'users' => $users,

        ]) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
