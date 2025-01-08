<div class=" mt-12 px-0 mb-7 sm:mb-0">
    <div class="flex items-center lg:justify-center ">
        {{-- img  --}}
        <div class=" self-start max-w-[20%] sm:max-w-[30%]  lg:max-w-[10%] ">
            <div class="w-[50px] h-[50px] sm:w-[70px] sm:h-[70px] lg:w-[60px] lg:h-[60px] object-center  rounded-full self-start  overflow-hidden">
                <img src="/storage/{{ auth()->user()->avatar ?? 'profile/imgDefault.png'}}" alt="" class="">
            </div>
        </div>
        {{-- akhir img  --}}

        {{-- username,input post,btn  --}}
        <div class="w-full mt-0">
            <span class="mx-4 lg:mx-4 font-firaSans text-sm sm:text-lg lg:text-base ">{{ auth()->user()->name }}</span>
            <form action="/statuses" method="post" class="w-[90%] lg:w-[90%] mx-4 lg:mx-4 ">
                @csrf
                <textarea id="content" cols="30" rows="10" name="content" class="w-full h-[40px] sm:h-[70px]  lg:h-[60px] p-1 px-0 lg:p-2 lg:px-0 border-b border-slate-950  outline-none active:border-b text-xs sm:text-base lg:text-sm resize-none " placeholder="Have an idea to share?" required maxlength="3100"></textarea>
                <button type="submit" class="w-[24%] sm:w-[17%] lg:w-[12%] h-6 sm:h-9 lg:h-8 bg-teal-800 rounded-lg lg:rounded-xl mt-1 lg:mt-2 text-white font-semibold text-[0.6rem] sm:text-sm lg:text-xs"> Share </button>


                {{-- error max status --}}
                @error('content')
                <div class="mt-2 text-[0.68rem] sm:text-base  lg:text-xs text-center  text-red-500">
                    <h1>{{ $message }}</h1>
                </div>
                @enderror
                {{-- akhir error max status --}}
            </form>

        </div>
        {{-- akhir username,input post,btn  --}}
    </div>

</div>

