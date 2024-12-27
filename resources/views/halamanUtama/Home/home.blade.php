@extends('halamanUtama/layout')

@section('content')
<div class="flex">
    {{-- Left --}}
    <div class="w-[16%] lg:w-[20%] fixed z-0 border-r border-r-slate-300 h-screen overflow-y-hidden  px-2 lg:px-8">
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
    <div class="w-[84%] lg:w-[60%] ml-[16%] lg:ml-[20%] px-2 lg:px-4">

        {{-- Other and Following --}}
        @include('halamanUtama.tengah.other-and-following')
        {{-- akhir Other and Following --}}

        {{-- post status  --}}
        @include('halamanUtama.tengah.post-status')
        {{-- akhir post status  --}}


        {{-- status  --}}
        @foreach ($statuses as $status)
            @include('halamanUtama.tengah.status')
        @endforeach
        {{-- akhir status  --}}
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
