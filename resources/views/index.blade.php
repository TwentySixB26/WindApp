@extends('layout/layout')

@section('content')


    {{-- hero section  --}}
    <section class="lg:mt-0 w-full mt-0 overflow-hidden overflow-x-hidden" id="hero">
        <div class=" w-full min-h-[100vh] bg-cover bg-center  bg-[rgba(0,0,0,0.4)]" style="background-image: url('/img/bg4.jpg')">
            <div class="w-full h-[100vh] bg-[rgba(0,0,0,0.6)] absolute z-10"></div>
            {{-- navbar  --}}
            <div class="lg:container lg:pt-3">
                @include('layout.navbar')
            </div>
            {{-- akhir navbar  --}}

            <div class=" grid grid-cols-12 relative z-30 gap-0 lg:container pt-32 md:pt-48 lg:pt-32 px-7">
                <div class="col-span-9 md:col-span-7 lg:col-span-5">
                    <h1 class="text-slate-100 text-xl md:text-4xl lg:text-3xl tracking-wider font-bold font-acmeRegular" >" One click can connect with one's world and share interesting  stories with them today. "</h1>
                </div>
            </div>

            <div class=" grid grid-cols-12 relative z-30 gap-0 lg:container pt-5 px-7">
                <div class="col-span-10 md:col-span-9 lg:col-span-4 ">
                    <h1 class="text-slate-200 lg:text-xs md:text-sm text-[0.65rem]  font-firaSans" style="text-shadow: 1px 1px 2px rgba(0, 0, 0,1);" >wind app is a website and application for sharing stories and chatting with your friends in all parts of the world in just the palm of your hand ready to share stories and learn new languages ​​with new people. </h1>
                </div>
            </div>

            <div class=" grid grid-cols-12 relative z-30 gap-0 lg:container pt-5 md:pt-8 lg:pt-7 px-7">
                <div class="col-span-12 lg:col-span-12">
                    <a class="bg-green-700 text-white md:px-5 px-4 md:py-[9px] py-[6px] rounded-full md:text-xs lg:text-xs text-[0.5rem]   hover:border border border-green-700 hover:bg-green-800 hover:border-green-800 hover:text-slate-300 " href="#">
                        Join Community
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- hero section  --}}


    {{-- about us --}}
    <section class="w-full mt-0 pt-12 md:pt-28 lg:pt-28 bg-[#070c24] pb-20 overflow-hidden overflow-x-hidden" id="aboutUs" >
        <div class="grid  grid-cols-12 ">

            {{-- left  --}}
            <div class="col-span-12 lg:col-span-6 overflow-x-hidden" id="aboutLeft">
                <div class=" grid grid-cols-12 relative z-30 gap-0 lg:container px-7 ">
                    <div class="col-span-12 md:col-span-8 lg:col-span-8 ">
                        <h1 class="text-slate-50 text-5xl md:text-7xl lg:text-7xl tracking-wider font-bold font-acmeRegular" > what is <span class="text-green-600">Wind</span> app? </h1>
                    </div>
                </div>

                <div class=" grid grid-cols-12 relative z-30 gap-0 lg:container pt-5 px-7">
                    <div class="col-span-10 md:col-span-9 lg:col-span-12 ">
                        <h1 class="text-slate-200 lg:text-sm md:text-sm text-[0.65rem]  font-firaSans" style="text-shadow: 1px 1px 2px rgba(0, 0, 0,1);" > <span class="text-green-500"> Wind App </span> is a story sharing platform that allows users to express themselves in an easy and fun way. In the Wind App, you can create statuses, share photos, and connect with friends through interactive chat features. With a clean and intuitive interface, Wind App provides a smooth and convenient sharing experience. Whether you want to share everyday moments, favorite photos, or just interact with friends, Wind App provides the perfect space to communicate and connect. Explore, tell and share your stories with <span class="text-green-500">Wind App! </span> </h1>
                    </div>
                </div>

                <div class=" grid grid-cols-12 relative z-30 gap-0 lg:container pt-5 md:pt-8 lg:pt-7 px-7">
                    <div class="col-span-12 lg:col-span-12 flex">

                        {{-- android download  --}}
                        <div class="bg-green-600 lg:w-[40%] md:px-5 px-4 md:py-[9px] py-[10px] rounded-full hover:border border border-green-600 hover:bg-green-800 hover:border-green-800 hover:text-slate-300 mr-2 cursor-pointer">
                            <span  class="text-white md:text-sm lg:text-sm text-[0.5rem] flex">
                                <span class="mr-1 lg:mr-1">Download For android</span> <svg class="w-[13px] md:w-[18px] lg:w-[18px] h-[13px] md:h-[18px] lg:h-[18px]" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" style="fill:currentColor;transform: ;msFilter:;"><path d="m12.954 11.616 2.957-2.957L6.36 3.291c-.633-.342-1.226-.39-1.746-.016l8.34 8.341zm3.461 3.462 3.074-1.729c.6-.336.929-.812.929-1.34 0-.527-.329-1.004-.928-1.34l-2.783-1.563-3.133 3.132 2.841 2.84zM4.1 4.002c-.064.197-.1.417-.1.658v14.705c0 .381.084.709.236.97l8.097-8.098L4.1 4.002zm8.854 8.855L4.902 20.91c.154.059.32.09.495.09.312 0 .637-.092.968-.276l9.255-5.197-2.666-2.67z"></path></svg>
                            </span>
                        </div>
                        {{-- akhir android download --}}

                        {{-- ios download --}}
                        <div class="bg-slate-600 lg:w-[36%] md:px-5 px-4 md:py-[9px] py-[10px]  rounded-full hover:border border border-slate-600 hover:bg-slate-700 hover:border-slate-700 hover:text-slate-300 cursor-pointer">
                            <span  class="text-white md:text-sm lg:text-sm text-[0.5rem] flex">
                                <span class="mr-1 lg:mr-1">Download For iOS </span><svg class="w-[11px] md:w-[17px] lg:w-[17px] h-[11px] md:h-[17px] lg:h-[17px]" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" style="fill: currentColor;transform: ;msFilter:;"><path d="M19.665 16.811a10.316 10.316 0 0 1-1.021 1.837c-.537.767-.978 1.297-1.316 1.592-.525.482-1.089.73-1.692.744-.432 0-.954-.123-1.562-.373-.61-.249-1.17-.371-1.683-.371-.537 0-1.113.122-1.73.371-.616.25-1.114.381-1.495.393-.577.025-1.154-.229-1.729-.764-.367-.32-.826-.87-1.377-1.648-.59-.829-1.075-1.794-1.455-2.891-.407-1.187-.611-2.335-.611-3.447 0-1.273.275-2.372.826-3.292a4.857 4.857 0 0 1 1.73-1.751 4.65 4.65 0 0 1 2.34-.662c.46 0 1.063.142 1.81.422s1.227.422 1.436.422c.158 0 .689-.167 1.593-.498.853-.307 1.573-.434 2.163-.384 1.6.129 2.801.759 3.6 1.895-1.43.867-2.137 2.08-2.123 3.637.012 1.213.453 2.222 1.317 3.023a4.33 4.33 0 0 0 1.315.863c-.106.307-.218.6-.336.882zM15.998 2.38c0 .95-.348 1.838-1.039 2.659-.836.976-1.846 1.541-2.941 1.452a2.955 2.955 0 0 1-.021-.36c0-.913.396-1.889 1.103-2.688.352-.404.8-.741 1.343-1.009.542-.264 1.054-.41 1.536-.435.013.128.019.255.019.381z"></path></svg>
                            </span>
                        </div>
                        {{-- akhir ios download  --}}

                    </div>
                </div>
            </div>
            {{-- akhir left  --}}

            {{-- right --}}
            <div class="col-span-12 lg:col-span-6 overflow-x-hidden" id="aboutRight">
                <div class="grid grid-cols-12 gap-6 px-7 mt-11 md:mt-20 lg:mt-0">
                    {{-- <div class=" lg:col-span-5 "></div> --}}

                    {{-- users active  --}}
                    <div  class="aboutMenu col-span-6 lg:col-span-5 border-2 border-green-50  rounded-2xl p-3 md:p-8 lg:p-5 text-center text-green-50">
                        <div class="m-auto inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-[22px] h-[22px] md:w-[30px] md:h-[30px] lg:w-[27px] lg:h-[27px]" viewBox="0 0 24 24" style="fill: currentColor;transform: ;msFilter:;"><path d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h17z"></path></svg>
                        </div>
                        <h1 class="number text-green-50 text-2xl md:text-5xl lg:text-4xl font-bold my-2 " data-val="50">000</h1>
                        <p class="text-sm md:text-xl lg:text-base text-green-50">active users</p>
                    </div>
                    {{-- user active  --}}


                    {{-- total negara --}}
                    <div  class="aboutMenu col-span-6 lg:col-span-5 border-2 border-green-50  rounded-2xl p-3 md:p-8 lg:p-5 text-center text-green-50">
                        <div class="m-auto inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-[22px] h-[22px] md:w-[30px] md:h-[30px] lg:w-[27px] lg:h-[27px]" viewBox="0 0 24 24" style="fill: currentColor ;msFilter:;"><path d="M19 4H6V2H4v18H3v2h4v-2H6v-5h13a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z"></path></svg>
                        </div>
                        <h1 class="number text-green-50 text-2xl md:text-5xl lg:text-4xl font-bold my-2" data-val="40">000</h1>
                        <p class="text-sm md:text-xl lg:text-base text-green-50">language used</p>
                    </div>
                    {{-- akhir total negara --}}


                    {{-- total user --}}
                    <div  class="aboutMenu col-span-6 lg:col-span-5 border-2 border-green-50  rounded-2xl p-3 md:p-8 lg:p-5 text-center text-green-50">
                        <div class="m-auto inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-[22px] h-[22px] md:w-[30px] md:h-[30px] lg:w-[27px] lg:h-[27px]" viewBox="0 0 24 24" style="fill: currentColor;transform: ;msFilter:;"><path d="M12 10c1.151 0 2-.848 2-2s-.849-2-2-2c-1.15 0-2 .848-2 2s.85 2 2 2zm0 1c-2.209 0-4 1.612-4 3.6v.386h8V14.6c0-1.988-1.791-3.6-4-3.6z"></path><path d="M19 2H5c-1.103 0-2 .897-2 2v13c0 1.103.897 2 2 2h4l3 3 3-3h4c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2zm-5 15-2 2-2-2H5V4h14l.002 13H14z"></path></svg>
                        </div>
                        <h1 class="number text-green-50 text-2xl md:text-5xl lg:text-4xl font-bold my-2" data-val="415">000</h1>
                        <p class="text-sm md:text-xl lg:text-base text-green-50">total users</p>
                    </div>
                    {{-- akhir total user  --}}


                    {{-- total unduhan --}}
                    <div  class="aboutMenu col-span-6 lg:col-span-5 border-2 border-green-50  rounded-2xl p-3 md:p-8 lg:p-5 text-center text-green-50">
                        <div class="m-auto inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-[22px] h-[22px] md:w-[30px] md:h-[30px] lg:w-[27px] lg:h-[27px]" viewBox="0 0 24 24" style="fill: currentColor;transform: ;msFilter:;"><path d="M19 9h-4V3H9v6H5l7 8zM4 19h16v2H4z"></path></svg>
                        </div>
                        <h1 class="number text-green-50 text-2xl md:text-5xl lg:text-4xl font-bold my-2" data-val="412">000</h1>
                        <p class="text-sm md:text-xl lg:text-base text-green-50">Total Downloads</p>
                    </div>
                    {{-- total unduhan  --}}

                </div>
            </div>
            {{-- akhir right  --}}
        </div>
    </section>
    {{-- akhir about us  --}}



    {{-- fitur   --}}
    <section class="w-full mt-0 pt-4 md:pt-24 lg:pt-12 bg-[#070c24] pb-20 lg:container overflow-hidden overflow-x-hidden" id="fitur1" >
        {{-- fitur 1 --}}
        <div class="grid  grid-cols-12 ">

            {{-- image --}}
            <div class="col-start-2 col-span-10 md:col-span-5 md:col-start-2 lg:col-span-4 lg:col-start-3 overflow-x-hidden" id="imageFitur1">
                <img src="/img/faruk-tokluoglu-KhgxXazhY0I-unsplash.jpg" alt="" srcset="" class="w-full bg-cover bg-center rounded-xl">
            </div>
            {{-- akhir image  --}}

            {{-- text  --}}
            <div class="col-span-12 md:col-span-6 lg:col-span-6 overflow-x-hidden h-full pt-10 lg:pt-0" id="textFitur1">
                <div class="relative z-30 gap-0 lg:container px-7 h-full flex ">
                    <div class="self-center">
                        <div class="w-[90%] lg:w-[70%]">
                            <h1 class="text-slate-50 text-4xl md:text-4xl lg:text-5xl tracking-wider font-bold font-acmeRegular"> <span class="text-green-500">immortalize</span>  your beautiful <span class="text-green-500">moments</span> </h1>
                        </div>
                        <div class="w-[100%] mt-5">
                            <h1 class="text-slate-200 lg:text-sm md:text-sm text-[0.65rem]  font-firaSans" style="text-shadow: 1px 1px 2px rgba(0, 0, 0,1);" > Your interesting photos and stories will be neatly stored in the Wind App and you can look at them again whenever you want.</h1>
                        </div>
                        <div class="w-[100%] mt-2">
                            <a class="text-slate-200 lg:text-sm md:text-sm text-[0.65rem]  font-firaSans hover:underline hover:text-green-500" style="text-shadow: 1px 1px 2px rgba(0, 0, 0,1);" href="#"> Read More &raquo; </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- akhir text  --}}
        </div>
        {{-- akhir fitur 1 --}}

        {{-- fitur 2 --}}
        <div class="grid  grid-cols-12 mt-24 lg:mt-40 ">
            {{-- text  --}}
            <div class="col-span-12 md:col-span-6 lg:col-span-6 overflow-x-hidden h-full text-right" id="textFitur2">
                <div class="relative z-30 gap-0 lg:container px-7 h-full flex ">
                    <div class="self-center flex flex-col">
                        <div class="w-[90%] lg:w-[70%] self-end">
                            <h1 class="text-slate-50 text-4xl md:text-4xl lg:text-5xl tracking-wider font-bold font-acmeRegular"> <span class="text-green-500"> Send </span> messages with your <span class="text-green-500"> friends </span> </h1>
                        </div>
                        <div class="w-[100%] mt-5">
                            <h1 class="text-slate-200 lg:text-sm md:text-sm text-[0.65rem]  font-firaSans" style="text-shadow: 1px 1px 2px rgba(0, 0, 0,1);" > You can stay connected with your friends and exchange messages anywhere and anytime easily, quickly in a matter of seconds.</h1>
                        </div>
                        <div class="w-[100%] mt-2">
                            <a class="text-slate-200 lg:text-sm md:text-sm text-[0.65rem]  font-firaSans hover:underline hover:text-green-500" style="text-shadow: 1px 1px 2px rgba(0, 0, 0,1);" href="#"> Read More &raquo; </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- akhir text  --}}

            {{-- image --}}
            <div class="col-start-2 col-span-10 md:col-span-5 lg:col-span-4 overflow-x-hidden mt-14 lg:mt-0" id="imageFitur2">
                <img src="/img/derick-anies-hDJT_ERrB-w-unsplash.jpg" alt="" srcset="" class="w-full bg-cover bg-center rounded-xl">
            </div>
            {{-- akhir image  --}}
        </div>
        {{-- akhir fitur 2 --}}
    </section>
    {{-- akhir fitur --}}


    {{-- fitur on wind app  --}}
    <section class="w-full mt-0 pt-16 md:pt-24 lg:pt-24 bg-[#070c24] lg:container overflow-hidden overflow-x-hidden pb-36" id="allFitur">

        {{-- heading fitur --}}
        <div class="overflow-x-hidden overflow-hidden w-[90%] md:w-[90%] lg:w-[80%] text-left md:text-left lg:text-center m-auto p-3 lg:p-0">
            <h1 class="text-slate-50 text-2xl md:text-4xl lg:text-4xl font-bold tracking-wider font-acmeRegular ">Get to know some of the <span class="text-green-500">Wind App</span> features so you can find out what you can do in the <span class="text-green-500">Wind App</span>.</h1>
        </div>
        {{-- akhir heading fitur --}}

        <div class="flex w-full flex-col lg:flex-row gap-2 mt-10 lg:mt-24 text-slate-50 font-poppins justify-center ">
            <div class="w-[90%] lg:w-[30%]  text-left lg:text-center m-auto p-3 lg:p-0  md:flex lg:block md:gap-3 lg:gap-0">
                <h1 class="text-xl md:text-2xl lg:text-2xl font-semibold md:w-[25%] lg:w-[100%]">Create Story</h1>
                <p class="text-sm md:text-base lg:text-xs text-slate-500 mt-2 md:mt-0 lg:mt-4 md:w-[75%] lg:w-[100%]"> This feature allows users to write, upload and share interesting stories or ideas such as short stories about your interesting day or other things, with the option to be liked, commented on, or shared by other users. </p>
            </div>
            <div class="w-[90%] lg:w-[30%]   text-left lg:text-center m-auto p-3 lg:p-0  md:flex lg:block md:gap-3 lg:gap-0">
                <h1 class="text-xl md:text-2xl lg:text-2xl font-semibold md:w-[25%] lg:w-[100%]">Upload Image</h1>
                <p class="text-sm md:text-base lg:text-xs text-slate-500 mt-2 md:mt-0 lg:mt-4 md:w-[75%] lg:w-[100%]">This feature allows users to upload and share images. Users can select an image from their device, add an optional caption, and publish it. The image will appear in your feed or profile with the option to be liked, commented on, or shared by other users. </p>
            </div>
            <div class="w-[90%] lg:w-[30%]  text-left lg:text-center m-auto p-3 lg:p-0  md:flex lg:block md:gap-3 lg:gap-0">
                <h1 class="text-xl md:text-2xl lg:text-2xl font-semibold md:w-[25%] lg:w-[100%]">Chating</h1>
                <p class="text-sm md:text-base lg:text-xs text-slate-500 mt-2 md:mt-0 lg:mt-4 md:w-[75%] lg:w-[100%]">This feature allows users to communicate in real-time via text messages. Users can send and receive messages, view online status, and use emojis or other media to add expression to conversations. Messages are sent and received quickly in a simple interface.</p>
            </div>
        </div>
    </section>
    {{-- akhir fitur on wind app  --}}



    {{-- help center --}}
    <section class="w-full mt-0 pt-12 md:pt-20 lg:pt-24 lg:container bg-[#050819] pb-20 overflow-hidden overflow-x-hidden " id="helpCenter">

        {{-- head  --}}
        <div class="lg:flex text-green-50 gap-0 px-7 lg:px-0">
            <div class="w-[80%] lg:w-[70%] ">
                <h1 class="text-4xl md:text-5xl lg:text-[3.5rem] font-semibold font-firaSans">Do you need help?</h1>
            </div>
            <div class="w-[100%] lg:w-[30%] lg:text-right lg:self-center mt-2 md:mt-3 lg:mt-0">
                <p class="cursor-pointer text-sm md:text-lg lg:text-base hover:text-green-500 hover:underline">Ask Another Question &raquo;</p>
            </div>
        </div>
        {{-- akhir head  --}}

        {{-- body  --}}
        <div class="text-green-50 mt-12 lg:mt-28 px-7 lg:px-0">
            <div class="cursor-pointer w-full mb-6 lg:mb-9 p-4 md:p-7 lg:p-7 ps-5 lg:ps-8 rounded-2xl border-[0.3px] border-slate-700 flex hover:border-green-600 hover:bg-green-600 hover:text-black group">
                <div class="w-[70%] ">
                    <h1 class="text-sm md:text-lg lg:text-xl font-firaSans">Will chat content be encrypted?</h1>
                </div>
                <div class="w-[30%] text-right self-center place-items-end ">
                    <p class="rounded-full border-[1.3px] border-slate-300 p-1 group-hover:border-black">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-[16px] h-[16px] md:w-[24px] md:h-[24px] lg:w-[24px] lg:h-[24px]" viewBox="0 0 24 24" style="fill: currentColor;transform: ;msFilter:;">
                            <path d="m19 12-7-6v5H6v2h6v5z"></path>
                        </svg>
                    </p>
                </div>
            </div>

            <div class="cursor-pointer w-full mb-6 lg:mb-9 p-4 md:p-7 lg:p-7 ps-5 lg:ps-8 rounded-2xl border-[0.3px] border-slate-700 flex hover:border-green-600 hover:bg-green-600 hover:text-black group">
                <div class="w-[70%] ">
                    <h1 class="text-sm md:text-lg lg:text-xl font-firaSans">Can users edit their status or story after it's posted, or just delete it?</h1>
                </div>
                <div class="w-[30%] text-right self-center place-items-end ">
                    <p class="rounded-full border-[1.3px] border-slate-300 p-1 group-hover:border-black">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-[16px] h-[16px] md:w-[24px] md:h-[24px] lg:w-[24px] lg:h-[24px]" viewBox="0 0 24 24" style="fill: currentColor;transform: ;msFilter:;">
                            <path d="m19 12-7-6v5H6v2h6v5z"></path>
                        </svg>
                    </p>
                </div>
            </div>

            <div class="cursor-pointer w-full mb-6 lg:mb-9 p-4 md:p-7 lg:p-7 ps-5 lg:ps-8 rounded-2xl border-[0.3px] border-slate-700 flex hover:border-green-600 hover:bg-green-600 hover:text-black group">
                <div class="w-[70%] ">
                    <h1 class="text-sm md:text-lg lg:text-xl font-firaSans">how to keep your account safe?</h1>
                </div>
                <div class="w-[30%] text-right self-center place-items-end ">
                    <p class="rounded-full border-[1.3px] border-slate-300 p-1 group-hover:border-black">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-[16px] h-[16px] md:w-[24px] md:h-[24px] lg:w-[24px] lg:h-[24px]" viewBox="0 0 24 24" style="fill: currentColor;transform: ;msFilter:;">
                            <path d="m19 12-7-6v5H6v2h6v5z"></path>
                        </svg>
                    </p>
                </div>
            </div>

            <div class="cursor-pointer w-full mb-6 lg:mb-9 p-4 md:p-7 lg:p-7 ps-5 lg:ps-8 rounded-2xl border-[0.3px] border-slate-700 flex hover:border-green-600 hover:bg-green-600 hover:text-black group">
                <div class="w-[70%] ">
                    <h1 class="text-sm md:text-lg lg:text-xl font-firaSans">Does the chat feature support group conversations?</h1>
                </div>
                <div class="w-[30%] text-right self-center place-items-end ">
                    <p class="rounded-full border-[1.3px] border-slate-300 p-1 group-hover:border-black">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-[16px] h-[16px] md:w-[24px] md:h-[24px] lg:w-[24px] lg:h-[24px]" viewBox="0 0 24 24" style="fill: currentColor;transform: ;msFilter:;">
                            <path d="m19 12-7-6v5H6v2h6v5z"></path>
                        </svg>
                    </p>
                </div>
            </div>

            <div class="cursor-pointer w-full mb-6 lg:mb-9 p-4 md:p-7 lg:p-7 ps-5 lg:ps-8 rounded-2xl border-[0.3px] border-slate-700 flex hover:border-green-600 hover:bg-green-600 hover:text-black group">
                <div class="w-[70%] ">
                    <h1 class="text-sm md:text-lg lg:text-xl font-firaSans">How do I restore an account that has forgotten its password?</h1>
                </div>
                <div class="w-[30%] text-right self-center place-items-end ">
                    <p class="rounded-full border-[1.3px] border-slate-300 p-1 group-hover:border-black">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-[16px] h-[16px] md:w-[24px] md:h-[24px] lg:w-[24px] lg:h-[24px]" viewBox="0 0 24 24" style="fill: currentColor;transform: ;msFilter:;">
                            <path d="m19 12-7-6v5H6v2h6v5z"></path>
                        </svg>
                    </p>
                </div>
            </div>

            <div class="cursor-pointer w-full mb-6 lg:mb-9 p-4 md:p-7 lg:p-7 ps-5 lg:ps-8 rounded-2xl border-[0.3px] border-slate-700 flex hover:border-green-600 hover:bg-green-600 hover:text-black group">
                <div class="w-[70%] ">
                    <h1 class="text-sm md:text-lg lg:text-xl font-firaSans">how to block a user?</h1>
                </div>
                <div class="w-[30%] text-right self-center place-items-end ">
                    <p class="rounded-full border-[1.3px] border-slate-300 p-1 group-hover:border-black">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-[16px] h-[16px] md:w-[24px] md:h-[24px] lg:w-[24px] lg:h-[24px]" viewBox="0 0 24 24" style="fill: currentColor;transform: ;msFilter:;">
                            <path d="m19 12-7-6v5H6v2h6v5z"></path>
                        </svg>
                    </p>
                </div>
            </div>

            <div class="mt-8 lg:mt-20 flex lg:block justify-end lg:justify-start">
                <h1 class="text-xs md:text-sm lg:text-base cursor-pointer font-firaSans">complaint service &raquo;</h1>
            </div>
        </div>
        {{-- akhir body  --}}
    </section>
    {{-- akhir help center  --}}


    {{-- download --}}
    <section class="w-full  mt-0 pt-12 md:pt-28 lg:pt-28 bg-[#050819] pb-20 lg:pb-32 overflow-hidden overflow-x-hidden" id="download" >
        <div class="grid  grid-cols-12 ">
            {{-- left  --}}
            <div class="col-span-12 lg:col-span-6 overflow-x-hidden">
                <div class=" grid grid-cols-12 relative z-30 gap-0 lg:container px-7 ">
                    <div class="col-span-12 md:col-span-8 lg:col-span-8 ">
                        <h1 class="text-slate-50 text-5xl md:text-7xl lg:text-7xl tracking-wider font-bold font-acmeRegular" > Download <span class="text-green-600">Wind</span> app </h1>
                    </div>
                </div>

                <div class=" grid grid-cols-12 relative z-30 gap-0 lg:container pt-5 px-7">
                    <div class="col-span-10 md:col-span-9 lg:col-span-12 ">
                        <h1 class="text-slate-200 lg:text-lg md:text-sm text-[0.65rem]  font-firaSans" style="text-shadow: 1px 1px 2px rgba(0, 0, 0,1);"> Use the wind app on all your devices </h1>
                        <h1 class="text-slate-400 lg:text-xs md:text-sm text-[0.65rem]  font-firaSans lg:mt-1 tracking-wide font-light" style="text-shadow: 1px 1px 2px rgba(0, 0, 0,1);" > when you are connected to the wind app, you agree <a href="#" class="underline italic hover:text-slate-200"> Provision</a> & <a href="#" class="underline italic hover:text-slate-200"> Our Privacy Policy. </a> </h1>
                    </div>
                </div>

                <div class=" grid grid-cols-12 relative z-30 gap-0 lg:container pt-5 md:pt-8 lg:pt-10 px-7">
                    <div class="col-span-12 lg:col-span-12 border bg-[rgba(46,46,46,0.4)] border-slate-400 text-slate-200 p-5 rounded-xl">
                        <h1 class="text-lg">Desktop</h1>
                        <h2 class="text-2xl">Windows</h2>
                        <p class="text-xs mt-2 lg:mt-3">Requires Windows 10 or later. For other operating systems, you can use Wind App.</p>
                        <div class="text-slate-200 mt-9 lg:w-[25%]  flex gap-2 hover:text-green-700 cursor-pointer">
                            <h4 class="text-sm place-self-center font-firaSans" >Download</h4>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-[24px] h-[24px]" viewBox="0 0 24 24" style="fill: currentColor;transform: ;msFilter:;"><path d="m3 5.557 7.357-1.002.004 7.097-7.354.042L3 5.557zm7.354 6.913.006 7.103-7.354-1.011v-6.14l7.348.048zm.892-8.046L21.001 3v8.562l-9.755.077V4.424zm9.758 8.113-.003 8.523-9.755-1.378-.014-7.161 9.772.016z"></path></svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- akhir left  --}}

            {{-- right --}}
            <div class="col-span-12 lg:col-span-6 overflow-x-hidden" >
                <div class="px-7 mt-0 md:mt-0 lg:mt-0">

                    <div class=" grid grid-cols-12 relative z-30 gap-0 lg:container pt-5 md:pt-8 lg:pt-10 px-7 md:px-0 lg:px-0">
                        <div class="col-span-12 lg:col-span-12 border bg-[rgba(46,46,46,0.4)]  border-slate-400 text-slate-200 p-5 rounded-xl">
                            <h2 class="text-2xl">Android</h2>
                            <h1 class="text-xs">v.3.4</h1>
                            <p class="text-xs mt-2 lg:mt-3">This application will not work on older versions of devices.</p>
                            <div class="text-slate-200 mt-9 lg:w-[25%]  flex gap-2 hover:text-green-700 cursor-pointer">
                                <h4 class="text-sm place-self-center font-firaSans" >Download</h4>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[24px] h-[24px]" viewBox="0 0 24 24" style="fill: currentColor;transform: ;msFilter:;"><path d="m12.954 11.616 2.957-2.957L6.36 3.291c-.633-.342-1.226-.39-1.746-.016l8.34 8.341zm3.461 3.462 3.074-1.729c.6-.336.929-.812.929-1.34 0-.527-.329-1.004-.928-1.34l-2.783-1.563-3.133 3.132 2.841 2.84zM4.1 4.002c-.064.197-.1.417-.1.658v14.705c0 .381.084.709.236.97l8.097-8.098L4.1 4.002zm8.854 8.855L4.902 20.91c.154.059.32.09.495.09.312 0 .637-.092.968-.276l9.255-5.197-2.666-2.67z"></path></svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" grid grid-cols-12 relative z-30 gap-0 lg:container pt-5 md:pt-8 lg:pt-10 px-7 md:px-0 lg:px-0">
                        <div class="col-span-12 lg:col-span-12 border bg-[rgba(46,46,46,0.4)] border-slate-400 text-slate-200 p-5 rounded-xl">
                            <h2 class="text-2xl">IOS</h2>
                            <h1 class="text-xs">v.2.3</h1>
                            <p class="text-xs mt-2 lg:mt-3">This application will not work on older versions of devices.</p>
                            <div class="text-slate-200 mt-9 lg:w-[25%]  flex gap-2 hover:text-green-700 cursor-pointer">
                                <h4 class="text-sm place-self-center font-firaSans" >Download</h4>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[23px] h-[23px]" viewBox="0 1 24 24" style="fill: currentColor;transform: ;msFilter:;"><path d="M19.665 16.811a10.316 10.316 0 0 1-1.021 1.837c-.537.767-.978 1.297-1.316 1.592-.525.482-1.089.73-1.692.744-.432 0-.954-.123-1.562-.373-.61-.249-1.17-.371-1.683-.371-.537 0-1.113.122-1.73.371-.616.25-1.114.381-1.495.393-.577.025-1.154-.229-1.729-.764-.367-.32-.826-.87-1.377-1.648-.59-.829-1.075-1.794-1.455-2.891-.407-1.187-.611-2.335-.611-3.447 0-1.273.275-2.372.826-3.292a4.857 4.857 0 0 1 1.73-1.751 4.65 4.65 0 0 1 2.34-.662c.46 0 1.063.142 1.81.422s1.227.422 1.436.422c.158 0 .689-.167 1.593-.498.853-.307 1.573-.434 2.163-.384 1.6.129 2.801.759 3.6 1.895-1.43.867-2.137 2.08-2.123 3.637.012 1.213.453 2.222 1.317 3.023a4.33 4.33 0 0 0 1.315.863c-.106.307-.218.6-.336.882zM15.998 2.38c0 .95-.348 1.838-1.039 2.659-.836.976-1.846 1.541-2.941 1.452a2.955 2.955 0 0 1-.021-.36c0-.913.396-1.889 1.103-2.688.352-.404.8-.741 1.343-1.009.542-.264 1.054-.41 1.536-.435.013.128.019.255.019.381z"></path></svg>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            {{-- akhir right  --}}
        </div>
    </section>
    {{-- download app --}}


    <!-- footer  -->
    <footer class="bg-[#070c24] ">
            <div class="lg:container pt-24 pb-12">
                <div class="flex flex-wrap px-5 lg:px-0">
                    <div class="w-full px-4 mb-14 text-slate-400 md:w-4/12">
                        <h2 class="font-semibold text-4xl text-slate-200 mb-5 font-fira-sans">Wind App <img src="/img/logo.png"  alt="" srcset="" class="inline w-[22%]">
                        </h2>
                        <p class="text-xs"> Thank you for your support, Wind App will try to improve our quality so that users are comfortable.</p>
                    </div>
                    <div class="w-full px-4 mb-14 text-slate-400 md:w-2/12 ">
                        <h3 class="text-xl text-slate-200 mb-4 font-fira-sans">Pages</h3>
                        <ul class="text-slate-400 ">
                            <li>
                                <a href="#" class="inline-block text-sm hover:text-green-500 mb-2">Home</a>
                            </li>
                            <li>
                                <a href="#aboutUs" class="inline-block text-sm hover:text-green-500 mb-2">About Us</a>
                            </li>
                            <li>
                                <a href="#helpCenter" class="inline-block text-sm hover:text-green-500 mb-2">Help Center</a>
                            </li>
                            <li>
                                <a href="#download" class="inline-block text-sm hover:text-green-500 mb-2">Download app</a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full px-4 mb-14 text-slate-400 md:w-3/12 ">
                        <h3 class="text-xl text-slate-200 mb-4 font-fira-sans">Use the wind app</h3>
                        <ul class="text-slate-400 ">
                            <li>
                                <a href="#" class="inline-block text-sm hover:text-green-500 mb-2">Windows</a>
                            </li>
                            <li>
                                <a href="#" class="inline-block text-sm hover:text-green-500 mb-2">Android</a>
                            </li>
                            <li>
                                <a href="#" class="inline-block text-sm hover:text-green-500 mb-2">IOS</a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full px-4 mb-14 text-slate-400 md:w-3/12 ">
                        <h3 class="text-xl text-slate-200 mb-4 font-fira-sans">Need help?</h3>
                        <ul class="text-slate-400 ">
                            <li>
                                <a href="#" target="_blank" class="inline-block text-sm hover:text-green-500 mb-2">Help Center
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" class="inline-block text-sm hover:text-green-500 mb-2">Contact Us</a>
                            </li>
                            <li>
                                <a href="#" target="_blank" class="inline-block text-sm hover:text-green-500 mb-2">Security Advice</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="w-full pt-7 px-5 border-t border-slate-700">
                    <p class="text-xs md:text-sm lg:text-xs text-slate-500 text-center md:w-8/12 lg:w-6/12 md:mx-auto">2024 © WindApp Team</p>

                    <p class="text-xs md:text-sm lg:text-xs text-slate-500 text-center md:w-8/12 lg:w-6/12 md:mx-auto">Provision & Our Privacy Policy</p>
                </div>
            </div>
    </footer>
    <!-- akhir footer -->


    <div class="fixed bottom-6 right-2 z-[9999]">
        <a href="#aboutUs" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-green-700 bg-green-700 text-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: currentColor;transform: ;msFilter:;"><path d="m21.743 12.331-9-10c-.379-.422-1.107-.422-1.486 0l-9 10a.998.998 0 0 0-.17 1.076c.16.361.518.593.913.593h2v7a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-4h4v4a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-7h2a.998.998 0 0 0 .743-1.669z"></path></svg>
        </a>
        <a href="#helpCenter" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-green-700 bg-green-700 text-white mt-4">
            <span class="font-bold ">?</span>
        </a>
        <a href="#download" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-green-700 bg-green-700 text-white mt-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:currentColor;transform: ;msFilter:;"><path d="m12 16 4-5h-3V4h-2v7H8z"></path><path d="M20 18H4v-7H2v7c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2v-7h-2v7z"></path></svg>
        </a>

    </div>
@endsection


