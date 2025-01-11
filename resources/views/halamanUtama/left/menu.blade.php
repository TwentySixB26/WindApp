<div class="w-full mt-5 sm:mt-10 lg:mt-7 flex flex-col items-center lg:items-start">
    {{-- home --}}
    <div class="flex">
        <a href="/home" class=" mb-5 sm:mb-8 lg:mb-5 ">
            <i class="fa-sharp fa-solid fa-house text-xl sm:text-3xl lg:text-2xl "></i>
        </a>
        <a href="/home" class=" mb-5 sm:mb-8 lg:mb-5 self-center">
            <span class=" ms-0 lg:ms-3 text-sm font-firaSans hidden lg:inline  {{ Request::is('home') ? 'font-semibold' : 'font-normal' }}">Home</span>
        </a>
    </div>

    {{-- search  --}}
    <div class="flex">
        <a href="/search" class=" mb-5 sm:mb-8 lg:mb-5 ">
            <i class="fa-sharp fa-solid fa-magnifying-glass text-xl sm:text-3xl lg:text-2xl  "></i>
        </a>
        <a href="/search" class=" mb-5 sm:mb-8 lg:mb-5 ">
            <span class=" ms-0 lg:ms-3 text-sm font-firaSans hidden lg:inline   {{ Request::is('search') ? 'font-semibold' : 'font-normal'}}"> search</span>
        </a>
    </div>
    {{-- akhir search  --}}


    {{-- pesan  --}}
    <div class="flex">
        <a href="#" class=" mb-5 sm:mb-8 lg:mb-5 ">
            <i class="fa-solid fa-envelope text-xl sm:text-3xl lg:text-2xl "></i>
        </a>
        <a href="#" class=" mb-5 sm:mb-8 lg:mb-5 ">
            <span class=" ms-0 lg:ms-3 text-sm font-firaSans hidden lg:inline   {{ Request::is('message') ? 'font-semibold' : 'font-normal'}}">message</span>
        </a>
    </div>
    {{-- akhir pesan  --}}

    {{-- setting --}}
    <div class="flex">
        <a href="#" class=" mb-5 sm:mb-8 lg:mb-5 ">
            <i class="fa-sharp-duotone fa-solid fa-gear text-xl sm:text-3xl lg:text-2xl "></i>
        </a>
        <a href="#" class=" mb-5 sm:mb-8 lg:mb-5 ">
            <span class=" ms-0 lg:ms-3 text-sm font-firaSans hidden lg:inline   {{ Request::is('setting') ? 'font-semibold' : 'font-normal'}} ">Setting</span>
        </a>
    </div>
    {{-- akhir setting  --}}
</div>
