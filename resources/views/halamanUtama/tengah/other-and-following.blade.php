<div class="flex my-4">
    {{-- other --}}
    <div class="w-[50%]  text-center text-sm sm:text-base lg:text-base">
        <a href="/home" class="pb-2 font-semibold text-slate-950 transition-all duration-300 ease-in-out  {{ Request::is('home') ? 'border-b lg:border-b-2 border-b-slate-950 ' : 'hover:border-b hover:lg:border-b-2 hover:border-b-slate-950 ' }}">Other</a>
    </div>
    {{-- akhir other  --}}

    {{-- following --}}
    <div class="w-[50%] text-center text-sm sm:text-base lg:text-base">
        <a href="/following" class="pb-2 font-semibold text-slate-950 transition-all duration-300 ease-in-out {{ Request::is('following') ? 'border-b lg:border-b-2 border-b-slate-950 ' : 'hover:border-b hover:lg:border-b-2 hover:border-b-slate-950 ' }}">Following</a>
    </div>
    {{-- akhir following --}}
</div>
