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
    <div class="w-[60%] ml-[20%] px-4">
        {{-- status  --}}
        <div class="mt-0 border-y border-y-slate-200 py-5 px-0 ">
            {{-- profile,username,tgl delete --}}
            <div class="flex  items-center ">
                {{-- img --}}
                <div class="self-start max-w-[10%]">
                    <div class="w-[60px]  h-[60px] object-center rounded-full  overflow-hidden">
                        <img src="/storage/{{ $status->user->avatar ?? 'profile/imgDefault.png'}}" alt="" class="">
                    </div>
                </div>
                {{-- akhir img --}}

                {{-- username dan tgl  --}}
                <div class="ms-4 max-w-[85%]  me-4 ">
                    <h1 class="font-firaSans text-slate-800 text-base font-medium break-words">{{ $status->user->name }}</h1>
                    <span class="text-xs text-slate-500">{{ $status->created_at->format('d F Y') }} | {{ $status->created_at->diffForHumans() }}</span>
                </div>
                {{-- akhir username dan tanggal --}}

            </div>
            {{-- akhir profile,username,tgl delete --}}

            {{-- isi status  --}}
            <div class="mt-10">
                <div class="w-full mt-0">
                    <form action="/statuses/{{ $status['id'] }}" method="post" class="w-[90%] mx-4">
                        @csrf
                        @method('put')
                        <textarea id="content" cols="30" rows="10" name="content" class="w-full  h-[60px] p-2 px-0 border-b border-slate-950  outline-none active:border-b text-sm resize-none " placeholder="Edit your Status" required maxlength="3100"> {{ $status->content }} </textarea>
                        <button type="submit" class="w-[12%] h-8 bg-teal-800 rounded-xl mt-2 text-white font-semibold text-xs"> Update </button>
                        {{-- error max status --}}
                        @error('content')
                            <div class="mt-2 text-xs text-center  text-red-500">
                                <h1>{{ $message }}</h1>
                            </div>
                        @enderror
                        {{-- akhir error max status --}}
                    </form>
                </div>
                {{-- <span class="font-poppins text-slate-900 break-words">{{ $status->content }}</span> --}}
            </div>
            {{-- akhir isi status --}}

            {{-- like,edit,view --}}
            <div class="mt-12 flex justify-between">
                <span> <span class="fas fa-heart me-1"> </span> {{ $status->likes->count() }} </span>
                <span> <a href="/home" class="text-xs text-slate-700">Back To Home</a></span>
            </div>
            {{-- akhir like,edit,view --}}

        </div>
        {{-- akhir status  --}}
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
