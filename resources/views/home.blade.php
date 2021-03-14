<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot> --}}

        <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
        Media Ent
    </title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <link rel="stylesheet" href="carousel.css">
    <style>
        .gradient {
            background: linear-gradient(90deg, #037e9c 0%, #064ca7 100%);
        }

        .hover-gradient {
            background: linear-gradient(90deg, #064ca7 0%, #037e9c 100%);
        }

        .example-slide {
            align-items: center;
            background-color: #666;
            color: #999;
            display: flex;
            font-size: 1.5rem;
            justify-content: center;
            min-height: 10rem;
        }
    </style>

    <script src="tailwind.config.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="carousel.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
</head>

<div class="leading-normal tracking-normal text-white gradient rounded-b-3xl" style="font-family: 'Source Sans Pro', sans-serif;">

    <!--Hero-->
    <div class="py-12"></div>
    <div class="mx-10 mt-3 ">
        <!-- fitur carousel -->
        <div class="bg-white carousel relative container mx-auto " style="max-width:1600px;">
            <div class="carousel-inner relative overflow-hidden w-full">
                <figure>
                    <!--Slide 1-->
                    <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
                    <div class="carousel-item absolute opacity-0 rounded-lg" style="height:50vh;">
                        <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right" style="background-image: url('');">
                            <div class="container mx-auto">
                                <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                                    <p class="text-black text-2xl my-4">Stripy Zig Zag Jigsaw Pillow and Duvet Set</p>
                                    <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black" href="#">view product</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <label for="carousel-3" class="duration-700 prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                    <label for="carousel-2" class="duration-700 next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

                    <!--Slide 2-->
                    <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
                    <div class="carousel-item absolute opacity-0 bg-cover bg-right" style="height:50vh;">
                        <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right" style="background-image: url();">

                            <div class="container mx-auto">
                                <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                                    <p class="text-black text-2xl my-4">Real Bamboo Wall Clock</p>
                                    <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black" href="#">view product</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <label for="carousel-1" class="duration-700 prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                    <label for="carousel-3" class="duration-700 next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

                    <!--Slide 3-->
                    <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
                    <div class="carousel-item absolute opacity-0" style="height:50vh;">
                        <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-bottom" style="background-image: url();">

                            <div class="container mx-auto">
                                <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                                    <p class="text-black text-2xl my-4">Brown and blue hardbound book</p>
                                    <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black" href="#">view product</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <label for="carousel-2" class=" duration-700 prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                    <label for="carousel-1" class="duration-700 next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

                    <!-- indikator slide-->
                    <ol class="carousel-indicators">
                        <li class="inline-block mr-3">
                            <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                        </li>
                        <li class="inline-block mr-3">
                            <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                        </li>
                        <li class="inline-block mr-3">
                            <label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                        </li>
                    </ol>
                </figure>
            </div>
        </div>
    </div>
    <!-- end carousel -->
    <div class="mx-auto items-center">
        <div class="pt-7 text-center pb-40 font-bold text-gray-300 text-3xl">
            Popular Posts
        </div>
    </div>

</div>

<body class="leading-normal tracking-normal text-white bg-gray-200">

    <!-- Featured Post 1 -->
    <section class="text-gray-500 body-font">
        <div class="px-5 pb-12 pt-0 -mt-40 mx-auto">
            <div class="flex flex-wrap">
                <div class="group p-4 md:w-1/3 ">
                    <div class="bg-white group-hover:shadow-2xl duration-700 group-hover:border-gray-900 h-full shadow-md border-opacity-60 rounded-lg overflow-hidden">
                        <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://dummyimage.com/720x400" alt="blog">
                        <div class="p-6 pt-2">
                            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
                            <a href="" class="hover:underline">
                                <h1 class="title-font text-lg font-medium text-xl text-gray-900 mb-3">Tempat wisata paling menabjubkan di Surabaya</h1>
                            </a>
                            <p class="leading-relaxed mb-3 group-hover:text-gray-600 text-md">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.
                            </p>
                            <div class="flex items-center flex-wrap ">
                                <a href="">
                                    <button id="btn-selengkapnya" class="gradient hover:bg-gray-700 hover:text-indigo-300 inline-flex mx-auto lg:mx-0 hover:no-underline text-gray-300 font-bold rounded-full lg:mt-0 text-center py-1 px-3 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                            Selengkapnya
                                            <svg
                                                class="w-5 h-5 ml-2 items-center my-auto"
                                                viewbox="0 0 24 24"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                fill="none"
                                                stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M5 12h14"></path>
                                                <path d="M12 5l7 7-7 7"></path>
                                            </svg>
                                        </button>
                                </a>

                                <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                        <svg
                                            class="w-4 h-4 mr-1"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            fill="none"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            viewbox="0 0 24 24">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>1.2K
                                    </span>
                                <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                        <svg
                                            class="w-4 h-4 mr-1"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            fill="none"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            viewbox="0 0 24 24">
                                            <path
                                                d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                                        </svg>6
                                    </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group p-4 md:w-1/3 ">
                    <div class="bg-white group-hover:shadow-2xl duration-700 group-hover:border-gray-900 h-full shadow-md border-opacity-60 rounded-lg overflow-hidden">
                        <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://dummyimage.com/720x400" alt="blog">
                        <div class="p-6 pt-2">
                            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
                            <a href="" class="hover:underline">
                                <h1 class="title-font text-lg font-medium text-xl text-gray-900 mb-3">Tempat wisata paling menabjubkan di Surabaya</h1>
                            </a>
                            <p class="leading-relaxed mb-3 group-hover:text-gray-600 text-md">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.
                            </p>
                            <div class="flex items-center flex-wrap ">
                                <a href="">
                                    <button id="btn-selengkapnya" class="gradient hover:bg-gray-700 hover:text-indigo-300 inline-flex mx-auto lg:mx-0 hover:no-underline text-gray-300 font-bold rounded-full lg:mt-0 text-center py-1 px-3 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                            Selengkapnya
                                            <svg
                                                class="w-5 h-5 ml-2 items-center my-auto"
                                                viewbox="0 0 24 24"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                fill="none"
                                                stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M5 12h14"></path>
                                                <path d="M12 5l7 7-7 7"></path>
                                            </svg>
                                        </button>
                                </a>

                                <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                        <svg
                                            class="w-4 h-4 mr-1"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            fill="none"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            viewbox="0 0 24 24">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>1.2K
                                    </span>
                                <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                        <svg
                                            class="w-4 h-4 mr-1"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            fill="none"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            viewbox="0 0 24 24">
                                            <path
                                                d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                                        </svg>6
                                    </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="group p-4 md:w-1/3 ">
                    <div class="bg-white group-hover:shadow-2xl duration-700 group-hover:border-gray-900 h-full shadow-md border-opacity-60 rounded-lg overflow-hidden">
                        <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://dummyimage.com/720x400" alt="blog">
                        <div class="p-6 pt-2">
                            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
                            <a href="" class="hover:underline">
                                <h1 class="title-font text-lg font-medium text-xl text-gray-900 mb-3">Tempat wisata paling menabjubkan di Surabaya</h1>
                            </a>
                            <p class="leading-relaxed mb-3 group-hover:text-gray-600 text-md">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.
                            </p>
                            <div class="flex items-center flex-wrap ">
                                <a href="">
                                    <button id="btn-selengkapnya" class="gradient hover:bg-gray-700 hover:text-indigo-300 inline-flex mx-auto lg:mx-0 hover:no-underline text-gray-300 font-bold rounded-full lg:mt-0 text-center py-1 px-3 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                            Selengkapnya
                                            <svg
                                                class="w-5 h-5 ml-2 items-center my-auto"
                                                viewbox="0 0 24 24"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                fill="none"
                                                stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M5 12h14"></path>
                                                <path d="M12 5l7 7-7 7"></path>
                                            </svg>
                                        </button>
                                </a>

                                <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                        <svg
                                            class="w-4 h-4 mr-1"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            fill="none"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            viewbox="0 0 24 24">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>1.2K
                                    </span>
                                <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                        <svg
                                            class="w-4 h-4 mr-1"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            fill="none"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            viewbox="0 0 24 24">
                                            <path
                                                d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                                        </svg>6
                                    </span>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- Featured Post 2 -->
    <div class="px-0 mx-auto flex flex-wrap flex-col md:flex-row items-center">
        <!--Left Col-->
        <div class="ml-0 flex flex-col w-full md:w-1/3 justify-center items-start text-center md:text-left">
            <div class="bg-white mb-2 ml-5 sm:ml-10 sm:mr-3 mr-5 max-w-2xl mx-auto overflow-hidden bg-white rounded-lg shadow-md">
                <img class="object-cover w-full h-41" src="https://images.unsplash.com/photo-1550439062-609e1531270e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Article">

                <div class="p-6">
                    <div>
                        <span class="text-xs font-medium text-blue-600 uppercase">Kategori</span>
                        <a href="#" class="block mt-2 text-2xl font-semibold text-gray-800 hover:text-gray-600 hover:underline">Ini adalah judul featured</a>
                        <p class="mt-2 text-sm text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Molestie parturient et sem ipsum volutpat vel. Natoque sem et aliquam mauris egestas quam volutpat viverra. In pretium nec senectus erat. Et malesuada lobortis.</p>
                    </div>

                    <div class="mt-2 mb-0">
                        <div class="flex items-center flex-col md:text-left">
                            <div class="items-center flex hover:text-gray-700 text-gray-400">
                                <a href="#" class=" inline-block font-semibold">Selengkapnya
                                        <svg
                                            class="inline-block h-5 w-5 "
                                            viewbox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <line x1="5" y1="12" x2="19" y2="12"/>
                                            <polyline points="12 5 19 12 12 19"/></svg>
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Right Col-->
        <div class="w-full md:w-2/3 py-6 md:text-left text-center md:overflow-auto h-90">
            <section class="text-gray-600 body-font overflow-hidden">
                <div class="px-1 py-2 mx-auto">
                    <div class="my-2 ml-2 mr-10 divide-y-2 divide-gray-100 bg-white rounded-lg">
                        <div class="flex flex-wrap md:flex-nowrap">
                            <div class="md:w-64 md:mb-0 mb-6 md:flex-shrink-0 flex flex-col max-w-2xl mx-auto overflow-hidden">
                                <img class="object-cover w-full h-90 rounded-l-lg" src="https://images.unsplash.com/photo-1550439062-609e1531270e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Article">
                                <div class="w-56 -mt-10 overflow-hidden bg-white rounded-tl-lg rounded-bl-lg rounded-tr-lg shadow-lg md:w-64">
                                    <h5 class="border-solid border-2 border-light-blue-700 py-1 font-medium tracking-wide text-center shadow-lg text-gray-800 uppercase">teknologi</h5>
                                </div>
                            </div>
                            <div class="md:flex-grow-0 py-2 px-2">
                                <h2 class="text-xl font-bold text-gray-900 title-font mb-2">Bitters hashtag waistcoat fashion axe chia unicorn</h2>
                                <p class="leading-relaxed">Glossier echo park pug, church-key sartorial biodiesel vexillologist pop-up snackwave ramps cornhole. Marfa 3 wolf moon party messenger bag selfies, poke vaporware kombucha lumbersexual pork belly polaroid hoodie portland
                                    craft beer.</p>
                                <a class="text-blue-500 inline-flex items-center mt-4">Teknologi Selengkapnya
                                        <svg
                                            class="w-4 h-4 ml-2"
                                            viewbox="0 0 24 24"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            fill="none"
                                            stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="text-gray-600 body-font overflow-hidden">
                <div class="px-1 py-2 mx-auto">
                    <div class="my-2 ml-2 mr-10 divide-y-2 divide-gray-100 bg-white rounded-lg">
                        <div class="flex flex-wrap md:flex-nowrap">
                            <div class="md:w-64 md:mb-0 mb-6 md:flex-shrink-0 flex flex-col max-w-2xl mx-auto overflow-hidden">
                                <img class="object-cover w-full h-90 rounded-l-lg" src="https://images.unsplash.com/photo-1550439062-609e1531270e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Article">
                                <div class="w-56 -mt-10 overflow-hidden bg-white rounded-tl-lg rounded-bl-lg rounded-tr-lg shadow-lg md:w-64">
                                    <h5 class="border-solid border-2 border-light-blue-700 py-1 font-medium tracking-wide text-center shadow-lg text-gray-800 uppercase">Eksplore</h5>
                                </div>
                            </div>
                            <div class="md:flex-grow-0 py-2 px-2">
                                <h2 class="text-xl font-bold text-gray-900 title-font mb-2">Bitters hashtag waistcoat fashion axe chia unicorn</h2>
                                <p class="leading-relaxed">Glossier echo park pug, church-key sartorial biodiesel vexillologist pop-up snackwave ramps cornhole. Marfa 3 wolf moon party messenger bag selfies, poke vaporware kombucha lumbersexual pork belly polaroid hoodie portland
                                    craft beer.</p>
                                <a class="text-blue-500 inline-flex items-center mt-4">Eksplore Selengkapnya
                                        <svg
                                            class="w-4 h-4 ml-2"
                                            viewbox="0 0 24 24"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            fill="none"
                                            stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="text-gray-600 body-font overflow-hidden">
                <div class="px-1 py-2 mx-auto">
                    <div class="my-2 ml-2 mr-10 divide-y-2 divide-gray-100 bg-white rounded-lg">
                        <div class="flex flex-wrap md:flex-nowrap">
                            <div class="md:w-64 md:mb-0 mb-6 md:flex-shrink-0 flex flex-col max-w-2xl mx-auto overflow-hidden">
                                <img class="object-cover w-full h-90 rounded-l-lg" src="https://images.unsplash.com/photo-1550439062-609e1531270e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Article">
                                <div class="w-56 -mt-10 overflow-hidden bg-white rounded-tl-lg rounded-bl-lg rounded-tr-lg shadow-lg md:w-64">
                                    <h5 class="border-solid border-2 border-light-blue-700 py-1 font-medium tracking-wide text-center shadow-lg text-gray-800 uppercase">Lifestyle</h5>
                                </div>
                            </div>
                            <div class="md:flex-grow-0 py-2 px-2">
                                <h2 class="text-xl font-bold text-gray-900 title-font mb-2">Bitters hashtag waistcoat fashion axe chia unicorn</h2>
                                <p class="leading-relaxed">Glossier echo park pug, church-key sartorial biodiesel vexillologist pop-up snackwave ramps cornhole. Marfa 3 wolf moon party messenger bag selfies, poke vaporware kombucha lumbersexual pork belly polaroid hoodie portland
                                    craft beer.</p>
                                <a class="text-blue-500 inline-flex items-center mt-4">Lifestyle Selengkapnya
                                        <svg
                                            class="w-4 h-4 ml-2"
                                            viewbox="0 0 24 24"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            fill="none"
                                            stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="text-gray-600 body-font overflow-hidden">
                <div class="px-1 py-2 mx-auto">
                    <div class="my-2 ml-2 mr-10 divide-y-2 divide-gray-100 bg-white rounded-lg">
                        <div class="flex flex-wrap md:flex-nowrap">
                            <div class="md:w-64 md:mb-0 mb-6 md:flex-shrink-0 flex flex-col max-w-2xl mx-auto overflow-hidden">
                                <img class="object-cover w-full h-90 rounded-l-lg" src="https://images.unsplash.com/photo-1550439062-609e1531270e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Article">
                                <div class="w-56 -mt-10 overflow-hidden bg-white rounded-tl-lg rounded-bl-lg rounded-tr-lg shadow-lg md:w-64">
                                    <h5 class="border-solid border-2 border-light-blue-700 py-1 font-medium tracking-wide text-center shadow-lg text-gray-800 uppercase">hiburan</h5>
                                </div>
                            </div>
                            <div class="md:flex-grow-0 py-2 px-2">
                                <h2 class="text-xl font-bold text-gray-900 title-font mb-2">Bitters hashtag waistcoat fashion axe chia unicorn</h2>
                                <p class="leading-relaxed">Glossier echo park pug, church-key sartorial biodiesel vexillologist pop-up snackwave ramps cornhole. Marfa 3 wolf moon party messenger bag selfies, poke vaporware kombucha lumbersexual pork belly polaroid hoodie portland
                                    craft beer.</p>
                                <a class="text-blue-500 inline-flex items-center mt-4">Hiburan Selengkapnya
                                        <svg
                                            class="w-4 h-4 ml-2"
                                            viewbox="0 0 24 24"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            fill="none"
                                            stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <section class="text-gray-600 body-font overflow-hidden">
                <div class="px-1 py-2 mx-auto">
                    <div class="my-2 ml-2 mr-10 divide-y-2 divide-gray-100 bg-white rounded-lg">
                        <div class="flex flex-wrap md:flex-nowrap">
                            <div class="md:w-64 md:mb-0 mb-6 md:flex-shrink-0 flex flex-col max-w-2xl mx-auto overflow-hidden">
                                <img class="object-cover w-full h-90 rounded-l-lg" src="https://images.unsplash.com/photo-1550439062-609e1531270e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Article">
                                <div class="w-56 -mt-10 overflow-hidden bg-white rounded-tl-lg rounded-bl-lg rounded-tr-lg shadow-lg md:w-64">
                                    <h5 class="border-solid border-2 border-light-blue-700 py-1 font-medium tracking-wide text-center shadow-lg text-gray-800 uppercase">VIDEO</h5>
                                </div>
                            </div>
                            <div class="md:flex-grow-0 py-2 px-2">
                                <h2 class="text-xl font-bold text-gray-900 title-font mb-2">Bitters hashtag waistcoat fashion axe chia unicorn</h2>
                                <p class="leading-relaxed">Glossier echo park pug, church-key sartorial biodiesel vexillologist pop-up snackwave ramps cornhole. Marfa 3 wolf moon party messenger bag selfies, poke vaporware kombucha lumbersexual pork belly polaroid hoodie portland
                                    craft beer.</p>
                                <a class="text-blue-500 inline-flex items-center mt-4">Video Selengkapnya
                                        <svg
                                            class="w-4 h-4 ml-2"
                                            viewbox="0 0 24 24"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            fill="none"
                                            stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </div>
    </div>
    <!-- Recents post -->

    <!--Footer-->
    <footer class="bg-white">
        <div class="container mx-auto px-8">
            <div class="w-full flex flex-col md:flex-row py-6">
                <div class="flex-1 mb-6 text-black">
                    <a class="text-blue-600 no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
                        <!--Icon from: http://www.potlabicons.com/ -->
                        <svg class="h-8 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512.005 512.005">
                            <rect
                                fill="#3333E0"
                                x="16.539"
                                y="425.626"
                                width="479.767"
                                height="50.502"
                                transform="matrix(1,0,0,1,0,0)"/>
                            <path
                                class="plane-take-off"
                                d=" M 510.7 189.151 C 505.271 168.95 484.565 156.956 464.365 162.385 L 330.156 198.367 L 155.924 35.878 L 107.19 49.008 L 211.729 230.183 L 86.232 263.767 L 36.614 224.754 L 0 234.603 L 45.957 314.27 L 65.274 347.727 L 105.802 336.869 L 240.011 300.886 L 349.726 271.469 L 483.935 235.486 C 504.134 230.057 516.129 209.352 510.7 189.151 Z "/>
                        </svg> FOOTER
                    </a>
                </div>
                <div class="flex-1">
                    <p class="uppercase text-gray-500 md:mb-6">Links</p>
                    <ul class="list-reset mb-6">
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">FAQ</a>
                        </li>
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Help</a>
                        </li>
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Support</a>
                        </li>
                    </ul>
                </div>
                <div class="flex-1">
                    <p class="uppercase text-gray-500 md:mb-6">Legal</p>
                    <ul class="list-reset mb-6">
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Terms</a>
                        </li>
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Privacy</a>
                        </li>
                    </ul>
                </div>
                <div class="flex-1">
                    <p class="uppercase text-gray-500 md:mb-6">Social</p>
                    <ul class="list-reset mb-6">
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Facebook</a>
                        </li>
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Linkedin</a>
                        </li>
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Twitter</a>
                        </li>
                    </ul>
                </div>
                <div class="flex-1">
                    <p class="uppercase text-gray-500 md:mb-6">Company</p>
                    <ul class="list-reset mb-6">
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Official Blog</a>
                        </li>
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">About Us</a>
                        </li>
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <a href="https://www.freepik.com/free-photos-vectors/background" class="text-gray-500">Background vector created by freepik - www.freepik.com</a>
    </footer>
    <!-- Vue JS -->

    <script>
        var app = new Vue({
            el: '#app',
            data: {
                message: 'Hello Vue!'
            }
        })
    </script>
    <script>
        export default {
            data() {
                return {
                    data: ['<div class="example-slide">Slide 1</div>', '<div class="example-slide">Slide 2</div>', '<div class="example-slide">Slide 3</div>']
                };
            }
        };
    </script>
    <!-- end Vue JS -->
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
                    .add("bg-white");
                navaction
                    .classList
                    .remove("bg-white");
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
                    .remove("bg-gray-100");
                navcontent
                    .classList
                    .add("bg-white");
            } else {
                header
                    .classList
                    .remove("bg-white");
                navaction
                    .classList
                    .remove("gradient");
                navaction
                    .classList
                    .add("bg-white");
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
                    .remove("bg-white");
                navcontent
                    .classList
                    .add("bg-gray-100");

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
</body>

</html>
</x-app-layout>
