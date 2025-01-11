{{-- profile --}}
<div class="w-full flex items-center justify-center lg:justify-start mt-auto">
    <a href="/profile" class=" ">
        <div class="w-[40px] h-[40px] sm:w-[60px] sm:h-[60px] lg:w-[40px] lg:h-[40px] object-center rounded-full  overflow-hidden ">
            <img src="/storage/{{ auth()->user()->avatar ?? 'profile/imgDefault.png'}}" alt="" class="w-full" >
        </div>
        {{-- <img src="storage/{{ auth()->user()->avatar ?? 'profile/jessi.jpg'}}" alt="wind-app" title="logo-windApp" class="w-[35px] h-[35px] object-cover rounded-full"><span class="ms-4 text-base font-firaSans font-normal text-slate-950">Profile</span> --}}
    </a>
    <span class="hidden lg:inline-block ms-4 text-base font-firaSans  text-slate-950 {{ Request::is('profile') ? 'font-semibold' : 'font-normal' }}"><a href="/profile">Profile</a></span>
</div>
{{-- akhir profile --}}

{{-- logout --}}
<div class="mb-5 mt-1 ">
    {{-- want to change account? --}}
    <form action="/logout" method="post" class="">
        @csrf
        <button type="submit" class="w-[100%] py-0 lg:py-3 text-sm sm:text-lg lg:text-sm  font-medium font-poppins lg:text-left text-center text-slate-950 ">
            <span class="hidden lg:block">Log out &raquo; </span>
            <span class="block lg:hidden"> &laquo;&laquo;&laquo; </span>
        </button>
    </form>
</div>
{{-- akhir logout  --}}


