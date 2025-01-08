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
    <div class="w-[84%] sm:w-[88%] lg:w-[60%] ml-[16%] sm:ml-[12%] lg:ml-[20%] px-2 lg:px-4  overflow-x-hidden">
        {{-- profile --}}
        <div class="mt-5 overflow-x-hidden">
            @include('halamanUtama.tengah.data-profile')
        </div>
        {{-- akhir profile --}}


        {{-- status  --}}
        <div class="mt-14 lg:mt-24 text-center">
            <h1 class="font-firaSans text-sm sm:text-2xl lg:text-xl font-medium text-slate-800">All Post</h1>
        </div>
        @forelse ($statuses->sortByDesc('created_at') as $status)
            @include('halamanUtama.tengah.status')
        @empty
            <div class="mt-5 sm:mt-7 lg:mt-5 text-center border-t-slate-500 border-t">
                <h1 class="font-firaSans text-center text-xs sm:text-base lg:text-xs font-medium text-slate-500 mt-2 ">None Post</h1>
            </div>
        @endforelse
        {{--akhir status --}}
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
