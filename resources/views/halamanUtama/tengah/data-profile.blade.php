{{-- profile,username,edit profile --}}
<div class="flex items-center  overflow-x-hidden relative  ">
    {{-- img --}}
    <div class="self-start max-w-[20%] sm:max-w-[30%] lg:max-w-[15%] ">
        <div class="w-[50px] h-[50px] sm:w-[85px] sm:h-[85px]   lg:w-[80px]  lg:h-[80px] object-center rounded-full  overflow-hidden">
            @if (auth()->user()->id == $user->id )
                <img src="/storage/{{ auth()->user()->avatar ?? 'profile/imgDefault.png'}}" alt="" class="">
            @else
                <img src="/storage/{{ $user->avatar ?? 'profile/imgDefault.png'}}" alt="" class="">
            @endif
        </div>
    </div>
    {{-- akhir img --}}

    {{-- username , follow --}}
    <div class="ms-3 sm:ms-6 lg:ms-5 max-w-[80%] sm:max-w-[70%]  lg:max-w-[80%] me-0 lg:me-5 self-center ">
        {{-- nama --}}
        @if (auth()->user()->id == $user->id )
            <h1 class="font-firaSans font-medium text-slate-800 text-sm sm:text-xl lg:text-lg break-words">{{ Str::limit(auth()->user()->username, 30, '...') }}</h1>
        @else
            <h1 class="font-firaSans font-medium text-slate-800 text-sm sm:text-xl lg:text-lg break-words">{{ Str::limit($user->username, 30, '...') }}</h1>
        @endif
        {{-- akhir nama --}}

        {{-- follow,following,likes,post --}}
        <p class="text-[0.6rem] sm:text-base lg:text-sm font-firaSans mt-1 whitespace-nowrap">
            <span class="font-semibold">
                {{-- banyak followers --}}
                @if (auth()->user()->id == $user->id )
                    {{ auth()->user()->followers()->count() }}
                @else
                    {{  $user->followers()->count()}}
                @endif
                {{-- akhir banyak followers --}}
            </span> Followers
            <span class="ms-2 lg:ms-3 font-semibold">
                {{-- banyak following/mengikuti --}}
                @if (auth()->user()->id == $user->id )
                    {{ auth()->user()->followings()->count() }}
                @else
                    {{  $user->followings()->count()}}
                @endif
                {{-- akhir banyak following/mengikuti --}}
            </span> Following
            {{-- <span class="ms-2 lg:ms-3 font-semibold"> --}}
                {{-- banyak following/mengikuti --}}
                {{-- @if (auth()->user()->id == $user->id )
                    {{ auth()->user()->status()->withCount('likes')->get()->sum('likes_count') }}
                @else
                    {{ $user->status()->withCount('likes')->get()->sum('likes_count') }}
                @endif --}}
                {{-- akhir banyak following/mengikuti --}}
            {{-- </span> Likes --}}
            <span class="ms-2 lg:ms-3 font-semibold">
                {{-- banyak post --}}
                @if (auth()->user()->id == $user->id )
                    {{ auth()->user()->status()->count() }}
                @else
                    {{  $user->status()->count()}}
                @endif
                {{-- akhir banyak post --}}
            </span> Post
        </p>
        {{-- akhir follow,following,likes,post --}}

    </div>
    {{-- akhir username,follow --}}

    {{-- edit profile   --}}
    @if (auth()->user()->id == $user->id )
        <a href="/profile/{{ $user->username }}/edit" class="ms-auto self-start  font-firaSans  absolute right-0">
            <button class="bg-sky-100 px-2 sm:px-6 lg:px-4 py-1 sm:py-2 lg:py-2 text-[0.48rem] sm:text-sm lg:text-xs text-slate-800 font-medium rounded-md whitespace-nowrap "> Edit Profile </button>
        </a>
    @else
        <div class="ms-auto  self-start  font-firaSans text-xs text-slate-100 font-medium  absolute right-0">
            @if (Auth::user()->follows($user))
                <form action="/{{ $user->id }}/unfollow" method="post">
                    @csrf
                    <button class="bg-sky-600   px-2 sm:px-6 lg:px-4 py-1 sm:py-2 lg:py-2 text-[0.48rem] sm:text-sm lg:text-xs  rounded-md" type="submit"> UnFollow </button>
                </form>
            @else
                <form action="/{{ $user->id }}/follow" method="post">
                    @csrf
                    <button class="bg-sky-600  px-2 sm:px-6 lg:px-4 py-1 sm:py-2 lg:py-2 text-[0.48rem] sm:text-sm lg:text-xs rounded-md" type="submit"> Follow </button>
                </form>
            @endif
        </div>
    @endif
    {{-- edit profile --}}
</div>
{{-- akhir profile,username,edit profile --}}

{{-- bio ,username , tgl join --}}
<div class="mt-7">

    {{-- username --}}
    @if (auth()->user()->id == $user->id )
        <h1 class="font-firaSans italic break-words  text-xs sm:text-lg lg:text-sm text-slate-900 mb-1">{{ Str::limit(auth()->user()->name, 30, '...') }}</h1>
    @else
        <h1 class="font-firaSans italic break-words  text-xs sm:text-lg lg:text-sm text-slate-900 mb-1">{{ Str::limit($user->name, 30, '...') }}</h1>
    @endif
    {{-- akhir username --}}


    {{-- bio --}}
    @if (auth()->user()->id == $user->id )
        <h1 class="break-words text-[0.63rem] sm:text-[0.95rem] lg:text-[0.75rem]  text-slate-900">{{ auth()->user()->bio ?? '' }}</h1>
    @else
        <h1 class="break-words text-[0.63rem] sm:text-[0.95rem] lg:text-[0.75rem]  text-slate-900">{{ $user->bio ?? '' }}</h1>
    @endif
    {{-- akhir bio --}}

    {{-- tgl join --}}
    <div class="mt-1 text-slate-600 text-[0.6rem] sm:text-[0.85rem] lg:text-[0.7rem]">
        @if (auth()->user()->id == $user->id )
            <i class="fa-solid fa-calendar-days me-1"></i> Joined, {{ auth()->user()->created_at->format('d F Y') }}
        @else
            <i class="fa-solid fa-calendar-days me-1"></i> Joined, {{ $user->created_at->format('d F Y') }}
        @endif
    </div>
    {{-- akhir tgl join  --}}
</div>
{{-- akhir bio dan tgl join --}}
