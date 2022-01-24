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

	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>

	{{-- carousel --}}
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
	<link rel="stylesheet" href="{{ mix('css/app.css') }}">

	<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>

<body class="bg-gray-100">
	@include('layouts.components.navbar')

	@yield('content')

	@include('layouts.components.footer')

	{{-- <footer>
            <div class="gradient h-6 w-full rounded-t"></div>
            <div class="lg:px-48 px-6 bg-gray-800">
                <div class="w-full flex flex-col md:flex-row py-6">
                    <div class="flex-2 mb-6 text-black flex md:px-10 flex-row">
                        <div class="pr-4 text-2xl md:text-4xl sm:text-4xl text-gray-300 my-auto font-bold"><a href="{{ route('home') }}">Media ENT</a></div>
                    </div>
                    <div class="flex-1">
                        <p class="uppercase text-gray-300 font-bold text-2xl md:mb-6">KATEGORI</p>
                        <ul class="list-reset mb-6 ">
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="{{ route('category.show', 1) }}"
                                    class="text-xl duration-700 no-underline text-gray-400 hover:text-pink-500">Lifestyle</a>
                            </li>

                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="{{ route('category.show', 2) }}"
                                    class="text-xl duration-700 no-underline text-gray-400 hover:text-pink-500">Hiburan</a>
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="{{ route('category.show', 3) }}"
                                    class="text-xl duration-700 no-underline text-gray-400 hover:text-pink-500">Teknologi</a>
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="{{ route('category.show', 4) }}"
                                    class="text-xl duration-700 no-underline text-gray-400 hover:text-pink-500">Explore</a>
                            </li>
                        </ul>
                    </div>
                    <div class="flex-1">
                        <p class="uppercase  text-gray-300 text-2xl font-bold md:mb-6">Social</p>
                        <ul class="list-reset mb-6">
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="https://ent.pens.ac.id/"
                                    class="text-xl duration-700 no-underline text-gray-400 hover:text-pink-500">ENT PENS</a>
                            </li>

                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="https://www.youtube.com/channel/UCgCH04Vjy22hnfTZBTMDccQ"
                                    class="text-xl duration-700 no-underline text-gray-400 hover:text-pink-500">Youtube</a>
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="https://www.instagram.com/entcrews/"
                                    class="text-xl duration-700 no-underline text-gray-400 hover:text-pink-500">Instagram</a>
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
        </footer> --}}

	{{-- script --}}

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"
	 integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script>
	 $(document).ready(function() {
        "use strict";

        var c,
        currentScrollTop = 0,
        navbar = $("header");

        $(window).scroll(function() {
        var a = $(window).scrollTop();
        var b = navbar.height();

        currentScrollTop = a;

        if (c < currentScrollTop && a > b + b) {
            navbar.addClass("scrollUp");
        } else if (c > currentScrollTop && !(a <= b)) {
            navbar.removeClass("scrollUp");
        }
            c = currentScrollTop;
        });
	 });
	</script>
</body>

</html>
