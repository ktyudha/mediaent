<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
        MediaEnt
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

 @yield('konten')

        <!--Footer-->
        <footer>
            <div class="gradient h-6 w-full rounded-t"></div>
            <div class="mx-auto lg:px-48 px-6 bg-gray-800">
                <div class="w-full flex flex-col md:flex-row py-6">
                    <div class="flex-2 mb-6 text-black flex md:px-10 flex-row">
                        <a class="text-blue-600 no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
                            href="#">
                                <!-- <img src="{{ asset('ent.png') }}" /> -->
                                <img class="md:h-48 md:mx-auto" src="https://ent.pens.ac.id/img/logos/LogoENTs2.png" />
                        </a>
                        <div class="px-4 text-2xl md:text-4xl sm:text-4xl text-gray-300 my-auto font-bold"><a href="">Media ENT</a></div>
                    </div>
                    <div class="flex-1">
                        <p class="uppercase text-gray-300 font-bold text-2xl md:mb-6">KATEGORI</p>
                        <ul class="list-reset mb-6 ">
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="text-xl duration-700 no-underline text-gray-400 hover:text-pink-500">Lifestyle</a>
                            </li>
                            
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="text-xl duration-700 no-underline text-gray-400 hover:text-pink-500">Hiburan</a>
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="text-xl duration-700 no-underline text-gray-400 hover:text-pink-500">Teknologi</a>
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="text-xl duration-700 no-underline text-gray-400 hover:text-pink-500">Explore</a>
                            </li>
                        </ul>
                    </div>
                    <div class="flex-1">
                        <p class="uppercase  text-gray-300 text-2xl font-bold md:mb-6">Social</p>
                        <ul class="list-reset mb-6">
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="text-xl duration-700 no-underline text-gray-400 hover:text-pink-500">Facebook</a>
                            </li>
                            
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="text-xl duration-700 no-underline text-gray-400 hover:text-pink-500">Youtube</a>
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="text-xl duration-700 no-underline text-gray-400 hover:text-pink-500">Instagram</a>
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="text-xl duration-700 no-underline text-gray-400 hover:text-pink-500">Twitter</a>
                            </li>
                        </ul>
                    </div>
                    <div class="flex-1">
                        <iframe class="rounded-lg mb-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.6920240024924!2d112.79156701420449!3d-7.275841773517125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa10ea2ae883%3A0xbe22c55d60ef09c7!2sPoliteknik%20Elektronika%20Negeri%20Surabaya!5e0!3m2!1sid!2sid!4v1616598265447!5m2!1sid!2sid" width="200" height="100" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        <div class="text-semibold text-lg text-gray-300"> Jl. Raya ITS, Keputih, Kec. Sukolilo, Kota SBY, Jawa Timur 60111</div>
                    </div>
                </div>
            </div>
           <div class="py-2 bg-gray-900 text-gray-400 text-center text-md">Copyright &copy 2021 MediaEnt. All Rights Reserved</div>
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
        
        {{-- script --}}
        @include('layouts.script');
    </body>
</x-app-layout>

</html>