<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $article->title }}</title>
    <meta name="author" content="Media ENT">
    <meta name="description" content="{{ $article->title }}">
    <meta name="keywords" content="{{ $article->category->name }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <style>
        .smooth {
            transition: box-shadow 0.3s ease-in-out;
        }

        ::selection {
            background-color: aliceblue
        }
    </style>
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <nav x-data="{ open: false }" id="header" class="text-black bg-gray-300 fixed w-full z-30 top-0 text-white">
        <div id="navbody" class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
            <div class="pl-4 flex items-center">
                <a class="toggleColour flex flex-row" href="{{ route('home') }}">
                    <img id="navlogo" class="h-20 duration-700 ease-in-out" src="ent.png" alt="">
                    <div id="navtitle" class="text-black mx-5 py-5 font-bold text-2xl lg:text-4xl">Media ENT</div>
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
                class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 text-black p-4 lg:p-0 z-20">
                <ul class="list-reset lg:flex justify-end flex-1 items-center">
                    <li class="mr-3">
                        <x-nav-link>
                            <a href="{{ route('home') }}"
                                class="hover:text-gray-100 mx-auto py-2 px-4 inline-block lg:mx-0 hover:no-underline font-medium focus:outline-none transform transition hover:scale-105 duration-300 ease-in-out">
                                HOME
                            </a>
                        </x-nav-link>
                    </li>
                    <li class="mr-3">
                        <x-nav-link>
                            <button
                                class="hover:text-gray-100 mx-auto py-2 px-4 inline-block lg:mx-0 hover:no-underline font-medium focus:outline-none transform transition hover:scale-105 duration-300 ease-in-out">
                                ABOUT
                            </button>
                        </x-nav-link>
                    </li>
                    @auth
                    @hasanyrole('admin|author')
                    <li class="mr-3">
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('login')">
                            <button
                                class="bg-white mx-auto lg:mx-0 hover:no-underline text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                DASHBOARD
                            </button>
                        </x-nav-link>
                    </li>
                    @endhasanyrole
                    <li class="mr-3">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button
                                    class="flex items-center text-sm font-medium focus:outline-none focus:text-gray-600 transition duration-150 ease-in-out">
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
                            <button
                                class=" hover:text-gray-100 mx-auto py-2 px-4 inline-block lg:mx-0 hover:no-underline font-medium focus:outline-none transform transition hover:scale-105 duration-300 ease-in-out">
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
    <!--Title-->
    <div class="text-center pt-16 md:pt-32">
        <p class="uppercase text-sm md:text-base text-blue-500 font-bold">
            {{ \Carbon\Carbon::parse( $article->created_at )->format('l, j F Y h:i A')}}
            <span class="text-gray-900">/</span>
            Surabaya
        </p>
    </div>

    <!--image-->
    <div class="container w-full max-w-6xl mx-auto bg-white bg-cover mt-8 rounded"
        style="background-image:url('https://source.unsplash.com/collection/1118905/'); height: 75vh;"></div>

    <!--Container-->
    <div class="container max-w-5xl mx-auto -mt-32">

        <div class="mx-0 sm:mx-6">

            <div class="bg-white w-full p-8 md:p-24 text-xl md:text-2xl text-gray-800 leading-normal"
                style="font-family:Georgia,serif;">

                <!--Post Content-->

                <!--Lead Para-->
                <p class="text-2xl md:text-3xl mb-5">
                    <span
                        class="text-center text-gray-800 hover:text-gray-500 border-b-2 border-blue-500">{{ $article->title }}</span>
                </p>

                <!-- body -->
                <div>
                    {!! html_entity_decode($article->body) !!}
                </div>
            </div>
        </div>
    </div>
    <footer class="w-full text-center uppercase bg-gray-200 p-4">
        BY <a target="_blank" href="https://davidgrzyb.com" class="underline">Media ENT- 2021</a>.
    </footer>
</body>

</html>