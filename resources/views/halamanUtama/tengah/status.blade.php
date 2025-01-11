<div class=" {{ Request::is('profile') ? 'mt-5 border-y border-y-slate-200' : 'mt-4 sm:mt-12 lg:mt-16 border-y border-y-slate-200' }}  py-5 px-0 sm:px-5 lg:px-0 ">
    {{-- profile,username,tgl delete --}}
    <div class="flex  items-center relative ">

        {{-- img --}}
        <div class="self-start  max-w-[20%] sm:max-w-[30%]  lg:max-w-[10%]">
            <div class="w-[45px] h-[45px] sm:w-[85px] sm:h-[85px]  lg:w-[65px] lg:h-[65px] object-center rounded-full  overflow-hidden">
                <a href="
                @if ($status->user->id == auth()->user()->id)
                    /profile
                @else
                    /profile/{{ $status->user->username }}
                @endif">
                    <img src="/storage/{{ $status->user->avatar ?? 'profile/imgDefault.png'}}" alt="" class="">
                </a>
            </div>
        </div>
        {{-- akhir img --}}

        {{-- username dan tgl  --}}
        <div class="ms-3 sm:ms-5 lg:ms-4 max-w-[80%] lg:max-w-[85%] me-2 lg:me-4">
            <h1 class="font-firaSans text-slate-900 text-xs sm:text-xl lg:text-base font-medium break-words mb-1 sm:mb-2 lg:mb-1">
                <a href="
                @if ($status->user->id == auth()->user()->id)
                    /profile
                @else
                    /profile/{{ $status->user->username }}
                @endif">
                    {{ Str::limit($status->user->name, 20, '...') }}
                </a>
            </h1>
            <p class="text-[0.53rem] sm:text-base lg:text-xs  text-slate-500">
                {{ $status->created_at->format('d F Y') }} |
                {{ $status->created_at->diffForHumans() }}
                @if ($status->created_at != $status->updated_at )
                    | Edit : {{ $status->updated_at->diffForHumans() }}
                @endif
            </p>
        </div>
        {{-- akhir username dan tanggal --}}

        {{-- delete btn  --}}
        @if (auth()->user()->id == $status->user_id)
            <div class="ms-auto  self-start place-items-center  px-0 sm:px-2 lg:px-0">
                <form action="/statuses/{{$status['id']  }}" method="post">
                    @method('delete')
                    @csrf
                    <button class="" type="submit">
                        <i class="fa-regular fa-circle-xmark sm:text-2xl lg:text-2xl text-red-600"></i>
                    </button>
                </form>
            </div>
        @endif
        {{-- akhir delete btn --}}
    </div>
    {{-- akhir profile,username,tgl delete --}}

    {{-- isi status  --}}
    <div class="mt-6 sm:mt-11 lg:mt-10">
        <span class="font-poppins text-[0.73rem] sm:text-lg lg:text-sm  text-slate-900 break-words">{{ $status->content }}</span>
    </div>
    {{-- akhir isi status --}}

    {{-- like,edit,view --}}
    <div class="mt-7 sm:mt-12 lg:mt-12 flex justify-between">
        {{-- like --}}
        <span>
            @if (Auth::user()->likesIdea($status))
                <form action="/status/{{ $status->id }}/unlike" method="post">
                    @csrf
                    <input type="hidden" name="redirect" value="{{ request()->fullUrl() }}">
                    <button type="submit" class="text-xs sm:text-lg lg:text-base">
                        <span class="fas fa-heart me-1"> </span>
                        {{ $status->likes()->count() }}
                    </button>
                </form>
            @else
                <form action="/status/{{ $status->id }}/like" method="post">
                    @csrf
                    <input type="hidden" name="redirect" value="{{ request()->fullUrl() }}">
                    <button type="submit" class=" text-xs sm:text-lg lg:text-base ">
                        <span class="far fa-heart me-1"> </span>
                        {{ $status->likes()->count() }}
                    </button>
                </form>
            @endif

        </span>
        {{-- akhir like --}}

        <span class="text-[0.6rem] sm:text-sm lg:text-[0.77rem] text-slate-700 mx-2 lg:mx-0">
            {{-- jika user yang login sesuai dengan user_id pada status maka diperbolehkan untuk edir --}}
            @if (auth()->user()->id == $status->user_id)
                <a href="/statuses/{{ $status['id'] }}/edit">Edit</a> |
                <a href="{{ Request::is('statuses/'.$status['id'])  ? '/home' : '/'.'statuses/'.$status['id'] }}">
                    {{ Request::is('statuses/'.$status['id'])  ? 'View all Post' : 'View' }}
                </a>
            @else
                <a  href="{{ Request::is('statuses/'.$status['id'])  ? '/home' : '/'.'statuses/'.$status['id'] }}">
                    {{ Request::is('statuses/'.$status['id'])  ? 'View all Post' : 'View' }}
                </a>
            @endif

        </span>
    </div>
    {{-- akhir like,edit,view --}}

</div>


