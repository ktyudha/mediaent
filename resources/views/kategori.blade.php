@extends('layouts.master')
@section('konten') 

<body class="leading-normal tracking-normal text-white -m-6 gradient rounded-b-3xl"
        style="font-family: 'Source Sans Pro', sans-serif;">
        <div class="gradient -m-6 h-96 rounded-b-3xl">
            <div class="w-full m-0 p-0 bg-bottom" style="background-image:url('cover.jpg'); height: 60vh; max-height:460px;">
                    <div class="mx-auto pt-16 md:pt-32 text-center break-normal">
                        <!--Title-->
                            <p class="text-white font-extrabold text-3xl md:text-5xl">
                                 NEW ARTIKEL
                            </p>
                            <p class="text-xl md:text-2xl text-gray-200">Of Nama Kategori</p>
                    </div>
                </div>
            </div>
                <!--Container-->
                <div class="px-4 md:px-0 max-w-6xl mx-auto -mt-32">
                    <div class="mx-0 sm:mx-6">
                        <div class="bg-gray-200 w-full text-xl md:text-2xl text-gray-800 leading-normal rounded-t">
        
                        <!--Lead Card-->
                        <div class="flex h-full bg-white rounded overflow-hidden shadow-lg">
                            <a href="post.html" class="flex flex-wrap no-underline hover:no-underline">
                                <div class="w-full md:w-2/3 rounded-t">
                                    <img src="https://source.unsplash.com/collection/494263/800x600" class="h-full w-full shadow">
                                </div>
        
                                <div class="w-full md:w-1/3 flex flex-col flex-grow flex-shrink">
                                    <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                                        <p class="uppercase w-full text-gray-600 text-xs md:text-sm pt-6 px-6">surabaya</p>
                                        <div class="tracking-widest w-full font-bold text-xl text-gray-900 px-6">Disini Judulnya Yang Pualing Baru Ya Ron</div>
                                        <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ip Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
                                        </p>
                                    </div>
        
                                    <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                                        <div class="flex items-center justify-between">
                                            <p class="text-gray-600 text-xs md:text-sm">READ MORE</p></p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!--/Lead Card-->
                        <div class="leading-normal tracking-normal text-white bg-gray-200">
                            {{-- scroll work --}}
                            <!-- Featured Post 1 -->
                            <section class="text-gray-500 body-font flex flex-wrap">
                                <div class="px-5 pb-4 pt-0 mx-auto">
                                    <div class="flex flex-wrap">
                                        
                                        <div class="group p-4 md:w-1/2 ">
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
                    
                                        <div class="group p-4 md:w-1/2 ">
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
                        </div>
                        <!--Posts Container-->
                        <div class="flex flex-wrap justify-between pt-12 -mx-6">
        
                            <!--1/3 col -->
                            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                                        <img src="https://source.unsplash.com/collection/3106804/800x600" class="h-64 w-full rounded-t pb-6">
                                        <p class="tracking-widest uppercase w-full text-gray-600 text-xs md:text-sm px-6">surabaya</p>
                                        <div class="w-full font-bold text-xl text-gray-900 px-6">Disini Judulnya Ya Ron</div>
                                        <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ip Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
                                        </p>
                                    </a>
                                    </div>
                                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                                    <div class="flex items-center justify-between">
                                        <p class="text-gray-600 text-xs md:text-sm">READ MORE</p>
                                    </div>
                                </div>
                            </div>
        
        
                            <!--1/3 col -->
                            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                                        <img src="https://source.unsplash.com/collection/3106804/800x600" class="h-64 w-full rounded-t pb-6">
                                        <p class="tracking-widest uppercase w-full text-gray-600 text-xs md:text-sm px-6">surabaya</p>
                                        <div class="w-full font-bold text-xl text-gray-900 px-6">Disini Judulnya Ya Ron</div>
                                        <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ip Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
                                        </p>
                                    </a>
                                    </div>
                                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                                    <div class="flex items-center justify-between">
                                        <p class="text-gray-600 text-xs md:text-sm">READ MORE</p>
                                    </div>
                                </div>
                            </div>
        
                            <!--1/3 col -->
                            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                                        <img src="https://source.unsplash.com/collection/3106804/800x600" class="h-64 w-full rounded-t pb-6">
                                        <p class="tracking-widest uppercase w-full text-gray-600 text-xs md:text-sm px-6">surabaya</p>
                                        <div class="w-full font-bold text-xl text-gray-900 px-6">Disini Judulnya Ya Ron</div>
                                        <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ip Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
                                        </p>
                                    </a>
                                    </div>
                                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                                    <div class="flex items-center justify-between">
                                        <p class="text-gray-600 text-xs md:text-sm">READ MORE</p>
                                    </div>
                                </div>
                            </div>
        
        
                            <!--1/2 col -->
                            <div class="w-full md:w-1/2 p-6 flex flex-col flex-grow flex-shrink">
                                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                                        <img src="https://source.unsplash.com/collection/3657445/800x600" class="h-full w-full rounded-t pb-6">
                                        <p class="uppercase w-full text-gray-600 text-xs md:text-sm px-6">surabaya</p>
                                        <div class="w-full font-bold text-xl text-gray-900 px-6">Disini 2 Judulnya dari yang paling lama Ya Ron</div>
                                        <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                            Lorem ipsum eu nunc commodo posuere et sit amet ligula.
                                        </p>
                                    </a>
                                </div>
                                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                                    <div class="flex items-center justify-between">
                                        <img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">
                                        <p class="text-gray-600 text-xs md:text-sm">READ MORE</p>
                                    </div>
                                </div>
                            </div>
        
                            <!--1/2 col -->
                            <div class="w-full md:w-1/2 p-6 flex flex-col flex-grow flex-shrink">
                                <div class="flex-1 flex-row bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                                        <img src="https://source.unsplash.com/collection/764827/800x600" class="h-full w-full rounded-t pb-6">
                                        <p class="uppercase w-full text-gray-600 text-xs md:text-sm px-6">surabaya</p>
                                        <div class="w-full font-bold text-xl text-gray-900 px-6">Disini 2 Judulnya dari yang paling lama Ya Ron</div>
                                        <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                            Lorem ipsum eu nunc commodo posuere et sit amet ligula.
                                        </p>
                                    </a>
                                </div>
                                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                                    <div class="flex items-center justify-between">
                                        <p class="text-gray-600 text-xs md:text-sm">READ MORE</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Post Content-->
                    </div>
                </div>
            </div>
        

</body>
</div>

@endsection