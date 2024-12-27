@extends('login/layout')

@section('content')
<div class="containerr font-poppins ">
    <div class="forms-container">
        <div class="signin-signup">
            {{-- alert gagal  --}}
            <div  class="absolute z-10 w-[100%]  justify-center wrapping {{ $succes == true ? 'flex ' : 'hidden' }} " id="alertGagal">
                <div role="alert" class="mt-3 relative  flex-col w-[70%] md:w-[50%] p-2 text-sm text-white bg-red-600  rounded-md">

                    <div class="flex p-2">
                        <p class="text-xs text-left  self-center"> Please check the email or password you have entered again</p>

                        <dotlottie-player class="inline-block " src="https://lottie.host/774c1540-8719-4288-aa25-2a6f5a1c2618/Lz62PqUxdl.lottie" background="transparent" speed="1" style="width: 90px; height: 90px" loop autoplay></dotlottie-player>
                    </div>

                    <button class="buttonHilang flex items-center justify-center transition-all w-8 h-8 rounded-md text-white hover:bg-white/10 active:bg-white/10 absolute top-1.5 right-1.5" type="button" id="btn-Error">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-5 w-5" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                </div>
            </div>
            {{-- akhir alert gagal --}}


            {{-- Login --}}
            <form action="/login" method="post" class="sign-in-form ">
                @csrf
                <h2 class="title font-bold">Sign in</h2>

                {{-- email   --}}
                <div class="input-field @error('email') border border-red-500 @enderror">
                    <i class="fas fa-user"></i>
                    <input type="email" placeholder="Email" class="text-base" name="email" id="email"/>
                </div>
                @error('email')
                    <div class="text-xs text-red-500 text-left w-full px-7"> {{ $message }}</div>
                @enderror
                {{-- akhir email --}}

                {{-- password  --}}
                <div class="input-field @error('password') border border-red-500 @enderror">
                    <i class="fa-solid fa-lock cursor-pointer showPassword"></i>
                    <input type="password" placeholder="Password" class="text-base inputPassword" name="password" id="password"/>
                </div>
                @error('password')
                    <div class="text-xs text-red-500 text-left w-full px-7"> {{ $message }}</div>
                @enderror
                {{-- akhir password --}}

                {{-- btn login  --}}
                <div class="mt-8 w-[100%]">
                    <button type="submit" class="w-full py-3 px-6 text-sm tracking-wide rounded-full text-white bg-emerald-600 hover:bg-emerald-700 focus:outline-none">
                        LOGIN
                    </button>
                </div>
                {{-- akhir btn login --}}

                {{-- lupa password --}}
                <div class="text-center w-[90%]">
                    <p class="text-[11px] mt-3 text-gray-500 font-normal">did you forget your password? <a href="/register" class="text-blue-600 font-normal hover:underline ml-1 whitespace-nowrap">Change Password</a></p>
                </div>
                {{-- akhir lupa password --}}

                {{-- or --}}
                <div class="my-4 flex items-center gap-4 w-[100%]">
                    <hr class="w-full border-gray-400" />
                    <p class="text-sm text-gray-800 text-center">or</p>
                    <hr class="w-full border-gray-400" />
                </div>
                {{-- akhir or  --}}

                {{-- login via gmail  --}}
                <div class="w-[100%]">
                    <a href="/google/redirect">
                        <button type="button" class="w-full flex items-center justify-center gap-4 py-3 px-6 text-sm tracking-wide text-gray-800 border border-gray-400 rounded-full bg-gray-50 hover:bg-gray-100 focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" class="inline" viewBox="0 0 512 512">
                            <path fill="#fbbd00"
                                d="M120 256c0-25.367 6.989-49.13 19.131-69.477v-86.308H52.823C18.568 144.703 0 198.922 0 256s18.568 111.297 52.823 155.785h86.308v-86.308C126.989 305.13 120 281.367 120 256z"
                                data-original="#fbbd00" />
                            <path fill="#0f9d58"
                                d="m256 392-60 60 60 60c57.079 0 111.297-18.568 155.785-52.823v-86.216h-86.216C305.044 385.147 281.181 392 256 392z"
                                data-original="#0f9d58" />
                            <path fill="#31aa52"
                                d="m139.131 325.477-86.308 86.308a260.085 260.085 0 0 0 22.158 25.235C123.333 485.371 187.62 512 256 512V392c-49.624 0-93.117-26.72-116.869-66.523z"
                                data-original="#31aa52" />
                            <path fill="#3c79e6"
                                d="M512 256a258.24 258.24 0 0 0-4.192-46.377l-2.251-12.299H256v120h121.452a135.385 135.385 0 0 1-51.884 55.638l86.216 86.216a260.085 260.085 0 0 0 25.235-22.158C485.371 388.667 512 324.38 512 256z"
                                data-original="#3c79e6" />
                            <path fill="#cf2d48"
                                d="m352.167 159.833 10.606 10.606 84.853-84.852-10.606-10.606C388.668 26.629 324.381 0 256 0l-60 60 60 60c36.326 0 70.479 14.146 96.167 39.833z"
                                data-original="#cf2d48" />
                            <path fill="#eb4132"
                                d="M256 120V0C187.62 0 123.333 26.629 74.98 74.98a259.849 259.849 0 0 0-22.158 25.235l86.308 86.308C162.883 146.72 206.376 120 256 120z"
                                data-original="#eb4132" />
                            </svg>
                            Continue with google
                        </button>
                    </a>
                </div>
                {{-- akhir login via gmail --}}
            </form>
            {{-- akhir login --}}
        </div>
    </div>


    <div class="panels-container">
        {{-- login --}}
        <div class="panel left-panel">
            <div class="content">
                <h3 class="font-firaSans">Don't have an account?</h3>
                <p>
                    register your account here, and get some of our features if you are already registered!
                </p>
                <a href="/register">
                    <button class="btn transparent" id="sign-up-btn">
                        Sign Up
                    </button>
                </a>
            </div>
            {{-- <img src="img/log.svg" class="image" alt="" /> --}}
        </div>
        {{-- akhir login --}}

        {{-- register --}}
        {{-- <div class="panel right-panel">
            <div class="content">
                <h3>already have an account?</h3>
                <p>
                    Come on, log in now and connect with your friends all over the world.
                </p>
                <button class="btn transparent border-lime-400" id="sign-in-btn">
                    Sign in
                </button>
            </div>
            <img src="img/register.svg" class="image" alt="" />
        </div> --}}
        {{-- akhir register --}}

    </div>
</div>

@endsection
