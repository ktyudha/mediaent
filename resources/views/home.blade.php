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

    {{-- carousel --}}
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro|Roboto&display=swap" rel="stylesheet">

</head>
<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
    </h2>
    </x-slot> --}}

    <div class="leading-normal tracking-normal text-white gradient rounded-b-3xl"
        style="font-family: 'Source Sans Pro', sans-serif;">

        <!--Hero-->
        <div class="py-12"></div>
        <div class="mx-10 mt-3 ">
            <!-- fitur carousel -->
            <div class="w-full mx-auto my-8 bg-white">
                <div id="slider" class="swiper-container w-full">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide bg-cover bg-center"
                            style="background-image: url('https://www.pens.ac.id/wp-content/uploads/2021/03/PEDDES-WEB.png');">
                            <div class="mx-auto pt-32 pb-0">
                                <div class="w-full">
                                    <div class="py-3 px-6 md:px-10 md:py-6 mt-32 bg-gray-900 bg-opacity-60">
                                        <a href="">
                                            <h2 class="text-2xl text-gray-100 leading-tight"
                                                style="font-family: Niconne, cursive;">ini adalah judul artikel slider
                                            </h2>
                                        </a>
                                        <p class="text-md mt-2 font-light">ini adalah deskripsi singkat judul</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="duration-700 hidden absolute md:flex swiper-button-prev bg-white hover:bg-gray-700 w-12 h-12 text-xs rounded-full text-gray-700 hover:text-gray-100">
                    </div>
                    <div
                        class="duration-700 hidden absolute md:flex swiper-button-next bg-white hover:bg-gray-700 w-12 h-12 text-xs rounded-full text-gray-700 hover:text-gray-100">
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <!-- end carousel -->
            <div class="mx-auto items-center">
                <div class="text-center pb-40 font-bold text-gray-300 text-3xl">
                    Relatest Posts
                </div>
            </div>
        </div>
    </div>

    <body class="leading-normal tracking-normal text-white bg-gray-200">

        <!-- Featured Post 1 -->
        <section class="text-gray-500 body-font">
            <div class="px-5 pb-4 pt-0 -mt-40 mx-auto">
                <div class="flex flex-wrap">
                    <div class="group p-4 md:w-1/3 ">
                        <div
                            class="bg-white group-hover:shadow-2xl duration-700 group-hover:border-gray-900 h-full shadow-md border-opacity-60 rounded-lg overflow-hidden">
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                                src="https://www.pens.ac.id/wp-content/uploads/2021/03/LKMM-TD-PSDKU-WEB.jpg" alt="blog">
                            <div class="p-6 pt-2">
                                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY
                                </h2>
                                <a href="" class="hover:underline">
                                    <h1 class="title-font text-lg font-medium text-xl text-gray-900 mb-3">Tempat wisata
                                        paling menabjubkan di Surabaya</h1>
                                </a>
                                <p class="leading-relaxed mb-3 group-hover:text-gray-600 text-md">Photo booth fam
                                    kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.
                                </p>
                                <div class="flex items-center flex-wrap ">
                                    <a href="">
                                        <button id="btn-selengkapnya"
                                            class="gradient hover:bg-gray-700 hover:text-indigo-300 inline-flex mx-auto lg:mx-0 hover:no-underline text-gray-300 font-bold rounded-full lg:mt-0 text-center py-1 px-3 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                            Selengkapnya
                                            <svg class="w-5 h-5 ml-2 items-center my-auto" viewbox="0 0 24 24"
                                                stroke="currentColor" stroke-width="2" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M5 12h14"></path>
                                                <path d="M12 5l7 7-7 7"></path>
                                            </svg>
                                        </button>
                                    </a>

                                    <span
                                        class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                        <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" viewbox="0 0 24 24">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>1.2K
                                    </span>
                                    <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                        <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" viewbox="0 0 24 24">
                                            <path
                                                d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                            </path>
                                        </svg>6
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="group p-4 md:w-1/3 ">
                        <div
                            class="bg-white group-hover:shadow-2xl duration-700 group-hover:border-gray-900 h-full shadow-md border-opacity-60 rounded-lg overflow-hidden">
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                                src="https://www.pens.ac.id/wp-content/uploads/2021/03/LKMM-TD-PSDKU-WEB.jpg" alt="blog">
                            <div class="p-6 pt-2">
                                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY
                                </h2>
                                <a href="" class="hover:underline">
                                    <h1 class="title-font text-lg font-medium text-xl text-gray-900 mb-3">Tempat wisata
                                        paling menabjubkan di Surabaya</h1>
                                </a>
                                <p class="leading-relaxed mb-3 group-hover:text-gray-600 text-md">Photo booth fam
                                    kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.
                                </p>
                                <div class="flex items-center flex-wrap ">
                                    <a href="">
                                        <button id="btn-selengkapnya"
                                            class="gradient hover:bg-gray-700 hover:text-indigo-300 inline-flex mx-auto lg:mx-0 hover:no-underline text-gray-300 font-bold rounded-full lg:mt-0 text-center py-1 px-3 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                            Selengkapnya
                                            <svg class="w-5 h-5 ml-2 items-center my-auto" viewbox="0 0 24 24"
                                                stroke="currentColor" stroke-width="2" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M5 12h14"></path>
                                                <path d="M12 5l7 7-7 7"></path>
                                            </svg>
                                        </button>
                                    </a>

                                    <span
                                        class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                        <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" viewbox="0 0 24 24">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>1.2K
                                    </span>
                                    <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                        <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" viewbox="0 0 24 24">
                                            <path
                                                d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                            </path>
                                        </svg>6
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="group p-4 md:w-1/3 ">
                        <div
                            class="bg-white group-hover:shadow-2xl duration-700 group-hover:border-gray-900 h-full shadow-md border-opacity-60 rounded-lg overflow-hidden">
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                                src="https://www.pens.ac.id/wp-content/uploads/2021/03/LKMM-TD-PSDKU-WEB.jpg" alt="blog">
                            <div class="p-6 pt-2">
                                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY
                                </h2>
                                <a href="" class="hover:underline">
                                    <h1 class="title-font text-lg font-medium text-xl text-gray-900 mb-3">Tempat wisata
                                        paling menabjubkan di Surabaya</h1>
                                </a>
                                <p class="leading-relaxed mb-3 group-hover:text-gray-600 text-md">Photo booth fam
                                    kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.
                                </p>
                                <div class="flex items-center flex-wrap ">
                                    <a href="">
                                        <button id="btn-selengkapnya"
                                            class="gradient hover:bg-gray-700 hover:text-indigo-300 inline-flex mx-auto lg:mx-0 hover:no-underline text-gray-300 font-bold rounded-full lg:mt-0 text-center py-1 px-3 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                            Selengkapnya
                                            <svg class="w-5 h-5 ml-2 items-center my-auto" viewbox="0 0 24 24"
                                                stroke="currentColor" stroke-width="2" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M5 12h14"></path>
                                                <path d="M12 5l7 7-7 7"></path>
                                            </svg>
                                        </button>
                                    </a>

                                    <span
                                        class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                        <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" viewbox="0 0 24 24">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>1.2K
                                    </span>
                                    <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                        <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" viewbox="0 0 24 24">
                                            <path
                                                d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                            </path>
                                        </svg>6
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 2/3 -->
        <div class="container flex flex-wrap mx-auto ">
            <div class="w-full xl:w-2/3 mb-5">
                <section class="text-gray-600 body-font">
                    {{-- kategori lifestyle --}}
                    <div class="container px-5 mx-auto py-7">
                        <div class="flex flex-wrap w-full mb-3">
                            <div class="lg:w-1/2 w-full mb-4 lg:mb-0">
                                <div>
                                    <a href="#" class="flex group">
                                        <button class="duration-700 flex sm:text-4xl text-3xl font-medium title-font mb-2 text-indigo-800 group-hover:text-indigo-300 border-b-blue-300">Lifestyle
                                        <svg class="flex mx-5 my-auto flex h-10 w-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                        </svg>
                                        </button>
                                    </a>
                                </div>
                                
                                <div class="h-1 w-20 bg-indigo-500 rounded"></div>
                            </div>
                            {{-- <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Kategori ini memuat tips seputar lifestyle</p> --}}
                        </div>
                        <div class="flex flex-wrap -m-4">
                            <div class="md:w-1/2 p-4 group">
                                <a href="#">
                                    <div class="duration-700 bg-white p-4 rounded-lg group-hover:shadow-2xl shadow-md">
                                        <img class="h-40 rounded w-full object-cover object-center mb-6"
                                            src="https://www.pens.ac.id/wp-content/uploads/2021/02/WEB-KBRI.jpg" alt="content">
                                        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font text-uppercase">Kategori
                                        </h3>
                                        <a href="#" class="hover:underline"><h2 class="text-lg text-gray-900 font-medium title-font mb-4">Ini adalah judul</h2></a>
                                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit
                                            waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="md:w-1/2 p-4 group">
                                <a href="#">
                                    <div class="duration-700 bg-white p-4 rounded-lg group-hover:shadow-2xl shadow-md">
                                        <img class="h-40 rounded w-full object-cover object-center mb-6"
                                            src="https://www.pens.ac.id/wp-content/uploads/2021/02/WEB-KBRI.jpg" alt="content">
                                        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font text-uppercase">Kategori
                                        </h3>
                                        <a href="#" class="hover:underline"><h2 class="text-lg text-gray-900 font-medium title-font mb-4">Ini adalah judul</h2></a>
                                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit
                                            waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="md:w-1/2 p-4 group">
                                <a href="#">
                                    <div class="duration-700 bg-white p-4 rounded-lg group-hover:shadow-2xl shadow-md">
                                        <img class="h-40 rounded w-full object-cover object-center mb-6"
                                            src="https://www.pens.ac.id/wp-content/uploads/2021/02/WEB-KBRI.jpg" alt="content">
                                        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font text-uppercase">Kategori
                                        </h3>
                                        <a href="#" class="hover:underline"><h2 class="text-lg text-gray-900 font-medium title-font mb-4">Ini adalah judul</h2></a>
                                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit
                                            waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="md:w-1/2 p-4 group">
                                <a href="#">
                                    <div class="duration-700 bg-white p-4 rounded-lg group-hover:shadow-2xl shadow-md">
                                        <img class="h-40 rounded w-full object-cover object-center mb-6"
                                            src="https://www.pens.ac.id/wp-content/uploads/2021/02/WEB-KBRI.jpg" alt="content">
                                        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font text-uppercase">Kategori
                                        </h3>
                                        <a href="#" class="hover:underline"><h2 class="text-lg text-gray-900 font-medium title-font mb-4">Ini adalah judul</h2></a>
                                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit
                                            waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>


                    {{-- kategori hiburan --}}
                    <div class="container px-5 mx-auto py-7">
                        <div class="flex flex-wrap w-full mb-3">
                            <div class="lg:w-1/2 w-full mb-4 lg:mb-0">
                                <div>
                                    <a href="#" class="flex group">
                                        <button class="duration-700 flex sm:text-4xl text-3xl font-medium title-font mb-2 text-indigo-800 group-hover:text-indigo-300 border-b-blue-300">Hiburan
                                        <svg class="flex mx-5 my-auto flex h-10 w-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                        </svg>
                                        </button>
                                    </a>
                                </div>
                                
                                <div class="h-1 w-20 bg-indigo-500 rounded"></div>
                            </div>
                            {{-- <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Kategori ini memuat tips seputar lifestyle</p> --}}
                        </div>
                        <div class="flex flex-wrap -m-4">
                            <div class="md:w-1/2 p-4 group">
                                <a href="#">
                                    <div class="duration-700 bg-white p-4 rounded-lg group-hover:shadow-2xl shadow-md">
                                        <img class="h-40 rounded w-full object-cover object-center mb-6"
                                            src="https://dummyimage.com/720x400" alt="content">
                                        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font text-uppercase">Kategori
                                        </h3>
                                        <a href="#" class="hover:underline"><h2 class="text-lg text-gray-900 font-medium title-font mb-4">Ini adalah judul</h2></a>
                                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit
                                            waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="md:w-1/2 p-4 group">
                                <a href="#">
                                    <div class="duration-700 bg-white p-4 rounded-lg group-hover:shadow-2xl shadow-md">
                                        <img class="h-40 rounded w-full object-cover object-center mb-6"
                                            src="https://dummyimage.com/720x400" alt="content">
                                        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font text-uppercase">Kategori
                                        </h3>
                                        <a href="#" class="hover:underline"><h2 class="text-lg text-gray-900 font-medium title-font mb-4">Ini adalah judul</h2></a>
                                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit
                                            waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="md:w-1/2 p-4 group">
                                <a href="#">
                                    <div class="duration-700 bg-white p-4 rounded-lg group-hover:shadow-2xl shadow-md">
                                        <img class="h-40 rounded w-full object-cover object-center mb-6"
                                            src="https://dummyimage.com/720x400" alt="content">
                                        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font text-uppercase">Kategori
                                        </h3>
                                        <a href="#" class="hover:underline"><h2 class="text-lg text-gray-900 font-medium title-font mb-4">Ini adalah judul</h2></a>
                                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit
                                            waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="md:w-1/2 p-4 group">
                                <a href="#">
                                    <div class="duration-700 bg-white p-4 rounded-lg group-hover:shadow-2xl shadow-md">
                                        <img class="h-40 rounded w-full object-cover object-center mb-6"
                                            src="https://dummyimage.com/720x400" alt="content">
                                        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font text-uppercase">Kategori
                                        </h3>
                                        <a href="#" class="hover:underline"><h2 class="text-lg text-gray-900 font-medium title-font mb-4">Ini adalah judul</h2></a>
                                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit
                                            waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- kategori Teknologi --}}
                    <div class="container px-5 mx-auto py-7">
                        <div class="flex flex-wrap w-full mb-3">
                            <div class="lg:w-1/2 w-full mb-4 lg:mb-0">
                                <div>
                                    <a href="#" class="flex group">
                                        <button class="duration-700 flex sm:text-4xl text-3xl font-medium title-font mb-2 text-indigo-800 group-hover:text-indigo-300 border-b-blue-300">Teknologi
                                        <svg class="flex mx-5 my-auto flex h-10 w-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                        </svg>
                                        </button>
                                    </a>
                                </div>
                                
                                <div class="h-1 w-20 bg-indigo-500 rounded"></div>
                            </div>
                            {{-- <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Kategori ini memuat tips seputar lifestyle</p> --}}
                        </div>
                        <div class="flex flex-wrap -m-4">
                            <div class="md:w-1/2 p-4 group">
                                <a href="#">
                                    <div class="duration-700 bg-white p-4 rounded-lg group-hover:shadow-2xl shadow-md">
                                        <img class="h-40 rounded w-full object-cover object-center mb-6"
                                            src="https://dummyimage.com/720x400" alt="content">
                                        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font text-uppercase">Kategori
                                        </h3>
                                        <a href="#" class="hover:underline"><h2 class="text-lg text-gray-900 font-medium title-font mb-4">Ini adalah judul</h2></a>
                                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit
                                            waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="md:w-1/2 p-4 group">
                                <a href="#">
                                    <div class="duration-700 bg-white p-4 rounded-lg group-hover:shadow-2xl shadow-md">
                                        <img class="h-40 rounded w-full object-cover object-center mb-6"
                                            src="https://dummyimage.com/720x400" alt="content">
                                        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font text-uppercase">Kategori
                                        </h3>
                                        <a href="#" class="hover:underline"><h2 class="text-lg text-gray-900 font-medium title-font mb-4">Ini adalah judul</h2></a>
                                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit
                                            waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="md:w-1/2 p-4 group">
                                <a href="#">
                                    <div class="duration-700 bg-white p-4 rounded-lg group-hover:shadow-2xl shadow-md">
                                        <img class="h-40 rounded w-full object-cover object-center mb-6"
                                            src="https://dummyimage.com/720x400" alt="content">
                                        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font text-uppercase">Kategori
                                        </h3>
                                        <a href="#" class="hover:underline"><h2 class="text-lg text-gray-900 font-medium title-font mb-4">Ini adalah judul</h2></a>
                                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit
                                            waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="md:w-1/2 p-4 group">
                                <a href="#">
                                    <div class="duration-700 bg-white p-4 rounded-lg group-hover:shadow-2xl shadow-md">
                                        <img class="h-40 rounded w-full object-cover object-center mb-6"
                                            src="https://dummyimage.com/720x400" alt="content">
                                        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font text-uppercase">Kategori
                                        </h3>
                                        <a href="#" class="hover:underline"><h2 class="text-lg text-gray-900 font-medium title-font mb-4">Ini adalah judul</h2></a>
                                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit
                                            waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- kategori Explore --}}

                    <div class="container px-5 mx-auto py-7">
                        <div class="flex flex-wrap w-full mb-3">
                            <div class="lg:w-1/2 w-full mb-4 lg:mb-0">
                                <div>
                                    <a href="#" class="flex group">
                                        <button class="duration-700 flex sm:text-4xl text-3xl font-medium title-font mb-2 text-indigo-800 group-hover:text-indigo-300 border-b-blue-300">Explore
                                        <svg class="flex mx-5 my-auto flex h-10 w-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                        </svg>
                                        </button>
                                    </a>
                                </div>
                                
                                <div class="h-1 w-20 bg-indigo-500 rounded"></div>
                            </div>
                            {{-- <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Kategori ini memuat tips seputar lifestyle</p> --}}
                        </div>
                        <div class="flex flex-wrap -m-4">
                            <div class="md:w-1/2 p-4 group">
                                <a href="#">
                                    <div class="duration-700 bg-white p-4 rounded-lg group-hover:shadow-2xl shadow-md">
                                        <img class="h-40 rounded w-full object-cover object-center mb-6"
                                            src="https://dummyimage.com/720x400" alt="content">
                                        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font text-uppercase">Kategori
                                        </h3>
                                        <a href="#" class="hover:underline"><h2 class="text-lg text-gray-900 font-medium title-font mb-4">Ini adalah judul</h2></a>
                                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit
                                            waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="md:w-1/2 p-4 group">
                                <a href="#">
                                    <div class="duration-700 bg-white p-4 rounded-lg group-hover:shadow-2xl shadow-md">
                                        <img class="h-40 rounded w-full object-cover object-center mb-6"
                                            src="https://dummyimage.com/720x400" alt="content">
                                        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font text-uppercase">Kategori
                                        </h3>
                                        <a href="#" class="hover:underline"><h2 class="text-lg text-gray-900 font-medium title-font mb-4">Ini adalah judul</h2></a>
                                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit
                                            waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="md:w-1/2 p-4 group">
                                <a href="#">
                                    <div class="duration-700 bg-white p-4 rounded-lg group-hover:shadow-2xl shadow-md">
                                        <img class="h-40 rounded w-full object-cover object-center mb-6"
                                            src="https://dummyimage.com/720x400" alt="content">
                                        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font text-uppercase">Kategori
                                        </h3>
                                        <a href="#" class="hover:underline"><h2 class="text-lg text-gray-900 font-medium title-font mb-4">Ini adalah judul</h2></a>
                                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit
                                            waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="md:w-1/2 p-4 group">
                                <a href="#">
                                    <div class="duration-700 bg-white p-4 rounded-lg group-hover:shadow-2xl shadow-md">
                                        <img class="h-40 rounded w-full object-cover object-center mb-6"
                                            src="https://dummyimage.com/720x400" alt="content">
                                        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font text-uppercase">Kategori
                                        </h3>
                                        <a href="#" class="hover:underline"><h2 class="text-lg text-gray-900 font-medium title-font mb-4">Ini adalah judul</h2></a>
                                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit
                                            waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                </section>
            </div>
            <div class="w-full xl:w-1/3 py-7 px-5">
                <input type="text" id="" name="" placeholder="Search . ."
                    class="px-4 py-2 shadow-lg w-full bg-white rounded-lg border-none focus:bg-transparent focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                <div class="my-5">
                    <div
                        class="gradient rounded-lg py-2 px-4 shadow-lg text-gray-100 font-bold text-2xl text-center">
                        Recents Posts
                    </div>
                    <section class="bg-white rounded-lg text-gray-600 body-font">
                        <div class=" mx-auto flex flex-wrap">

                          <div class="flex relative py-2 items-center border-b w-full mx-auto">
                            <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
                              <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                            </div>
                            <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-indigo-500 text-white relative z-10 title-font font-medium text-sm">1</div>
                            <div class="flex-grow flex items-center flex-row">
                              <div class="flex-shrink-0 w-24 h-24 my-auto bg-indigo-100 text-indigo-500 rounded-full inline-flex items-center justify-center" style="background-image: url('https://www.pens.ac.id/wp-content/uploads/2021/03/PEDDES-WEB.png');">
                                
                              </div>
                              <div class="mx-4 mt-6 sm:mt-0">
                                <h2 class="font-medium title-font my-auto text-gray-900 mb-1 text-md md:text-xl">Perluas Akses Pendidikan Tinggi Vokasi di Luar Negeri, PENS Jalin Kerja Sama dengan KBRI Jepang</h2>
                            </div>
                            </div>
                          </div>
                          
                          <div class="flex relative py-2 border-b items-center w-full mx-auto">
                            <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
                              <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                            </div>
                            <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-indigo-500 text-white relative z-10 title-font font-medium text-sm">1</div>
                            <div class="flex-grow flex items-center flex-row">
                              <div class="flex-shrink-0 w-24 h-24 my-auto bg-indigo-100 text-indigo-500 rounded-full inline-flex items-center justify-center" style="background-image: url('https://www.pens.ac.id/wp-content/uploads/2021/03/PEDDES-WEB.png');">
                                
                              </div>
                              <div class="mx-4 mt-6 sm:mt-0">
                                <h2 class="font-medium title-font my-auto text-gray-900 mb-1 text-md md:text-xl">Perluas Akses Pendidikan Tinggi Vokasi di Luar Negeri, PENS Jalin Kerja Sama dengan KBRI Jepang</h2>
                            </div>
                            </div>
                          </div>

                          <div class="flex relative py-2 border-b items-center w-full mx-auto">
                            <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
                              <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                            </div>
                            <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-indigo-500 text-white relative z-10 title-font font-medium text-sm">1</div>
                            <div class="flex-grow flex items-center flex-row">
                              <div class="flex-shrink-0 w-24 h-24 my-auto bg-indigo-100 text-indigo-500 rounded-full inline-flex items-center justify-center" style="background-image: url('https://www.pens.ac.id/wp-content/uploads/2021/03/PEDDES-WEB.png');">
                                
                              </div>
                              <div class="mx-4 mt-6 sm:mt-0">
                                <h2 class="font-medium title-font my-auto text-gray-900 mb-1 text-md md:text-xl">Perluas Akses Pendidikan Tinggi Vokasi di Luar Negeri, PENS Jalin Kerja Sama dengan KBRI Jepang</h2>
                            </div>
                            </div>
                          </div>

                          <div class="flex relative py-2 border-b items-center w-full mx-auto">
                            <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
                              <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                            </div>
                            <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-indigo-500 text-white relative z-10 title-font font-medium text-sm">1</div>
                            <div class="flex-grow flex items-center flex-row">
                              <div class="flex-shrink-0 w-24 h-24 my-auto bg-indigo-100 text-indigo-500 rounded-full inline-flex items-center justify-center" style="background-image: url('https://www.pens.ac.id/wp-content/uploads/2021/03/PEDDES-WEB.png');">
                                
                              </div>
                              <div class="mx-4 mt-6 sm:mt-0">
                                <h2 class="font-medium title-font my-auto text-gray-900 mb-1 text-md md:text-xl">Perluas Akses Pendidikan Tinggi Vokasi di Luar Negeri, PENS Jalin Kerja Sama dengan KBRI Jepang</h2>
                            </div>
                            </div>
                          </div>
                        </div>
                      </section>
                </div>
            </div>
        </div>
        <!-- Recents post -->

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
                            <p class="leading-relaxed">Glossier echo park pug, church-key sartorial biodiesel vexillologist pop-up snackwave ramps cornhole. Marfa 3 wolf moon party messenger bag selfies, poke vaporware kombucha lumbersexual pork belly polaroid hoodie portland craft
                                beer.</p>
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
                                <h5 class="border-solid border-2 border-light-blue-700 py-1 font-medium tracking-wide text-center shadow-lg text-gray-800 uppercase">Exsplore</h5>
                            </div>
                        </div>
                        <div class="md:flex-grow-0 py-2 px-2">
                            <h2 class="text-xl font-bold text-gray-900 title-font mb-2">Bitters hashtag waistcoat fashion axe chia unicorn</h2>
                            <p class="leading-relaxed">Glossier echo park pug, church-key sartorial biodiesel vexillologist pop-up snackwave ramps cornhole. Marfa 3 wolf moon party messenger bag selfies, poke vaporware kombucha lumbersexual pork belly polaroid hoodie portland craft
                                beer.</p>
                            <a class="text-blue-500 inline-flex items-center mt-4">Explore Selengkapnya
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
                            <p class="leading-relaxed">Glossier echo park pug, church-key sartorial biodiesel vexillologist pop-up snackwave ramps cornhole. Marfa 3 wolf moon party messenger bag selfies, poke vaporware kombucha lumbersexual pork belly polaroid hoodie portland craft
                                beer.</p>
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
                            <p class="leading-relaxed">Glossier echo park pug, church-key sartorial biodiesel vexillologist pop-up snackwave ramps cornhole. Marfa 3 wolf moon party messenger bag selfies, poke vaporware kombucha lumbersexual pork belly polaroid hoodie portland craft
                                beer.</p>
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
                            <p class="leading-relaxed">Glossier echo park pug, church-key sartorial biodiesel vexillologist pop-up snackwave ramps cornhole. Marfa 3 wolf moon party messenger bag selfies, poke vaporware kombucha lumbersexual pork belly polaroid hoodie portland craft
                                beer.</p>
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
                        <a class="text-blue-600 no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
                            href="#">
                            <!--Icon from: http://www.potlabicons.com/ -->
                            <rect fill="#3333E0" x="16.539" y="425.626" width="479.767" height="50.502"
                                transform="matrix(1,0,0,1,0,0)" />
                            <path class="plane-take-off"
                                d=" M 510.7 189.151 C 505.271 168.95 484.565 156.956 464.365 162.385 L 330.156 198.367 L 155.924 35.878 L 107.19 49.008 L 211.729 230.183 L 86.232 263.767 L 36.614 224.754 L 0 234.603 L 45.957 314.27 L 65.274 347.727 L 105.802 336.869 L 240.011 300.886 L 349.726 271.469 L 483.935 235.486 C 504.134 230.057 516.129 209.352 510.7 189.151 Z " />
                            </svg> MEDIA ENT
                        </a>
                    </div>
                    <div class="flex-1">
                        <p class="uppercase text-gray-500 md:mb-6">Links</p>
                        <ul class="list-reset mb-6">
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500">FAQ</a>
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500">Help</a>
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500">Support</a>
                            </li>
                        </ul>
                    </div>
                    <div class="flex-1">
                        <p class="uppercase text-gray-500 md:mb-6">Legal</p>
                        <ul class="list-reset mb-6">
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500">Terms</a>
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500">Privacy</a>
                            </li>
                        </ul>
                    </div>
                    <div class="flex-1">
                        <p class="uppercase text-gray-500 md:mb-6">Social</p>
                        <ul class="list-reset mb-6">
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500">Facebook</a>
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500">Linkedin</a>
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500">Twitter</a>
                            </li>
                        </ul>
                    </div>
                    <div class="flex-1">
                        <p class="uppercase text-gray-500 md:mb-6">Company</p>
                        <ul class="list-reset mb-6">
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500">Official
                                    Blog</a>
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">About
                                    Us</a>
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Vue JS -->

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

        {{-- carousel --}}
        <script>
            var mySwiper = new Swiper ('.swiper-container', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        })
        </script>
    </body>
</x-app-layout>

</html>