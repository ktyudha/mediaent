{{-- <div class="leading-normal tracking-normal text-white gradient rounded-b-3xl"
    style="font-family: 'Source Sans Pro', sans-serif;">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/tailwind.css">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="carousel.css">

    <style>
        .gradient {
            background: linear-gradient(90deg, #037e9c 0%, #064ca7 100%);
        }

        .hover-gradient {
            background: linear-gradient(90deg, #064ca7 0%, #037e9c 100%);
        }

        .foto {
            height: 200px;
            weight: 200px;
        }
    </style>
    <script src="tailwind.config.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="carousel.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" charset="utf-8"></script>
    <nav x-data="{ open: false }" id="header" class=" fixed w-full z-30 top-0 text-white">
        <div id="navbody" class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
            <div class="pl-4 flex items-center">
                <a class="toggleColour flex flex-row text-white" href="{{ route('home') }}">
                    <img id="navlogo" class="h-20 duration-700 ease-in-out" src="{{ asset('ent.png') }}" alt="">
                    <div id="navtitle" class="mx-5 py-5 font-bold text-2xl lg:text-4xl">Media ENT</div>
                </a>
            </div>
            <div class="block lg:hidden pr-4">
                <button id="nav-toggle"
                    class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    <svg class="fill-current h-6 w-6" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>
            <div id="nav-content"
                class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-gray-400 lg:bg-transparent text-black p-4 lg:p-0 z-20">
                <ul class="list-reset lg:flex justify-end flex-1 items-center">
                    <li class="mr-3">
                        <x-nav-link>
                            <a href="{{ route('home') }}" id="navlink"
                                class="text-white hover:text-gray-100 mx-auto py-2 px-4 inline-block lg:mx-0 hover:no-underline font-medium focus:outline-none transform transition hover:scale-105 duration-300 ease-in-out">
                                HOME
                            </a>
                        </x-nav-link>
                    </li>
                    <li class="mr-3">
                        <x-nav-link>
                            <a href="{{ route('about') }}" id="navlink"
                                class="text-white hover:text-gray-100 mx-auto py-2 px-4 inline-block lg:mx-0 hover:no-underline font-medium focus:outline-none transform transition hover:scale-105 duration-300 ease-in-out">
                                ABOUT
                            </a>
                        </x-nav-link>
                    </li>
                    @auth
                    @hasanyrole('admin|author')
                    <li class="mr-3">
                        <x-nav-link :href="route('admin.home')" :active="request()->routeIs('login')">
                            <button id="navAction"
                                class="mx-auto lg:mx-0 hover:no-underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                DASHBOARD
                            </button>
                        </x-nav-link>
                    </li>
                    @endhasanyrole
                    <li class="mr-3">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button
                                    class="flex items-center text-sm font-medium text-white focus:outline-none focus:text-gray-300 transition duration-150 ease-in-out">
                                    <div>{{ Auth::user()->name }}</div>

                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </li>
                    @else
                    <li class="mr-3">
                        <x-nav-link :href="route('register')" :active="request()->routeIs('register')">
                            <button id="navlink"
                                class="text-white hover:text-gray-100 mx-auto py-2 px-4 inline-block lg:mx-0 hover:no-underline font-medium focus:outline-none transform transition hover:scale-105 duration-300 ease-in-out">
                                REGISTER
                            </button>
                        </x-nav-link>
                    </li>
                    <li class="mr-3">
                        <x-nav-link :href="route('login')" :active="request()->routeIs('login')">
                            <button id="navAction"
                                class="mx-auto lg:mx-0 hover:no-underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                LOGIN
                            </button>
                        </x-nav-link>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
        <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
    </nav>
</div> --}}


{{-- <script>
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
    </script> --}}
