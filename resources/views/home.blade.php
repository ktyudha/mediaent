@extends('layouts.master')
@section('konten')
    
    <div class="leading-normal tracking-normal text-white -m-6 gradient rounded-b-3xl"
        style="font-family: 'Source Sans Pro', sans-serif;">

        <!--Hero-->
        <div class="py-12"></div>
        <div class="mx-10 mt-10 ">
            <!-- fitur carousel -->
            <div class="w-full mx-auto my-5 bg-white">
                <div id="slider" class="swiper-container w-full">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide bg-cover bg-center"
                            style="background-image: url('https://www.pens.ac.id/wp-content/uploads/2021/03/PEDDES-WEB.png');">
                            <div class="mx-auto pt-32 pb-0">
                                <div class="w-full">
                                    <div class="py-20 px-6 md:px-10 md:py-20 mt-32 bg-gray-900 bg-opacity-60">
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
@endsection