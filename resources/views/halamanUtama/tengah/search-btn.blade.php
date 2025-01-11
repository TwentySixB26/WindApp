<div class=" py-4  sm:py-6 lg:py-4 px-0 sm:px-5 lg:px-0 ">
        <div class="w-[100%]  m-auto flex ">

            {{-- search bar --}}
            <form action="" method="get" class="w-full">
            <div class=" relative flex items-center w-full ">
                {{-- input search --}}
                    <input class="w-full bg-transparent placeholder:text-slate-400 text-slate-500 text-xs sm:text-base lg:text-sm border border-slate-400 rounded-full pr-14 pl-5 sm:pl-7 lg:pl-6 py-2.5 sm:py-3 lg:py-3 transition duration-300 ease focus:outline-none focus:border-slate-600 hover:border-slate-500 shadow-sm focus:shadow " placeholder="Search user" type="text" id="search" name="search" value="{{ request('search') }}" />

                {{-- akhir input search --}}

                {{-- btn lup --}}
                <button class="absolute top-1 right-1 py-1.5 sm:py-2 lg:py-2 rounded-3xl ml-2 bg-transparent px-3  text-center text-[0.7rem] sm:text-base lg:text-sm text-slate-400 transition-all  disabled:pointer-events-none "
                    type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 sm:w-6 sm:h-6 lg:w-5 lg:h-5">
                        <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z" clip-rule="evenodd" />
                    </svg>
                </button>
                {{-- akhir btn lup  --}}
            </form>
            </div>
            {{-- akhir search bar --}}

            {{-- filter search --}}
            <div class="self-center">
                <button class="rounded-xl ml-1 p-2.5 py-1  text-center text-sm sm:text-xl lg:text-lg text-slate-400 transition-all  disabled:pointer-events-none "
                type="button">
                    <i class="fa-solid fa-sliders"></i>
                </button>
            </div>
            {{-- akhir filter search  --}}
        </div>
</div>
