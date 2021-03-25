@extends('layouts.master') @section('konten')

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

<body class="leading-normal tracking-normal text-white bg-gray-300">

    <!-- Featured Post 1 -->
    <section class="text-gray-500 body-font">
        <div class="px-5 pb-4 pt-0 -mt-40 mx-auto">
            <div class="flex flex-wrap">
                @forelse ($articles_recent->take(3) as $article)
                <div class="group p-4 md:w-1/3 ">
                    <div
                        class="bg-white group-hover:shadow-2xl duration-700 group-hover:border-gray-900 h-full shadow-md border-opacity-60 rounded-lg overflow-hidden">
                        <img class="lg:h-48 md:h-36 w-full object-cover object-center" {{ $article }}
                            src="{{ Storage::url($article->thumbnail->url) }}" alt="{{ $article->slug }}">
                        <div class="p-6 pt-2">
                            <h2 class="uppercase tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                                {{ $article->category->name }}
                            </h2>
                            <a href="{{ route('article.show', $article) }}" class="hover:underline">
                                <h1 class="title-font text-lg font-medium text-xl text-gray-900 mb-3">
                                    {{ $article->title }}</h1>
                            </a>
                            <p class="leading-relaxed mb-3 group-hover:text-gray-600 text-md">Photo booth
                                fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled
                                waistcoat.
                            </p>
                            <div class="flex items-center flex-wrap ">
                                <a href="">
                                    <button id="btn-selengkapnya"
                                        class="gradient hover:bg-gray-700 hover:text-indigo-300 inline-flex mx-auto lg:mx-0 hover:no-underline text-gray-300 font-bold rounded-full lg:mt-0 text-center py-1 px-3 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                        Selengkapnya
                                        <svg class="w-5 h-5 ml-2 items-center my-auto" viewbox="0 0 24 24"
                                            stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
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
                @empty
                @endforelse
            </div>
        </div>
    </section>

    <!-- 3/4 -->
    <div class="flex flex-wrap mx-auto px-3 md:flex-col lg:flex-col xl:flex-row">
        <div class="w-full xl:w-3/4 mb-5 flex">
            <section class="text-gray-600 body-font">

                <div class="mx-auto py-7">
                    <div class="flex flex-wrap -m-4"></div>
                    <div class="w-full p-4 md:p-2 group flex flex-wrap sm:flex-col md:flex-col lg:flex-row">

                        {{-- kategori lifestyle --}}

                        <div class="xl:w-1/2 sm:w-full lg:w-1/2 w-full px-2 pb-5">
                            <div class="w-full h-2 rounded-t-md bg-blue-500"></div>
                            {{-- link kategori --}}
                            <a href="{{ route('category.show', 1) }}">
                                <div
                                    class="bg-white flex text-2xl font-bold text-blue-500 uppercase px-4 py-1 border-b border-gray-300">
                                    Lifestyle</div>
                            </a>

                            <div class="md:flex-row flex-wrap lg:flex-col flex">
                                <div class="w-full xl:w-full ">
                                    <a href="#">
                                        <div
                                            class="md:flex-row duration-700 bg-white p-4 group-hover:shadow-2xl shadow-md">
                                            <img class="h-49 rounded w-full object-cover object-center mb-6"
                                                src="https://www.pens.ac.id/wp-content/uploads/2021/02/WEB-KBRI.jpg"
                                                alt="content">
                                            <h3
                                                class="tracking-widest text-indigo-500 text-xs font-semibold title-font uppercase">
                                                Lifestyle
                                            </h3>
                                            <a href="#" class="hover:underline">
                                                <h2
                                                    class="duration-700 text-2xl text-gray-800 font-bold title-font mb-2">
                                                    {{ $articles_lifestyle[0]->title }}
                                                </h2>
                                            </a>
                                            <p class="leading-relaxed text-lg">Fingerstache flexitarian street art 8-bit
                                                waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                                        </div>
                                    </a>
                                </div>

                                {{-- second card kategori max 3 posts --}}

                                <div class="w-full mx-auto bg-white rounded-b-lg text-gray-600 body-font">

                                    <div class="flex relative py-2 items-center border-t w-full mx-auto">
                                        <a href="">
                                            <div class="flex-grow flex items-center flex-row md:px-4 px-4">
                                                <div class="flex-shrink-0 w-24 h-24 my-auto bg-indigo-100 my-auto text-indigo-500 rounded-md inline-flex items-center justify-center"
                                                    style="background-image: url('https://www.pens.ac.id/wp-content/uploads/2021/03/PEDDES-WEB.png');">
                                                </div>
                                                <div class="mx-4 mt-6 sm:mt-0">
                                                    <h2
                                                        class="font-bold title-font my-auto text-gray-900 mb-1 text-lg md:text-lg">
                                                        Perluas Akses Pendidikan Tinggi Vokasi di Luaru uuu Negeri, PENS
                                                        Jalin</h2>
                                        </a>
                                        <p class="font-medium text-md">by
                                            <a href="">Thania</a>
                                            |
                                            <a href="">March 23, 2021</a>
                                            |
                                            <a href="">Kategori</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex relative py-2 items-center border-t w-full mx-auto">
                                <a href="">
                                    <div class="flex-grow flex items-center flex-row md:px-4 px-4">
                                        <div class="flex-shrink-0 w-24 h-24 my-auto bg-indigo-100 my-auto text-indigo-500 rounded-md inline-flex items-center justify-center"
                                            style="background-image: url('https://www.pens.ac.id/wp-content/uploads/2021/03/PEDDES-WEB.png');">
                                        </div>
                                        <div class="mx-4 mt-6 sm:mt-0">
                                            <h2
                                                class="font-bold title-font my-auto text-gray-900 mb-1 text-lg md:text-lg">
                                                Perluas Akses Pendidikan Tinggi Vokasi di Luaru uuu Negeri, PENS Jalin
                                            </h2>
                                </a>
                                <p class="font-medium text-md">by
                                    <a href="">Thania</a>
                                    |
                                    <a href="">March 23, 2021</a>
                                    |
                                    <a href="">Kategori</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="flex relative py-2 items-center border-t w-full mx-auto">
                        <a href="">
                            <div class="flex-grow flex items-center flex-row md:px-4 px-4">
                                <div class="flex-shrink-0 w-24 h-24 my-auto bg-indigo-100 my-auto text-indigo-500 rounded-md inline-flex items-center justify-center"
                                    style="background-image: url('https://www.pens.ac.id/wp-content/uploads/2021/03/PEDDES-WEB.png');">
                                </div>
                                <div class="mx-4 mt-6 sm:mt-0">
                                    <h2 class="font-bold title-font my-auto text-gray-900 mb-1 text-lg md:text-lg">
                                        Perluas Akses Pendidikan Tinggi Vokasi di Luaru uuu Negeri, PENS Jalin</h2>
                        </a>
                        <p class="font-medium text-md">by
                            <a href="">Thania</a>
                            |
                            <a href="">March 23, 2021</a>
                            |
                            <a href="">Kategori</a>
                        </p>
                    </div>
                </div>
        </div>

    </div>
    </div>
    </div>

    {{-- kategori hiburan --}}

    <div class="xl:w-1/2 sm:w-full lg:w-1/2 w-full px-2 pb-5">
        <div class="w-full h-2 rounded-t-md bg-pink-500"></div>
        {{-- link kategori --}}
        <a href="{{ route('category.show', 2) }}">
            <div class="bg-white flex text-2xl font-bold text-pink-500 uppercase px-4 py-1 border-b border-gray-300">
                Hiburan</div>
        </a>

        <div class="md:flex-row flex-wrap lg:flex-col flex">
            <div class="w-full xl:w-full ">
                <a href="#">
                    <div class="md:flex-row duration-700 bg-white p-4 group-hover:shadow-2xl shadow-md">
                        <img class="h-49 rounded w-full object-cover object-center mb-6"
                            src="https://www.pens.ac.id/wp-content/uploads/2021/02/WEB-KBRI.jpg" alt="content">
                        <h3 class="tracking-widest text-indigo-500 text-xs font-semibold title-font uppercase">Kategori
                        </h3>
                        <a href="#" class="hover:underline">
                            <h2 class="duration-700 text-2xl text-gray-800 font-bold title-font mb-2">Ini adalah judul
                                Ini adalah judulIni adalah judul 2 baris 2 baris</h2>
                        </a>
                        <p class="leading-relaxed text-lg">Fingerstache flexitarian street art 8-bit
                            waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                    </div>
                </a>
            </div>

            {{-- second card kategori max 3 posts --}}

            <div class="w-full mx-auto bg-white rounded-b-lg text-gray-600 body-font">

                <div class="flex relative py-2 items-center border-t w-full mx-auto">
                    <a href="">
                        <div class="flex-grow flex items-center flex-row md:px-4 px-4">
                            <div class="flex-shrink-0 w-24 h-24 my-auto bg-indigo-100 my-auto text-indigo-500 rounded-md inline-flex items-center justify-center"
                                style="background-image: url('https://www.pens.ac.id/wp-content/uploads/2021/03/PEDDES-WEB.png');">
                            </div>
                            <div class="mx-4 mt-6 sm:mt-0">
                                <h2 class="font-bold title-font my-auto text-gray-900 mb-1 text-lg md:text-lg">Perluas
                                    Akses Pendidikan Tinggi Vokasi di Luaru uuu Negeri, PENS Jalin</h2>
                    </a>
                    <p class="font-medium text-md">by
                        <a href="">Thania</a>
                        |
                        <a href="">March 23, 2021</a>
                        |
                        <a href="">Kategori</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="flex relative py-2 items-center border-t w-full mx-auto">
            <a href="">
                <div class="flex-grow flex items-center flex-row md:px-4 px-4">
                    <div class="flex-shrink-0 w-24 h-24 my-auto bg-indigo-100 my-auto text-indigo-500 rounded-md inline-flex items-center justify-center"
                        style="background-image: url('https://www.pens.ac.id/wp-content/uploads/2021/03/PEDDES-WEB.png');">
                    </div>
                    <div class="mx-4 mt-6 sm:mt-0">
                        <h2 class="font-bold title-font my-auto text-gray-900 mb-1 text-lg md:text-lg">Perluas Akses
                            Pendidikan Tinggi Vokasi di Luaru uuu Negeri, PENS Jalin</h2>
            </a>
            <p class="font-medium text-md">by
                <a href="">Thania</a>
                |
                <a href="">March 23, 2021</a>
                |
                <a href="">Kategori</a>
            </p>
        </div>
    </div>
    </div>

    <div class="flex relative py-2 items-center border-t w-full mx-auto">
        <a href="">
            <div class="flex-grow flex items-center flex-row md:px-4 px-4">
                <div class="flex-shrink-0 w-24 h-24 my-auto bg-indigo-100 my-auto text-indigo-500 rounded-md inline-flex items-center justify-center"
                    style="background-image: url('https://www.pens.ac.id/wp-content/uploads/2021/03/PEDDES-WEB.png');">
                </div>
                <div class="mx-4 mt-6 sm:mt-0">
                    <h2 class="font-bold title-font my-auto text-gray-900 mb-1 text-lg md:text-lg">Perluas Akses
                        Pendidikan Tinggi Vokasi di Luaru uuu Negeri, PENS Jalin</h2>
        </a>
        <p class="font-medium text-md">by
            <a href="">Thania</a>
            |
            <a href="">March 23, 2021</a>
            |
            <a href="">Kategori</a>
        </p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    {{-- kategori lifestyle --}}

    <div class="xl:w-1/2 sm:w-full lg:w-1/2 w-full px-2 pb-5">
        <div class="w-full h-2 rounded-t-md bg-yellow-500"></div>
        {{-- link kategori --}}
        <a href="{{ route('category.show', 4) }}">
            <div class="bg-white flex text-2xl font-bold text-yellow-500 uppercase px-4 py-1 border-b border-gray-300">
                Explore</div>
        </a>

        <div class="md:flex-row flex-wrap lg:flex-col flex">
            <div class="w-full xl:w-full ">
                <a href="#">
                    <div class="md:flex-row duration-700 bg-white p-4 group-hover:shadow-2xl shadow-md">
                        <img class="h-49 rounded w-full object-cover object-center mb-6"
                            src="https://www.pens.ac.id/wp-content/uploads/2021/02/WEB-KBRI.jpg" alt="content">
                        <h3 class="tracking-widest text-indigo-500 text-xs font-semibold title-font uppercase">Kategori
                        </h3>
                        <a href="#" class="hover:underline">
                            <h2 class="duration-700 text-2xl text-gray-800 font-bold title-font mb-2">Ini adalah judul
                                Ini adalah judulIni adalah judul 2 baris 2 baris</h2>
                        </a>
                        <p class="leading-relaxed text-lg">Fingerstache flexitarian street art 8-bit
                            waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                    </div>
                </a>
            </div>

            {{-- second card kategori max 3 posts --}}

            <div class="w-full mx-auto bg-white rounded-b-lg text-gray-600 body-font">

                <div class="flex relative py-2 items-center border-t w-full mx-auto">
                    <a href="">
                        <div class="flex-grow flex items-center flex-row md:px-4 px-4">
                            <div class="flex-shrink-0 w-24 h-24 my-auto bg-indigo-100 my-auto text-indigo-500 rounded-md inline-flex items-center justify-center"
                                style="background-image: url('https://www.pens.ac.id/wp-content/uploads/2021/03/PEDDES-WEB.png');">
                            </div>
                            <div class="mx-4 mt-6 sm:mt-0">
                                <h2 class="font-bold title-font my-auto text-gray-900 mb-1 text-lg md:text-lg">Perluas
                                    Akses Pendidikan Tinggi Vokasi di Luaru uuu Negeri, PENS Jalin</h2>
                    </a>
                    <p class="font-medium text-md">by
                        <a href="">Thania</a>
                        |
                        <a href="">March 23, 2021</a>
                        |
                        <a href="">Kategori</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="flex relative py-2 items-center border-t w-full mx-auto">
            <a href="">
                <div class="flex-grow flex items-center flex-row md:px-4 px-4">
                    <div class="flex-shrink-0 w-24 h-24 my-auto bg-indigo-100 my-auto text-indigo-500 rounded-md inline-flex items-center justify-center"
                        style="background-image: url('https://www.pens.ac.id/wp-content/uploads/2021/03/PEDDES-WEB.png');">
                    </div>
                    <div class="mx-4 mt-6 sm:mt-0">
                        <h2 class="font-bold title-font my-auto text-gray-900 mb-1 text-lg md:text-lg">Perluas Akses
                            Pendidikan Tinggi Vokasi di Luaru uuu Negeri, PENS Jalin</h2>
            </a>
            <p class="font-medium text-md">by
                <a href="">Thania</a>
                |
                <a href="">March 23, 2021</a>
                |
                <a href="">Kategori</a>
            </p>
        </div>
    </div>
    </div>

    <div class="flex relative py-2 items-center border-t w-full mx-auto">
        <a href="">
            <div class="flex-grow flex items-center flex-row md:px-4 px-4">
                <div class="flex-shrink-0 w-24 h-24 my-auto bg-indigo-100 my-auto text-indigo-500 rounded-md inline-flex items-center justify-center"
                    style="background-image: url('https://www.pens.ac.id/wp-content/uploads/2021/03/PEDDES-WEB.png');">
                </div>
                <div class="mx-4 mt-6 sm:mt-0">
                    <h2 class="font-bold title-font my-auto text-gray-900 mb-1 text-lg md:text-lg">Perluas Akses
                        Pendidikan Tinggi Vokasi di Luaru uuu Negeri, PENS Jalin</h2>
        </a>
        <p class="font-medium text-md">by
            <a href="">Thania</a>
            |
            <a href="">March 23, 2021</a>
            |
            <a href="">Kategori</a>
        </p>
    </div>
    </div>
    </div>

    </div>
    </div>
    </div>

    {{-- kategori tekno --}}

    <div class="xl:w-1/2 sm:w-full lg:w-1/2 w-full px-2 pb-5">
        <div class="w-full h-2 rounded-t-md bg-green-500"></div>
        {{-- link kategori --}}
        <a href="{{ route('category.show', 3) }}">
            <div class="bg-white flex text-2xl font-bold text-green-500 uppercase px-4 py-1 border-b border-gray-300">
                Teknologi</div>
        </a>

        <div class="md:flex-row flex-wrap lg:flex-col flex">
            <div class="w-full xl:w-full ">
                <a href="#">
                    <div class="md:flex-row duration-700 bg-white p-4 group-hover:shadow-2xl shadow-md">
                        <img class="h-49 rounded w-full object-cover object-center mb-6"
                            src="https://www.pens.ac.id/wp-content/uploads/2021/02/WEB-KBRI.jpg" alt="content">
                        <h3 class="tracking-widest text-indigo-500 text-xs font-semibold title-font uppercase">Kategori
                        </h3>
                        <a href="#" class="hover:underline">
                            <h2 class="duration-700 text-2xl text-gray-800 font-bold title-font mb-2">Ini adalah judul
                                Ini adalah judulIni adalah judul 2 baris 2 baris</h2>
                        </a>
                        <p class="leading-relaxed text-lg">Fingerstache flexitarian street art 8-bit
                            waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                    </div>
                </a>
            </div>

            {{-- second card kategori max 3 posts --}}

            <div class="w-full mx-auto bg-white rounded-b-lg text-gray-600 body-font">

                <div class="flex relative py-2 items-center border-t w-full mx-auto">
                    <a href="">
                        <div class="flex-grow flex items-center flex-row md:px-4 px-4">
                            <div class="flex-shrink-0 w-24 h-24 my-auto bg-indigo-100 my-auto text-indigo-500 rounded-md inline-flex items-center justify-center"
                                style="background-image: url('https://www.pens.ac.id/wp-content/uploads/2021/03/PEDDES-WEB.png');">
                            </div>
                            <div class="mx-4 mt-6 sm:mt-0">
                                <h2 class="font-bold title-font my-auto text-gray-900 mb-1 text-lg md:text-lg">Perluas
                                    Akses Pendidikan Tinggi Vokasi di Luaru uuu Negeri, PENS Jalin</h2>
                    </a>
                    <p class="font-medium text-md">by
                        <a href="">Thania</a>
                        |
                        <a href="">March 23, 2021</a>
                        |
                        <a href="">Kategori</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="flex relative py-2 items-center border-t w-full mx-auto">
            <a href="">
                <div class="flex-grow flex items-center flex-row md:px-4 px-4">
                    <div class="flex-shrink-0 w-24 h-24 my-auto bg-indigo-100 my-auto text-indigo-500 rounded-md inline-flex items-center justify-center"
                        style="background-image: url('https://www.pens.ac.id/wp-content/uploads/2021/03/PEDDES-WEB.png');">
                    </div>
                    <div class="mx-4 mt-6 sm:mt-0">
                        <h2 class="font-bold title-font my-auto text-gray-900 mb-1 text-lg md:text-lg">Perluas Akses
                            Pendidikan Tinggi Vokasi di Luaru uuu Negeri, PENS Jalin</h2>
            </a>
            <p class="font-medium text-md">by
                <a href="">Thania</a>
                |
                <a href="">March 23, 2021</a>
                |
                <a href="">Kategori</a>
            </p>
        </div>
    </div>
    </div>

    <div class="flex relative py-2 items-center border-t w-full mx-auto">
        <a href="">
            <div class="flex-grow flex items-center flex-row md:px-4 px-4">
                <div class="flex-shrink-0 w-24 h-24 my-auto bg-indigo-100 my-auto text-indigo-500 rounded-md inline-flex items-center justify-center"
                    style="background-image: url('https://www.pens.ac.id/wp-content/uploads/2021/03/PEDDES-WEB.png');">
                </div>
                <div class="mx-4 mt-6 sm:mt-0">
                    <h2 class="font-bold title-font my-auto text-gray-900 mb-1 text-lg md:text-lg">Perluas Akses
                        Pendidikan Tinggi Vokasi di Luaru uuu Negeri, PENS Jalin</h2>
        </a>
        <p class="font-medium text-md">by
            <a href="">Thania</a>
            |
            <a href="">March 23, 2021</a>
            |
            <a href="">Kategori</a>
        </p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    {{-- end --}}
    </div>
    </div>


    </section>
    </div>

    {{-- 1/4 sidebar  --}}
    <div class="w-full xl:w-1/4 py-7 px-5">
        <input type="text" id="" name="" placeholder="Search . ."
            class="px-4 py-2 shadow-lg w-full bg-white rounded-lg border-none focus:bg-transparent focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        <div class="my-5">
            <div class="gradient rounded-lg py-2 px-4 shadow-lg text-gray-100 font-bold text-2xl text-center">
                Recents Posts
            </div>
            <section class="bg-white rounded-lg text-gray-600 body-font">
                <div class=" mx-auto flex flex-wrap">
                    @foreach ($articles_recent as $article)
                    <div class="flex relative py-2 items-center border-b w-full mx-auto">
                        <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
                            <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                        </div>
                        <div
                            class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-indigo-500 text-white relative z-10 title-font font-medium text-sm">
                            1</div>
                        <div class="flex-grow flex items-center flex-row">
                            <div class="flex-shrink-0 w-24 h-24 my-auto bg-indigo-100 text-indigo-500 rounded-full inline-flex items-center justify-center"
                                style="background-image: url('https://www.pens.ac.id/wp-content/uploads/2021/03/PEDDES-WEB.png');">
                            </div>
                            <div class="mx-4 mt-6 sm:mt-0">
                                <a href="{{ route('article.show', $article) }}">
                                    <h2
                                        class="duration-700 hover:font-bold font-medium title-font my-auto text-gray-900 mb-1 text-md md:text-xl">
                                        {{ $article->title }}
                                    </h2>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>
        </div>
    </div>
    </div>

    </div>
    </div>
    @endsection