<div class="mt-11 lg:mt-20 mb-14 ">
        @forelse ($status->coments->sortByDesc('created_at') as $coment)
            <div class="flex  items-center mb-14 lg:mb-16">

                {{-- img --}}
                <div class="self-start  max-w-[20%] sm:max-w-[30%]  lg:max-w-[10%]">
                    <div class="w-[45px] h-[45px] sm:w-[85px] sm:h-[85px]  lg:w-[60px] lg:h-[60px] object-center rounded-full  overflow-hidden">
                        <img src="/storage/{{ $coment->user->avatar ?? 'profile/imgDefault.png'}}" alt="" class="">
                    </div>
                </div>
                {{-- akhir img --}}

                {{-- username dan tgl  --}}
                <div class="ms-4 max-w-[75%] lg:max-w-[85%]  me-4 text-[0.65rem] sm:text-base lg:text-xs">
                    <a href="/profile/{{ $coment->user->username }}" class="font-firaSans text-slate-700  font-medium break-words">{{ $coment->user->name }}</a> |
                    <span class=" font-firaSans text-slate-700"> {{ $coment->created_at->diffForHumans() }}</span>
                    <h1 class="font-firaSans text-slate-800 break-words mt-1 lg:mt-2 ">{{ $coment->coment }}</h1>
                </div>
                {{-- akhir username dan tanggal --}}

                {{-- delete btn  --}}
                @if (auth()->user()->id == $coment->user_id)
                    <div class="ms-auto  self-start place-items-center">
                        <form action="/statuses/{{ $status->id }}/coment/{{ $coment->id }}" method="post">
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
        @empty
            <p class="text-center text-slate-400 font-medium text-xs lg:text-base">No Comments Found.</p>
        @endforelse
    </div>
