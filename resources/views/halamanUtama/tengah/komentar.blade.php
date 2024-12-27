<div class="mt-20 mb-14 ">
        @forelse ($status->coments->sortByDesc('created_at') as $coment)
            <div class="flex  items-center mb-16">

                {{-- img --}}
                <div class="self-start max-w-[10%]">
                    <div class="w-[50px]  h-[50px] object-center rounded-full  overflow-hidden">
                        <img src="/storage/{{ $coment->user->avatar ?? 'profile/imgDefault.png'}}" alt="" class="">
                    </div>
                </div>
                {{-- akhir img --}}

                {{-- username dan tgl  --}}
                <div class="ms-4 max-w-[85%]  me-4 ">
                    <a href="/profile/{{ $coment->user->username }}" class="font-firaSans text-slate-700 text-xs font-medium break-words">{{ $coment->user->name }}</a> | <span class="text-xs font-firaSans text-slate-700"> {{ $coment->created_at->diffForHumans() }}</span>
                    <h1 class="font-firaSans text-slate-800 break-words mt-1 text-xs ">{{ $coment->coment }}</h1>
                </div>
                {{-- akhir username dan tanggal --}}

                {{-- delete btn  --}}
                @if (auth()->user()->id == $coment->user_id)
                    <div class="ms-auto  self-start place-items-center">
                        <form action="/statuses/{{ $status->id }}/coment/{{ $coment->id }}" method="post">
                            @method('delete')
                            @csrf
                            <button class="" type="submit">
                                <i class="fa-regular fa-circle-xmark text-lg text-red-600"></i>
                            </button>
                        </form>
                    </div>
                @endif
                {{-- akhir delete btn --}}
            </div>
        @empty
            <p class="text-center text-slate-400 font-medium">No Comments Found.</p>
        @endforelse
    </div>
