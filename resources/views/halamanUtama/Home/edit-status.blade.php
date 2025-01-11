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
        <div class="mt-0 border-y border-y-slate-200 py-5 px-0 ">
            {{-- profile,username,tgl delete --}}
            <div class="flex  items-center ">
                {{-- img --}}
                <div class="self-start max-w-[20%] sm:max-w-[30%]  lg:max-w-[10%] ">
                    <div class="w-[50px] h-[50px] sm:w-[85px] sm:h-[85px]  lg:w-[60px] lg:h-[60px] object-center rounded-full  overflow-hidden">
                        <img src="/storage/{{ $status->user->avatar ?? 'profile/imgDefault.png'}}" alt="" class="">
                    </div>
                </div>
                {{-- akhir img --}}

                {{-- username dan tgl  --}}
                <div class="ms-2 sm:ms-3 lg:ms-4 max-w-[85%] lg:max-w-[85%] me-2 lg:me-4 ">
                    <h1 class=" font-firaSans text-slate-800 text-sm sm:text-xl lg:text-base font-medium break-words mb-0 sm:mb-1 lg:mb-0">{{ $status->user->name }}</h1>
                    <span class="text-[0.65rem] sm:text-base lg:text-xs text-slate-500 ">{{ $status->created_at->format('d F Y') }} | {{ $status->created_at->diffForHumans() }}</span>
                </div>
                {{-- akhir username dan tanggal --}}

            </div>
            {{-- akhir profile,username,tgl delete --}}

            {{-- isi status  --}}
            <div class="mt-5 sm:mt-8 lg:mt-10 ">
                <div class="w-full mt-0 ">
                    <form action="/statuses/{{ $status['id'] }}" method="post" class="w-[95%] lg:w-[90%] mx-0 lg:mx-0">
                        @csrf
                        @method('put')
                        <textarea id="content" cols="30" rows="10" name="content" class="w-full  h-[40px] sm:h-[60px]  lg:h-[60px] p-2 px-0 border-b border-slate-950  outline-none active:border-b text-[0.69rem] sm:text-lg lg:text-sm resize-none " placeholder="Edit your Status" required maxlength="3000"> {{ $status->content }} </textarea>
                        <button type="submit" class="w-[24%] sm:w-[17%] lg:w-[12%] h-6 sm:h-9 lg:h-8 bg-teal-800 rounded-lg lg:rounded-xl mt-2 sm:mt-2 lg:mt-2 text-white font-semibold text-[0.6rem] sm:text-sm lg:text-xs"> Update </button>

                        {{-- error max status --}}
                        @error('content')
                            <div class="mt-2 text-[0.68rem] sm:text-base  lg:text-xs  text-center  text-red-500">
                                <h1>{{ $message }}</h1>
                            </div>
                        @enderror
                        {{-- akhir error max status --}}
                    </form>
                </div>
                {{-- <span class="font-poppins text-slate-900 break-words">{{ $status->content }}</span> --}}
            </div>
            {{-- akhir isi status --}}

            {{-- like,back to all post --}}
            <div class=" mt-10 lg:mt-12 flex justify-between">
                <span class="text-sm sm:text-xl lg:text-base">
                    <span class="fas fa-heart me-1 "> </span>
                    {{ $status->likes->count() }}
                </span>
                <span> <a href="/home" class=" text-slate-700 text-xs sm:text-base lg:text-xs">Back To Home</a></span>
            </div>
            {{-- akhir like,back to all post --}}

        </div>
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
