<div class="my-4">
    <h1 class="font-semibold text-slate-700 font-firaSans">New Followers</h1>
    <div class="flex mt-4 gap-1 justify-left ">

        @foreach ($followers as $follower)
            <div class="w-[39px] h-[39px] object-center rounded-full  overflow-hidden ">
                <a href="/profile/{{ $follower->username }}"><img src="/storage/{{ $follower->avatar ?? 'profile/imgDefault.png'}}" alt="" class=""></a>
            </div>
        @endforeach

    </div>
</div>
