@extends('halamanUtama/layout')

@section('content')
<div class="flex">
    {{-- Left --}}
    <div class="w-[16%] sm:w-[12%] lg:w-[20%] fixed z-0 border-r border-r-slate-300 h-screen overflow-y-hidden  px-2 lg:px-8">

        <div class="mt-2 flex flex-col content-evenly h-full">
            {{-- logo img --}}
            @include('halamanUtama.left.logo-img')
            {{-- akhir logo img  --}}

            {{-- menu  --}}
            @include('halamanUtama.left.menu')
            {{-- akhir menu  --}}

            {{-- profile and log out --}}
            @include('halamanUtama.left.profile-and-logout')
            {{-- akhir profile --}}
        </div>
    </div>
    {{-- Akhir Left --}}

    {{-- Tengah --}}
    <div class="w-[84%] sm:w-[88%] lg:w-[60%] ml-[16%] sm:ml-[12%] lg:ml-[20%] px-2 lg:px-4 mb-12  overflow-x-hidden">
        @include('halamanUtama.tengah.form-validation-profile')
    </div>
    {{-- akhir tengah  --}}



</div>
@endsection
