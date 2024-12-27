<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
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

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'content' => 'required|max:3000',
        ]);


        //user_id akan diambil ketika anda sudah login dan akan diisi sesuai dengan yg sedang login
        $validated["user_id"] = auth()->id();

        //memasukan data ke db
        Status::create($validated) ;

        //melakukan redirect ketika code sebelumnya dieksekusi entah sukses atau gagal
        return redirect('/home') ;
    }


    /**
     * Display the specified resource.
     */
    public function show(Status $status)
    {
        $followers = auth()->user()->followers()->latest()->limit(5)->get();

        return view('halamanUtama/Home/show-post-detail',[
            'head' => 'Home',
            'status' => $status,
            'followers' => $followers
        ]) ;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Status $status)
    {
        $followers = auth()->user()->followers()->latest()->limit(5)->get();

        //jika user yang login tidak sesuai dengan postingan yg berleasi dengan idea maka tidak bisa melakukan destroy,edit,update
        if (auth()->id() !== $status->user_id) {
            abort(404) ;
        }

        // $editing digunakan untuk digunakan ideaCard.blade.php jika bernilai true maka akan ditampilkan dan jika false maka form tersebut tidak akan ditampilkan
        return view('halamanUtama/Home/edit-status',[
            'status' => $status,
            'head' => 'Home',
            'followers' => $followers
        ]) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Status $status)
    {
         //jika user yang login tidak sesuai dengan postingan yg berleasi dengan idea maka tidak bisa melakukan destroy,edit,update
        if (auth()->id() !== $status->user_id) {
            abort(404) ;
        }

        //melakukan validasi data
        request()->validate([
            'content' => 'required|max:3000'
        ]) ;

        // data yang telah lolos validasi maka disimpan divariabel
        $status->content = request()->get('content') ;

        //melakukan save atau mengirim data ke database
        $status->save() ;

        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Status $status)
    {
        //jika user yang login tidak sesuai dengan postingan yg berleasi dengan idea maka tidak bisa melakukan destroy,edit,update
        if (auth()->id() !== $status->user_id) {
            abort(404) ;
        }

        // Idea::destroy($idea->id) ;
        $status->delete() ;
        return redirect('/home');
    }
}
