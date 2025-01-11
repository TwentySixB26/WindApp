<div class="mt-8 sm:mt-10 lg:mt-14">
    @forelse ($users as $user)
        <div class=" mb-20 sm:mb-32 lg:mb-32 ">
            <div class="flex items-center">
                {{-- img --}}
                <div class="self-start  max-w-[30%] sm:max-w-[30%]  lg:max-w-[40%] ">
                    <div class=" w-[70px] h-[70px] sm:w-[170px] sm:h-[170px]  lg:w-[140px] lg:h-[140px] object-center rounded-full  overflow-hidden">
                        <a href="
                        @if ($user->id == auth()->user()->id)
                            /profile
                        @else
                            /profile/{{ $user->username }}
                        @endif">
                            <img src="/storage/{{ $user->avatar ?? 'profile/imgDefault.png'}}" alt="" class="w-full">
                        </a>
                    </div>
                </div>
                {{-- akhir img --}}

                {{-- nama dan username  --}}
                <div class=" max-w-[70%] sm:max-w-[70%] lg:max-w-[60%] ms-4 sm:ms-9 lg:ms-10 me-2 lg:me-4 ">
                    {{-- nama --}}
                    <div class="w-[100%] ">
                        <h1 class="font-firaSans text-slate-900 text-sm sm:text-2xl lg:text-xl font-medium break-words  hidden sm:inline">{{ $user->name}} </h1>
                        <h1 class="font-firaSans text-slate-900 text-sm sm:text-2xl lg:text-xl font-medium break-words  inline sm:hidden">{{ Str::limit($user->name, 20, '...') }} </h1>
                    </div>
                    {{-- akhir nama --}}


                    {{-- username --}}
                    <a href="/profile/{{ $user->username }}">
                        <h1 class="font-firaSans text-slate-900 text-[0.73rem] sm:text-xl lg:text-base font-medium break-words">{{ $user->username }}</h1>
                    </a>
                    {{-- akhir username --}}
                </div>
                {{-- akhir nama dan username --}}
            </div>

            {{-- bio --}}
            <div class="w-[100%] sm:w-[90%] lg:w-[90%]  mt-4 sm:mt-6 lg:mt-7">
                <p class="break-words text-[0.62rem] sm:text-[1.03rem] lg:text-[0.8rem]  text-black font-medium"> 19 Tahun, Indonesia </p>
                <p class="break-words text-[0.62rem] sm:text-[1.03rem] lg:text-[0.8rem]  text-slate-600 mt-0 lg:mt-0"> {{ $user->bio }} </p>
            </div>
            {{-- bio --}}

        </div>
    @empty
        <div class=" text-center">
            <h1 class="font-firaSans text-xs sm:text-base lg:text-xs font-medium text-slate-600 ">User not found</h1>
        </div>
    @endforelse
</div>


