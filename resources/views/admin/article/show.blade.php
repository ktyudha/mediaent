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
                    <button id="btn-selengkapnya"
                        class=""
                        type="button" style="transition: all .15s ease" onclick="toggleModal('modal-id')">
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!--Title-->
    <div class="text-center pt-16 md:pt-32">
        <p class="uppercase text-sm md:text-base text-white font-bold">
            {{ \Carbon\Carbon::parse( $article->created_at )->format('l, j F Y h:i A')}}
            / Surabaya
        </p>
    </div>

    <!--image-->
    <div class="container w-full max-w-6xl mx-auto bg-white bg-cover mt-8 rounded"
        style="background-image:url('{{ Storage::url($article->thumbnail->url) }}'); height: 75vh;"></div>

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
</x-app-layout>
@endsection