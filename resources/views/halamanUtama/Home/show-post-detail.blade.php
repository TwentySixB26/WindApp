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
    <div class="w-[84%] sm:w-[88%] lg:w-[60%] ml-[16%] sm:ml-[12%] lg:ml-[20%] px-2 lg:px-4">
    {{-- status  --}}
        @include('halamanUtama.tengah.status')
        {{-- akhir status  --}}

        {{-- post komentar --}}
        <div class="mt-10 lg:mt-14">
            <h1 class="mb-4 font-medium text-xs sm:text-base lg:text-base">Coment :</h1>
            <form action="/statuses/{{ $status->id }}/coment" method="post">
                @csrf
                <textarea   id="coment" cols="30" rows="10" name="coment" class="w-full  h-[40px] p-2 px-0 border-b border-slate-950  outline-none active:border-b text-[0.65rem] sm:text-sm lg:text-sm resize-none " placeholder="Post your coment" required maxlength="1500" value="{{ old('coment') }}" ></textarea>
                <button type="submit" class="w-[28%] h-8 sm:w-[22%] sm:h-12 lg:w-[15%] lg:h-8 bg-teal-800 rounded-xl lg:rounded-xl mt-3 lg:mt-2 ms-[72%] sm:ms-[78%] lg:ms-[85%] text-white font-semibold text-[0.58rem] sm:text-sm lg:text-xs"> Send Coment </button>

                @error('coment')
                <div class="mt-2 text-[0.68rem] sm:text-base  lg:text-xs text-center  text-red-500">
                    <h1>{{ $message }}</h1>
                </div>
                @enderror
            </form>
        </div>
        {{-- akhir post komentar --}}



        {{-- komentar  --}}
        @include('halamanUtama.tengah.komentar')
        {{-- akhir komentar  --}}




    </div>
    {{-- akhir tengah  --}}

    {{-- Right --}}
    <div class="w-[20%] fixed right-0  border-l border-l-slate-300 h-screen overflow-y-auto px-4 overflow-x-hidden hidden lg:block">

        {{-- new followers --}}

        <hr>
        {{-- akhir new followers --}}
        @include('halamanUtama.right.new-followers')
        {{-- most frequent interactions --}}
        @include('halamanUtama.right.most-frequent-interactions')
        {{-- akhir most frequent interactions --}}
    </div>
    {{-- akhir right --}}

</div>
@endsection
