<nav x-data="{ open: false }" id="header" class=" fixed w-full z-30 top-0 text-white">
        <div id="navbody" class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
            <div class="pl-4 flex items-center">
                <a class="toggleColour flex flex-row text-white" href="{{ route('home') }}">
                    <img id="navlogo" class="h-20 duration-700 ease-in-out" src="ent.png" alt="">
                    <div id="navtitle" class="mx-5 py-5 font-bold text-2xl lg:text-4xl">Media ENT</div>

                </a>
            </div>
            <div class="block lg:hidden pr-4">
                <button id="nav-toggle" class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                        <svg
                            class="fill-current h-6 w-6"
                            viewbox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>Menu</title>
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                        </svg>
                    </button>
            </div>
            <div id="nav-content" class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-gray-400 lg:bg-transparent text-black p-4 lg:p-0 z-20">
                <ul class="list-reset lg:flex justify-end flex-1 items-center">
                    <li class="mr-3">
                        <x-nav-link>
                            <button id="navlink" class="text-white hover:text-gray-100 mx-auto py-2 px-4 inline-block lg:mx-0 hover:no-underline font-medium focus:outline-none transform transition hover:scale-105 duration-300 ease-in-out">
                                HOME
                            </button>
                        </x-nav-link>
                    </li>
                    <li class="mr-3">
                        <x-nav-link>
                            <button id="navlink" class="text-white hover:text-gray-100 mx-auto py-2 px-4 inline-block lg:mx-0 hover:no-underline font-medium focus:outline-none transform transition hover:scale-105 duration-300 ease-in-out">
                                ABOUT
                            </button>
                        </x-nav-link>
                    </li>
                        @if (Route::has('login'))
                        @auth
                            <li class="mr-3">
                                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('login')">
                                        <button id="navAction" class="mx-auto lg:mx-0 hover:no-underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                            DASHBOARD
                                        </button>
                                    </x-nav-link>
                                </li>
                            @else
                                @if (Route::has('register'))
                                <li class="mr-3">
                                    <x-nav-link :href="route('register')" :active="request()->routeIs('register')">
                                        <button id="navlink" class="text-white hover:text-gray-100 mx-auto py-2 px-4 inline-block lg:mx-0 hover:no-underline font-medium focus:outline-none transform transition hover:scale-105 duration-300 ease-in-out">
                                            REGISTER
                                        </button>
                                    </x-nav-link>
                                </li>
                                @endif
                                <li class="mr-3">
                                    <x-nav-link :href="route('login')" :active="request()->routeIs('login')">
                                        <button id="navAction" class="mx-auto lg:mx-0 hover:no-underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                            LOGIN
                                        </button>
                                    </x-nav-link>
                                </li>
                            @endif
                        @endif
                </ul>
            </div>
    <!-- Primary Navigation Menu -->



    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        @auth
        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                <div class="flex-shrink-0">
                    <svg class="h-10 w-10 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </div>

                <div class="ml-3">
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
        @endauth
    </div>
    </div>
    <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
</nav>

<script>
        var scrollpos = window.scrollY;
        var header = document.getElementById("header");
        var navcontent = document.getElementById("nav-content");
        var navaction = document.getElementById("navAction");
        var brandname = document.getElementById("brandname");
        var toToggle = document.querySelectorAll(".toggleColour");
        var navlogo = document.getElementById("navlogo");
        var navtitle = document.getElementById("navtitle");
        var navbody = document.getElementById("navbody");
        var btn_selengkapnya = document.getElementById("btn-selengkapnya");

        document.addEventListener("scroll", function() {
            /*Apply classes for slide in bar*/
            scrollpos = window.scrollY;

            if (scrollpos > 10) {
                btn_selengkapnya.classList.remove("gradient");
                btn_selengkapnya.classList.add("hover-gradient");
                header
                    .classList
                    .add("bg-gray-400");
                navaction
                    .classList
                    .remove("gradient");
                navaction
                    .classList
                    .add("gradient");
                navaction
                    .classList
                    .remove("text-gray-800");
                navaction
                    .classList
                    .add("text-white");
                navaction
                    .classList
                    .remove("py-4");
                navaction
                    .classList
                    .remove("px-8");
                navaction
                    .classList
                    .add("py-2");
                navaction
                    .classList
                    .add("px-4");

                navlogo
                    .classList
                    .remove("h-20");
                navlogo
                    .classList
                    .add("h-12");
                navlogo
                    .classList
                    .add("py-1");
                navtitle
                    .classList
                    .remove("py-5");
                navtitle
                    .classList
                    .add("py-2");
                navtitle
                    .classList
                    .remove("lg:text-4xl");
                navtitle
                    .classList
                    .add("lg:text-lg");
                navtitle
                    .classList
                    .remove("mx-5");
                navtitle
                    .classList
                    .add("mx-1");

                navbody
                    .classList
                    .remove("py-2");

                //Use to switch toggleColour colours
                for (var i = 0; i < toToggle.length; i++) {
                    toToggle[i]
                        .classList
                        .add("text-gray-800");
                    toToggle[i]
                        .classList
                        .remove("text-white");
                }

                header
                    .classList
                    .add("shadow");
                navcontent
                    .classList
                    .remove("bg-gray-400");
                navcontent
                    .classList
                    .add("bg-gray-400");
            } else {
                header
                    .classList
                    .remove("bg-gray-400");
                navaction
                    .classList
                    .remove("gradient");
                navaction
                    .classList
                    .add("gradient");
                navaction
                    .classList
                    .remove("text-white");
                navaction
                    .classList
                    .add("text-gray-800");

                navaction
                    .classList
                    .add("py-4");
                navaction
                    .classList
                    .add("px-8");
                navaction
                    .classList
                    .remove("py-2");
                navaction
                    .classList
                    .remove("px-4");
                navtitle
                    .classList
                    .add("mx-5");
                navtitle
                    .classList
                    .remove("mx-1");

                navbody
                    .classList
                    .add("py-2");

                //Use to switch toggleColour colours
                for (var i = 0; i < toToggle.length; i++) {
                    toToggle[i]
                        .classList
                        .add("text-white");
                    toToggle[i]
                        .classList
                        .remove("text-gray-800");
                }

                header
                    .classList
                    .remove("shadow");
                navcontent
                    .classList
                    .remove("bg-gray-400");
                navcontent
                    .classList
                    .add("bg-gray-400");

                navlogo
                    .classList
                    .add("h-20");
                navlogo
                    .classList
                    .remove("h-10");
                navtitle
                    .classList
                    .add("py-5");
                navtitle
                    .classList
                    .add("lg:text-4xl");
                navtitle
                    .classList
                    .add("sm:text-2xl");
                navlogo
                    .classList
                    .add("duration-700");
                navtitle
                    .classList
                    .add("duration-700");

            }
        });
    </script>
    <script>
        /*Toggle dropdown list*/
        /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

        var navMenuDiv = document.getElementById("nav-content");
        var navMenu = document.getElementById("nav-toggle");

        document.onclick = check;

        function check(e) {
            var target = (e && e.target) || (event && event.srcElement);

            //Nav Menu
            if (!checkParent(target, navMenuDiv)) {
                // click NOT on the menu
                if (checkParent(target, navMenu)) {
                    // click on the link
                    if (navMenuDiv.classList.contains("hidden")) {
                        navMenuDiv
                            .classList
                            .remove("hidden");
                    } else {
                        navMenuDiv
                            .classList
                            .add("hidden");
                    }
                } else {
                    // click both outside link and outside menu, hide menu
                    navMenuDiv
                        .classList
                        .add("hidden");
                }
            }
        }

        function checkParent(t, elm) {
            while (t.parentNode) {
                if (t == elm) {
                    return true;
                }
                t = t.parentNode;
            }
            return false;
        }
    </script>
