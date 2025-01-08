<form method="post" action="/profile/{{ $user->username }}" enctype="multipart/form-data">
    @csrf
    @method('put')


    <div class="space-y-12 mt-5 lg:mt-6">
        {{-- head  --}}
        <div class="pb-3 lg:pb-6 justify-center flex flex-col items-center">
            <h2 class="font-firaSans text-slate-800 text-xl sm:text-2xl lg:text-xl font-medium italic">Edit Your Profile</h2>
            <div class="max-w-[50%] lg:max-w-[20%] mt-5 lg:mt-3 relative bg">

                {{-- img --}}
                <div class="w-[6.9rem]  h-[6.9rem] sm:w-[8rem]  sm:h-[8rem] lg:w-[7.5rem]  lg:h-[7.5rem] object-center rounded-full overflow-hidden">
                    <img src="/storage/{{  old('avatar',$user->avatar) ??  'profile/imgDefault.png' }}" alt="{{ auth()->user()->name }}" title="{{ auth()->user()->username }}" class="w-full" id="nameImg">
                </div>
                {{-- akhir img --}}

                {{-- input file --}}
                <div class="z-10 absolute bottom-0 right-0 text-slate-50 transition-all border-2 bg-sky-600 hover:bg-sky-800 w-9 h-9 leading-8 text-center rounded-full overflow-hidden">
                    <input type="file"  name="avatar" id="img" class="absolute scale-[3] opacity-0 cursor-pointer">
                    <i class="fa-solid fa-camera "></i>
                </div>
                {{-- akhir input file --}}
            </div>

            <p class="mt-4 text-sm text-center text-slate-400 italic font-firaSans" id="nameFoto"></p>

            @error('avatar')
            <div class="mt-2 text-xs text-center  text-red-500">
                <h1>{{ $message }}</h1>
            </div>
            @enderror

        </div>
        {{-- akhir head --}}

        {{-- isi edit data --}}
        <div class="border-b border-gray-900/10 pb-12  lg:px-0">
            <div class=" grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                {{-- username --}}
                <div class="sm:col-span-3">
                    <label for="Username" class="block text-sm font-medium text-gray-900 italic">Username : </label>
                    <div class="mt-2 ">
                        <input type="text" maxlength="70" placeholder="Username" name="username" id="username" autocomplete="given-name" class="w-full h-[40px] p-6 px-0 border-b border-slate-950  outline-none active:border-b text-sm resize-none placeholder:text-sm" value="{{ old('username',$user->username) }}">
                    </div>
                    @error('username')
                        <div class="mt-2 text-xs  text-red-500">
                            <h1>{{ $message }}</h1>
                        </div>
                    @enderror
                </div>
                {{-- akhir username --}}

                {{-- name --}}
                <div class="sm:col-span-3">
                    <label for="Name" class="block text-sm font-medium text-gray-900 italic">Name : </label>
                    <div class="mt-2">
                        <input type="text" maxlength="110" placeholder="name" name="name" id="name" autocomplete="given-name" class="w-full h-[40px] p-6 px-0 border-b border-slate-950  outline-none active:border-b text-sm resize-none placeholder:text-sm" value="{{ old('name',$user->name) }}">
                    </div>
                    @error('name')
                        <div class="mt-2 text-xs  text-red-500">
                            <h1>{{ $message }}</h1>
                        </div>
                    @enderror
                </div>
                {{-- name --}}
            </div>

            <div class="mt-14 lg:mt-20 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    {{-- bio --}}
                    <div class="col-span-full">
                        <label for="bio" class="block text-sm font-medium text-gray-900 italic">Bio :</label>
                        <div class="mt-2">
                            <textarea id="bio" maxlength="310" cols="30" rows="10" name="bio" class="w-full  h-[60px] py-2 px-0 border-b border-slate-950  outline-none active:border-b text-sm resize-none " required> {{ old('bio',$user->bio) }} </textarea>
                        </div>
                        @error('bio')
                            <div class="mt-2 text-xs  text-red-500">
                                <h1>{{ $message }}</h1>
                            </div>
                        @enderror
                        <p class="mt-3 text-xs text-gray-600 italic">Write a few sentences about yourself.</p>
                    </div>
                    {{-- akhir bio --}}


            </div>
        </div>
        {{-- akhir isi edit data --}}

        {{-- btn edit --}}
        <div class="mt-4 lg:mt-6 flex items-center justify-end gap-x-6">
            <a href="/profile" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
            <button type="submit" class="rounded-md bg-sky-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-sky-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-600">Save</button>
        </div>
        {{-- akhir btn edit --}}
    </div>
</form>
