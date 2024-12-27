<div class=" {{ Request::is('profile') ? 'mt-5 border-y border-y-slate-200' : 'mt-16 border-y border-y-slate-200' }}  py-5 px-0 ">
    {{-- profile,username,tgl delete --}}
    <div class="flex  items-center ">

        {{-- img --}}
        <div class="self-start max-w-[10%]">
            <div class="w-[60px]  h-[60px] object-center rounded-full  overflow-hidden">
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
        <div class="ms-4 max-w-[85%]  me-4 ">
            <div class="font-firaSans text-slate-900 text-base font-medium break-words">
                <a href="
                @if ($status->user->id == auth()->user()->id)
                    /profile
                @else
                    /profile/{{ $status->user->username }}
                @endif">
                    {{ $status->user->name }}
                </a>
            </div>
            <span class="text-xs text-slate-500">
                {{ $status->created_at->format('d F Y') }} |
                {{ $status->created_at->diffForHumans() }}
                @if ($status->created_at != $status->updated_at )
                    | Edit : {{ $status->updated_at->diffForHumans() }}
                @endif
            </span>
        </div>
        {{-- akhir username dan tanggal --}}

        {{-- delete btn  --}}
        @if (auth()->user()->id == $status->user_id)
            <div class="ms-auto  self-start place-items-center">
                <form action="/statuses/{{$status['id']  }}" method="post">
                    @method('delete')
                    @csrf
                    <button class="" type="submit">
                        <i class="fa-regular fa-circle-xmark text-2xl text-red-600"></i>
                    </button>
                </form>
            </div>
        @endif
        {{-- akhir delete btn --}}
    </div>
    {{-- akhir profile,username,tgl delete --}}

    {{-- isi status  --}}
    <div class="mt-10">
        <span class="font-poppins text-slate-900 break-words">{{ $status->content }}</span>
    </div>
    {{-- akhir isi status --}}

    {{-- like,edit,view --}}
    <div class="mt-12 flex justify-between">
        {{-- like --}}
        <span>
            @if (Auth::user()->likesIdea($status))
                <form action="/status/{{ $status->id }}/unlike" method="post">
                    @csrf
                    <input type="hidden" name="redirect" value="{{ request()->fullUrl() }}">
                    <button type="submit" class="fw-light nav-link fs-6">
                        <span class="fas fa-heart me-1"> </span>
                        {{ $status->likes()->count() }}
                    </button>
                </form>
            @else
                <form action="/status/{{ $status->id }}/like" method="post">
                    @csrf
                    <input type="hidden" name="redirect" value="{{ request()->fullUrl() }}">
                    <button type="submit" class="fw-light nav-link fs-6">
                        <span class="far fa-heart me-1"> </span>
                        {{ $status->likes()->count() }}
                    </button>
                </form>
            @endif

        </span>
        {{-- akhir like --}}

        <span class="text-[0.77rem] text-slate-700">
            {{-- jika user yang login sesuai dengan user_id pada status maka diperbolehkan untuk edir --}}
            @if (auth()->user()->id == $status->user_id)
                <a href="/statuses/{{ $status['id'] }}/edit">Edit</a> |
                <a href="{{ Request::is('statuses/'.$status['id'])  ? '/home' : '/'.'statuses/'.$status['id'] }}">
                    {{ Request::is('statuses/'.$status['id'])  ? 'View all Post' : 'View' }}
                </a>
            @else
                <a href="{{ Request::is('statuses/'.$status['id'])  ? '/home' : '/'.'statuses/'.$status['id'] }}">
                    {{ Request::is('statuses/'.$status['id'])  ? 'View all Post' : 'View' }}
                </a>
            @endif

        </span>
    </div>
    {{-- akhir like,edit,view --}}

</div>


