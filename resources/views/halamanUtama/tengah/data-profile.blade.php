{{-- profile,username,edit profile --}}
<div class="flex  items-center ">
    {{-- img --}}
    <div class="self-start  max-w-[15%]">
        <div class="w-[80px]  h-[80px] object-center rounded-full  overflow-hidden">
            @if (auth()->user()->id == $user->id )
                <img src="/storage/{{ auth()->user()->avatar ?? 'profile/imgDefault.png'}}" alt="" class="">
            @else
                <img src="/storage/{{ $user->avatar ?? 'profile/imgDefault.png'}}" alt="" class="">
            @endif
        </div>
    </div>
    {{-- akhir img --}}

    {{-- username , name --}}
    <div class="ms-5 max-w-[80%] me-5">
        {{-- nama --}}
        @if (auth()->user()->id == $user->id )
            <h1 class="font-firaSans font-medium text-slate-800 text-lg break-words">{{ Str::limit(auth()->user()->username, 30, '...') }}</h1>
        @else
            <h1 class="font-firaSans font-medium text-slate-800 text-lg break-words">{{ Str::limit($user->username, 30, '...') }}</h1>
        @endif
        {{-- akhir nama --}}

        {{-- follow,following,likes,post --}}
        <p class="text-xs font-firaSans mt-1">
            <span class="font-semibold">
                {{-- banyak followers --}}
                @if (auth()->user()->id == $user->id )
                    {{ auth()->user()->followers()->count() }}
                @else
                    {{  $user->followers()->count()}}
                @endif
                {{-- akhir banyak followers --}}
            </span> Followers
            <span class="ms-3 font-semibold">
                {{-- banyak following/mengikuti --}}
                @if (auth()->user()->id == $user->id )
                    {{ auth()->user()->followings()->count() }}
                @else
                    {{  $user->followings()->count()}}
                @endif
                {{-- akhir banyak following/mengikuti --}}
            </span> Following
            <span class="ms-3 font-semibold">
                {{-- banyak following/mengikuti --}}
                @if (auth()->user()->id == $user->id )
                    {{ auth()->user()->status()->withCount('likes')->get()->sum('likes_count') }}
                @else
                    {{ $user->status()->withCount('likes')->get()->sum('likes_count') }}
                @endif
                {{-- akhir banyak following/mengikuti --}}
            </span> Likes
            <span class="ms-3 font-semibold">
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
    {{-- akhir username,name --}}

    {{-- edit profile   --}}
    @if (auth()->user()->id == $user->id )
        <a href="/profile/{{ $user->username }}/edit" class="ms-auto  self-center place-items-center font-firaSans text-xs text-slate-800 font-medium">
            <button class="bg-sky-100 px-4 py-2 rounded-md"> Edit Profile </button>
        </a>
    @else
        <div class="ms-auto  self-center place-items-center font-firaSans text-xs text-slate-100 font-medium">
            @if (Auth::user()->follows($user))
                <form action="/{{ $user->id }}/unfollow" method="post">
                    @csrf
                    <button class="bg-sky-600 px-4 py-2 rounded-md" type="submit"> UnFollow </button>
                </form>
            @else
                <form action="/{{ $user->id }}/follow" method="post">
                    @csrf
                    <button class="bg-sky-600 px-4 py-2 rounded-md" type="submit"> Follow </button>
                </form>
            @endif
        </div>
    @endif
    {{-- edit profile --}}
</div>
{{-- akhir profile,username,edit profile --}}

{{-- bio ,username , tgl join --}}
<div class="mt-7 px-2 text-xs text-slate-900">

    {{-- username --}}
    @if (auth()->user()->id == $user->id )
        <h1 class="font-firaSans text-sm italic break-words">{{ Str::limit(auth()->user()->name, 30, '...') }}</h1>
    @else
        <h1 class="font-firaSans text-sm italic break-words">{{ Str::limit($user->name, 30, '...') }}</h1>
    @endif
    {{-- akhir username --}}


    {{-- bio --}}
    @if (auth()->user()->id == $user->id )
        <h1 class="break-words">{{ auth()->user()->bio ?? '' }}</h1>
    @else
        <h1 class="break-words">{{ $user->bio ?? '' }}</h1>
    @endif
    {{-- akhir bio --}}

    {{-- tgl join --}}
    <div class="mt-1 text-slate-600 text-[0.7rem]">
        @if (auth()->user()->id == $user->id )
            <i class="fa-solid fa-calendar-days me-1"></i> Joined, {{ auth()->user()->created_at->format('d F Y') }}
        @else
            <i class="fa-solid fa-calendar-days me-1"></i> Joined, {{ $user->created_at->format('d F Y') }}
        @endif
    </div>
    {{-- akhir tgl join  --}}
</div>
{{-- akhir bio dan tgl join --}}
