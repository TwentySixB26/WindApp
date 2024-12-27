<nav class="flex-no-wrap relative flex max-w-full items-center justify-between bg-[rgba(13,19,24,1)] lg:bg-[rgba(13,19,24,0.6)] py-5 md:py-7 px-5 shadow-dark-mild lg:flex-wrap lg:justify-start lg:py-[5px]  lg:rounded-full z-50">
    <div class="flex w-full flex-wrap items-center justify-between px-3 ">
        <!-- Hamburger button for mobile view -->
        <button class="block border-0 bg-transparent  text-green-1000 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-white lg:hidden" type="button" data-twe-collapse-init data-twe-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation" id="buttonHamburger">
            <span class="[&>svg]:w-7 [&>svg]:stroke-white dark:[&>svg]:stroke-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path d="M4 11h12v2H4zm0-5h16v2H4zm0 12h7.235v-2H4z"></path></svg>
            </span>
        </button>

        <!-- Collapsible navigation container -->
        <div class="lg:visible invisible hidden flex-grow basis-[100%] items-center lg:!flex lg:basis-auto" id="navbarSupportedContent1" data-twe-collapse-item>
            <!-- Logo -->
            <a class="mb-4 me-5 ms-2 mt-3 flex items-center text-green-50 hover:text-green-600 focus:text-green-600 lg:mb-0 lg:mt-0" href="#aboutUs"   style="text-shadow: 2px 2px 3px rgba(0, 0, 0,0.8);">
                <span class="font-breeSerif">Wind App</span> <img src="img/logo.png" alt="" class="ml-1" srcset="" width="45px">
            </a>
            <!-- Left navigation links -->
            <ul class="list-style-none me-auto flex flex-col ps-0 lg:flex-row" data-twe-navbar-nav-ref>

                <!-- Dashboard link -->
                <li class="mb-4 lg:mb-0 lg:pe-2" data-twe-nav-item-ref>
                    <a class="text-green-50 transition duration-200  hover:ease-in-out focus:text-green-600 active:text-green-600 motion-reduce:transition-none lg:px-3 font-firaSans font-normal hover:text-green-600" href="#aboutUs"   style="text-shadow: 2px 2px 3px rgba(0, 0, 0,0.8);" data-twe-nav-link-ref>
                        About Us
                    </a>
                </li>

                <!-- Team link -->
                <li class="mb-4 lg:mb-0 lg:pe-2" data-twe-nav-item-ref>
                    <a class="text-green-50 transition duration-200 hover:ease-in-out focus:text-green-600 active:text-green-600 motion-reduce:transition-none lg:px-3 font-firaSans font-normal hover:text-green-600" href="#helpCenter"   style="text-shadow: 2px 2px 3px rgba(0, 0, 0,0.8);" data-twe-nav-link-ref>
                        Help Center
                    </a>
                </li>

                <!-- Projects link -->
                <li class="mb-4 lg:mb-0 lg:pe-2" data-twe-nav-item-ref>
                    <a class="text-green-50 transition duration-200 hover:ease-in-out focus:text-green-600 active:text-green-600 motion-reduce:transition-none lg:px-3 font-firaSans font-normal hover:text-green-600" href="#download"  style="text-shadow: 2px 2px 3px rgba(0, 0, 0,0.8);" data-twe-nav-link-ref>
                        Download App
                    </a>
                </li>
            </ul>
            <!-- Left links -->
        </div>

        <!-- Right elements -->
        <div class="relative flex items-center px-0 md:px-5 ">
            <div class="">
                <a class="flex text-sky-100 transition duration-200 hover:ease-in-out focus:text-green-600 active:text-green-600 motion-reduce:transition-none lg:px-3 font-firaSans font-normal hover:text-green-600 lg:mr-2 md:mr-6 mr-4 md:text-base text-sm " href="/login" data-twe-nav-link-ref>
                    <span class="mr-1">Log in</span> <svg xmlns="http://www.w3.org/2000/svg" class="w-[20px] md:w-[24px] lg:w-[22px] h-[20px] md:h-[24px] lg:h-[22px] " viewBox="0 0 24 24" style="fill: currentColor;transform: msFilter;"><path d="m13 16 5-4-5-4v3H4v2h9z"></path><path d="M20 3h-9c-1.103 0-2 .897-2 2v4h2V5h9v14h-9v-4H9v4c0 1.103.897 2 2 2h9c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2z"></path></svg>
                </a>
            </div>
            <div class="">
                <a class="bg-green-700 text-white md:px-5 px-4 md:py-[9px] py-[7px] rounded-full md:text-sm text-xs  hover:border border border-green-700 hover:border-white hover:bg-[rgba(13,19,24,1)] hover:text-white" href="/register">Register</a>
            </div>
        </div>
        <!-- Right elements -->


    </div>
</nav>

{{-- menu drop down  --}}
<div class="invisible bg-[rgba(13,19,24,1)] absolute w-full px-5 flex-grow basis-[100%] items-center lg:invisible lg:hidden  lg:basis-auto  transition duration-200 ease-in-out rounded-b-xl mt-[-1px] z-40"  data-twe-collapse-item id="menuHamburger">
    <div class="w-full flex-wrap items-center justify-between px-5 pb-5">
        <!-- Logo -->
        <a class="m-auto flex py-2  items-center text-sky-50 hover:text-green-600 focus:text-green-600 lg:mb-0 lg:mt-0" href="#aboutUs">
            <span class="font-breeSerif">Wind App</span> <img src="img/logo.png" alt="" class="ml-1" srcset="" width="45px">
        </a>
        <!-- Left navigation links -->
        <ul class="list-style-none me-auto flex flex-col ps-0 lg:flex-row" data-twe-navbar-nav-ref>

            <!-- Dashboard link -->
            <li class="mb-4 lg:mb-0 lg:pe-2" data-twe-nav-item-ref>
                <a class="text-sky-50 transition duration-200  hover:ease-in-out focus:text-green-600 active:text-green-600 motion-reduce:transition-none lg:px-3 font-firaSans font-normal hover:text-green-600" href="#aboutUs" data-twe-nav-link-ref>
                    About Us
                </a>
            </li>

            <!-- Team link -->
            <li class="mb-4 lg:mb-0 lg:pe-2" data-twe-nav-item-ref>
                <a class="text-sky-50 transition duration-200 hover:ease-in-out focus:text-green-600 active:text-green-600 motion-reduce:transition-none lg:px-3 font-firaSans font-normal hover:text-green-600" href="#helpCenter" data-twe-nav-link-ref>
                    Help Center
                </a>
            </li>

            <!-- Projects link -->
            <li class="mb-4 lg:mb-0 lg:pe-2" data-twe-nav-item-ref>
                <a class="text-sky-50 transition duration-200 hover:ease-in-out focus:text-green-600 active:text-green-600 motion-reduce:transition-none lg:px-3 font-firaSans font-normal hover:text-green-600" href="#download" data-twe-nav-link-ref>
                    Download App
                </a>
            </li>
        </ul>
        <!-- Left links -->
    </div>
</div>
{{-- akhir menu drop down  --}}




