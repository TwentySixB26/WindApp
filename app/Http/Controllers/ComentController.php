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
        //mendifiniskan table yang ada ditabase
        $coment = new Coment() ;

        //memasukan id yang coment pada variabel coment
        $coment->status_id = $status->id ;

        //user id pada tabel yg ada di db diambil dari id user yg sudah login
        $coment->user_id = auth()->id() ;

        //memasukan isi coment ke dalam variabel coment yang diambil dari request yang telah diisi pada textarea
        $coment->coment = request('coment') ;

        //melakukan save atau mengirim data ke database
        $coment->save() ;



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
