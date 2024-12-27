<div class="mt-6">
    {{-- text --}}
    <h1 class="font-medium text-slate-700 font-firaSans text-base">New user joins</h1>
    {{-- akhir text --}}

    {{-- user --}}
    <div class="mt-3">

        @foreach ($allUsers as $allUser)
            <div class="flex gap-2 mb-2">
                <div class="w-[39px] h-[39px] object-center rounded-full  overflow-hidden ">
                    <a href="/profile/{{ $allUser->username }}">
                        <img src="/storage/{{ $allUser->avatar ?? 'profile/imgDefault.png'}}" alt="" class="">
                    </a>
                </div>
                <div class="self-center w-[70%] ms-2">
                    <a href="/profile/{{ $allUser->username }}">
                        <p class=" break-words text-xs font-semibold">{{ $allUser->name }}</p>
                    </a>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mt-2">
        <a href="/home" class="font-firaSans text-xs hover:underline">Moree &raquo;</a>
    </div>
    {{-- akhir user --}}
</div>
