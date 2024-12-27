@extends('register/layout')

@section('content')
<div class="containerr font-poppins ">

    <div class="forms-container">
        {{-- alert sukses daftar  --}}
        <div class=" absolute z-10 w-full h-full {{ $succes == true ? 'block' : 'hidden' }}" style="background-color: rgba(0, 0, 0, 0.8)">
            <div class=" min-h-[50%] w-[10%] items-center justify-center m-auto mt-10 flex">
                <div class="rounded-lg bg-gray-50 px-16 py-14">

                    <div class="flex justify-center">
                        <dotlottie-player src="https://lottie.host/bba2ba44-72af-410c-80dd-7887bf84ffd2/MsLhVpP6bg.lottie" background="transparent" speed="1" style="width: 200px; height: 200px" loop autoplay></dotlottie-player>
                    </div>

                    <h3 class="my-4 text-center text-3xl font-semibold text-gray-700">Congratuation!!!</h3>
                    <p class="w-[230px] text-center font-normal text-gray-600"> Your account has been registered</p>
                    <a href="/register"><button class="mx-auto mt-10 block rounded-xl border-4 border-transparent bg-orange-400 px-6 py-3 text-center text-base font-medium text-orange-100 outline-8 hover:outline hover:duration-300">Close</button></a>
                </div>
            </div>
        </div>
        {{-- alert akhir sukses daftar  --}}


        {{-- register --}}
        <div class="signin-signup ">
            <form action="/register" method="post" class="sign-in-form ">
                @csrf
                <h2 class="title font-bold">Sign Up</h2>


                {{-- nama  --}}
                <div class="input-field  @error('name') border border-red-500 @enderror">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Name" id="name" class="text-base " required name="name"  value="{{ old('name') }}"/>
                </div>
                @error('name')
                    <div class="text-xs text-red-500 text-left w-full px-7"> {{ $message }}</div>
                @enderror
                {{-- akhir nama --}}


                {{-- username  --}}
                <div class="input-field  @error('username') border border-red-500 @enderror">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username" id="username" class="text-base " required name="username"  value="{{ old('username') }}"/>
                </div>
                @error('username')
                    <div class="text-xs text-red-500 text-left w-full px-7"> {{ $message }}</div>
                @enderror
                {{-- akhir username --}}



                {{-- email --}}
                <div class="input-field @error('email') border border-red-500 @enderror">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="Email" id="email" class="text-base" required name="email"  value="{{ old('email') }}"/>
                </div>
                @error('email')
                    <div class="text-xs text-red-500 text-left w-full px-7"> {{ $message }}</div>
                @enderror
                {{-- akhir email  --}}

                {{-- password --}}
                <div class="input-field @error('password') border border-red-500 @enderror">
                    <i class="fa-solid fa-lock cursor-pointer showPassword"></i>
                    <input type="password" placeholder="Password" class="text-base inputPassword" id="password" required name="password"/>
                </div>
                @error('password')
                    <div class="text-xs text-red-500 text-left w-full px-7"> {{ $message }}</div>
                @enderror
                {{-- akhir password --}}

                {{-- konfirmasi password --}}
                <div class="input-field @error('password_confirmation') border border-red-500 @enderror">
                    <i class="fa-solid fa-lock cursor-pointer showPassword"></i>
                    <input type="password" placeholder="Password Confirm" class="text-base inputPassword" id="password_confirmation" required name="password_confirmation"/>
                </div>
                @error('password_confirmation')
                    <div class="text-xs text-red-500 text-left w-full px-7"> {{ $message }}</div>
                @enderror
                {{-- akhir konfirmasi password --}}

                {{-- btn register --}}
                <div class="mt-8 w-[100%]">
                    <button type="submit" class="w-full py-3 px-6 text-sm tracking-wide rounded-full text-white bg-emerald-600 hover:bg-emerald-700 focus:outline-none">
                        REGISTER
                    </button>
                </div>
                {{-- akhir btn register --}}

            </form>
        </div>
        {{-- akhir register --}}

    </div>

    <div class="panels-container">
        {{-- register --}}
        <div class="panel left-panel">
            <div class="content">
                <h3 class="font-firaSans">already have an account?</h3>
                <p>
                    Log in to WindApp if you already have an account and enjoy all the Wind App features
                </p>
                <a href="/login">
                    <button class="btn transparent" id="sign-up-btn">
                        LOGIN
                    </button>
                </a>
            </div>
            {{-- <img src="img/log.svg" class="image" alt="" /> --}}
        </div>
        {{-- akhir register --}}

    </div>


</div>
@endsection


