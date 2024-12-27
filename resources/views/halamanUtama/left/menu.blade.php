<div class="w-full mt-8 sm:mt-10 lg:mt-10 flex flex-col items-center lg:items-start">
    {{-- home --}}
    <a href="/home" class="text-slate-950 mb-6 sm:mb-8 lg:mb-5 ">
        <i class="fa-sharp fa-solid fa-house text-xl sm:text-[1.8rem] lg:text-2xl"></i> <span class="ms-4 text-base font-firaSans hidden lg:inline {{ Request::is('home') ? 'font-semibold' : 'font-normal' }}">Home</span>
    </a>
    {{-- akhir home --}}

    {{-- search  --}}
    <a href="#" class="text-slate-950 mb-6 sm:mb-8 lg:mb-5 ">
        <i class="fa-sharp fa-solid fa-magnifying-glass text-xl sm:text-[1.8rem] lg:text-2xl "></i><span class="ms-4 text-base font-firaSans hidden lg:inline  {{ Request::is('search') ? 'font-semibold' : 'font-normal'}}"> search</span>
    </a>
    {{-- akhir search  --}}

    {{-- pesan  --}}
    <a href="#" class="text-slate-950 mb-6 sm:mb-8 lg:mb-5 ">
        <i class="fa-solid fa-envelope text-xl sm:text-[1.8rem] lg:text-2xl"></i> <span class="ms-4 text-base font-firaSans hidden lg:inline  {{ Request::is('message') ? 'font-semibold' : 'font-normal'}}">message</span>
    </a>
    {{-- akhir pesan  --}}

    {{-- setting --}}
    <a href="#" class="text-slate-950 mb-6 sm:mb-8 lg:mb-5 ">
        <i class="fa-sharp-duotone fa-solid fa-gear text-xl sm:text-[1.8rem] lg:text-2xl"></i> <span class="ms-4 text-base font-firaSans hidden lg:inline  {{ Request::is('setting') ? 'font-semibold' : 'font-normal'}} ">Setting</span>
    </a>
    {{-- akhir setting  --}}
</div>
