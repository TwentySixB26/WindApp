@extends('halamanUtama/layout')

@section('content')
<div class="flex">
    {{-- Left --}}
    <div class="w-[20%] fixed z-0 border-r border-r-slate-300 h-screen overflow-y-hidden px-8">
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
    <div class="w-[60%] ml-[20%] px-4 mb-12">
        {{-- profile --}}
        <div class="mt-5">
            @include('halamanUtama.tengah.data-profile')
        </div>
        {{-- akhir profile --}}


        {{-- status  --}}
        <div class="mt-24 text-center">
            <h1 class="font-firaSans text-lg font-medium text-slate-800">All Post</h1>
        </div>
        @forelse ($statuses->sortByDesc('created_at') as $status)
            @include('halamanUtama.tengah.status')
        @empty
            <div class="mt-10 text-center border-t-slate-500 border-t">
                <h1 class="font-firaSans text-center text-xs font-medium text-slate-500 mt-2 ">None Post</h1>
            </div>
        @endforelse
        {{--akhir status --}}
    </div>
    {{-- akhir tengah  --}}

    {{-- Right --}}
    <div class="w-[20%] fixed right-0  border-l border-l-slate-300 h-screen overflow-y-auto px-4 overflow-x-hidden">

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
