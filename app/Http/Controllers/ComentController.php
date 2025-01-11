<?php

namespace App\Http\Controllers;

use App\Models\Coment;
use App\Models\Status;
use Illuminate\Http\Request;

class ComentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Status $status)
    {

        $validated = request()->validate(
            [
                'coment' => 'required|max:1500',
            ]) ;

        $validated["user_id"] = auth()->id();
        $validated["status_id"] = $status->id;

        Coment::create(
            [
                'coment' => $validated["coment"] ,
                'status_id' => $validated["status_id"] ,
                'user_id' =>  $validated["user_id"] ,
            ]
        ) ;

        return redirect('/statuses' . '/' .$status->id ) ;
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
    public function destroy(Status $status,Coment $coment)
    {
        //jika user yang login tidak sesuai dengan postingan yg berleasi dengan idea maka tidak bisa melakukan destroy,edit,update
        if (auth()->id() !== $coment->user_id) {
            abort(404) ;
        }

        $coment->delete() ;
        return redirect('/statuses' . '/' .$status->id ) ;
    }
}
