<?php



namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index()
    {
        $statuses = Status::where('user_id', auth()->id())->orderBy('created_at', 'DESC')->get();
        $user = auth()->user();
        $followers = auth()->user()->followers()->latest()->limit(5)->get();


        // dd($user) ;
        return view('halamanUtama/profile/profile',[
            'head' => 'Profile',
            'menu' => 'profile',
            'statuses' => $statuses ,
            'followers' => $followers,
            'user' => $user,
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
    public function show(User $user)
    {
        $statuses = Status::where('user_id', $user->id)->orderBy('created_at', 'DESC')->get();
        $followers = auth()->user()->followers()->latest()->limit(5)->get();
        return view('halamanUtama/profile/profile',[
            'head' => 'Profile',
            'menu' => 'profile',
            'statuses' => $statuses ,
            'followers' => $followers,
            'user' => $user,
        ]) ;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //jika user yang login tidak sesuai dengan postingan yg berleasi dengan idea maka tidak bisa melakukan destroy,edit,update
        if (auth()->user()->username !== $user->username) {
            abort(404) ;
        }

        // $editing digunakan untuk digunakan ideaCard.blade.php jika bernilai true maka akan ditampilkan dan jika false maka form tersebut tidak akan ditampilkan
        return view('halamanUtama.profile.edit-profile',[
            'user' => $user,
            'head' => 'Edit Profile'
        ]) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( User $user)
    {
        if (auth()->user()->username !== $user->username) {
            abort(404) ;
        }

        $validated = request()->validate([
            'name' => 'required|min:2|max:100',
            'username' => 'required|max:60|unique:users,username,' . $user->id,
            'avatar' => 'image|file|max:7168',
            'bio' => 'max:300'
        ]) ;

        if (request()->has('avatar')) {
            //untuk memasukan img ke file storage
            $imagePath = request()->file('avatar')->store('profile','public') ;

            //validated['image'] di isi dengan imagePath untuk namanya, jadi hasilnya nama di db nya adalah storage/gambar yang dikirm.jpg
            $validated['avatar'] = $imagePath ;

            Storage::disk('public')->delete($user->avatar ?? '') ;
        } ;

        $user->update($validated);
        return redirect('/profile') ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
