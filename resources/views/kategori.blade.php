@extends('layouts.master')
@section('konten')

<x-app-layout>

    <!--Left Col-->
    <div class="ml-0 flex flex-col w-full md:w-1/2 justify-center items-start text-center md:text-left">

    </div>
    <!--Right Col-->
    <div class="text-white md:w-1/2 md:text-left text-center md:overflow-auto h-90">
        <div>
            <a href="#" class="block text-3xl font-semibold "></a>
            <p class="text-sm"></p>
            <div class="mx-auto">
                <div class="font-bold text-white text-1xl">
                    <button id="btn-selengkapnya" class="" type="button" style="transition: all .15s ease"
                        onclick="toggleModal('modal-id')">
                    </button>
                </div>
            </div>
        </div>
    </div>

    <body class="leading-normal tracking-normal text-white -m-6 gradient rounded-b-3xl"
        style="font-family: 'Source Sans Pro', sans-serif;">
        <div class="gradient -m-6 h-96 rounded-b-3xl">
            <div class="w-full m-0 p-0 bg-bottom"
                style="background-image:url('cover.jpg'); height: 60vh; max-height:460px;">
                <div class="mx-auto pt-16 md:pt-32 text-center break-normal">
                    <!--Title-->
                    <p class="text-white font-extrabold text-3xl md:text-5xl">
                        NEW ARTIKEL
                    </p>
                    <p class="text-xl md:text-2xl text-gray-200">Of {{ $articles[0]->category->name }}</p>
                </div>
            </div>
        </div>
        <!--Container-->
        <div class="px-4 md:px-0 max-w-6xl mx-auto -mt-32">
            <div class="mx-0 sm:mx-6">
                <div class="w-full text-xl md:text-2xl text-gray-800 leading-normal rounded-t">

                    <!--Lead Card-->
                    <div class="flex h-full bg-white rounded overflow-hidden shadow-lg">
                        <a href="post.html" class="flex flex-wrap no-underline hover:no-underline">
                            <div class="w-full md:w-2/3 rounded-t">
                                <img src="{{ Storage::url($articles[0]->thumbnail->url) }}"
                                    class="h-full w-full shadow object-cover">
                            </div>

                            <div class="w-full md:w-1/3 flex flex-col flex-grow flex-shrink">
                                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                                    <p class="uppercase w-full text-gray-600 text-xs md:text-sm pt-6 px-6">surabaya</p>
                                    <div class="tracking-widest w-full font-bold text-xl text-gray-900 px-6">
                                        {{ $articles[0]->title }}</div>
                                    <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. ipsum dolor sit amet,
                                        consectetur adipiscing elit. Aliquam at ip Aliquam at ipsum eu nunc commodo
                                        posuere et sit amet ligula.
                                    </p>
                                </div>

                                <div
                                    class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                                    <div class="flex items-center justify-between">
                                        <a href="{{ route('article.show', $articles[0]) }}">
                                            <button id="btn-selengkapnya"
                                                class="gradient hover:bg-gray-700 hover:text-indigo-300 inline-flex mx-auto lg:mx-0 hover:no-underline text-gray-300 font-bold rounded-full lg:mt-0 text-center py-1 px-3 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                                Readmore
                                                <svg class="w-5 h-5 ml-2 items-center my-auto" viewbox="0 0 24 24"
                                                    stroke="currentColor" stroke-width="2" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M5 12h14"></path>
                                                    <path d="M12 5l7 7-7 7"></path>
                                                </svg>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!--Posts Container-->
                    <div class="flex flex-wrap justify-between pt-12 -mx-6">

                        @foreach ($articles->slice(1) as $article)
                        <!--1/3 col -->
                        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                            <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                                <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                                    <img src="{{ Storage::url($article->thumbnail->url) }}"
                                        class="h-64 w-full object-cover rounded-t pb-6">
                                    <p class="tracking-widest uppercase w-full text-gray-600 text-xs md:text-sm px-6">
                                        surabaya</p>
                                    <div class="w-full font-bold text-xl text-gray-900 px-6">{{ $article->title }}</div>
                                    <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. ipsum dolor sit amet,
                                        consectetur adipiscing elit. Aliquam at ip Aliquam at ipsum eu nunc commodo
                                        posuere et sit amet ligula.
                                    </p>
                                </a>
                            </div>
                            <div
                                class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                                <div class="flex items-center justify-between">
                                    <a href="{{ route('article.show', $article) }}">
                                        <button id="btn-selengkapnya"
                                            class="gradient hover:bg-gray-700 hover:text-indigo-300 inline-flex mx-auto lg:mx-0 hover:no-underline text-gray-300 font-bold rounded-full lg:mt-0 text-center py-1 px-3 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                            Readmore
                                            <svg class="w-5 h-5 ml-2 items-center my-auto" viewbox="0 0 24 24"
                                                stroke="currentColor" stroke-width="2" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M5 12h14"></path>
                                                <path d="M12 5l7 7-7 7"></path>
                                            </svg>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <!-- yang paling lama sementara di comment -->

                        <!--1/2 col -->
                        {{-- <div class="w-full md:w-1/2 p-6 flex flex-col flex-grow flex-shrink">
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
                            </div> --}}

                        <!--1/2 col -->
                        {{-- <div class="w-full md:w-1/2 p-6 flex flex-col flex-grow flex-shrink">
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
                            </div> --}}
                    </div>
                    <!--/ Post Content-->

                </div>
                @if ($videos)
                <div class="my-3">
                    <h1 class="text-white font-extrabold text-3xl md:text-5xl">Video</h1>
                    <div class="flex flex-wrap justify-between -mx-6">

                        {{-- @foreach ($articles->slice(1) as $article) --}}
                        <!--1/3 col -->
                        @foreach ($videos as $video)
                        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                            <iframe width="560" height="315" src="{{ $video->url }}" title="{{ $video->title }}">
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                        @endforeach

                        {{-- @endforeach --}}
                    </div>
                </div>
                @endif
            </div>
        </div>
    </body>
    </div>
</x-app-layout>
@endsection