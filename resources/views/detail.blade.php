
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Artikel</title>
		<meta name="author" content="name">
    <meta name="description" content="description here">
		<meta name="keywords" content="keywords,here">
		<link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet"> <!--Replace with your tailwind.css once created-->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" rel="stylesheet">
	<style>
	.smooth {transition: box-shadow 0.3s ease-in-out;}
	::selection{background-color: aliceblue}
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
                    <button id="nav-toggle" class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            <svg
                                class="fill-current h-6 w-6"
                                viewbox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <title>Menu</title>
                                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                            </svg>
                    </button>
                </div>
                <div id="nav-content" class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 text-black p-4 lg:p-0 z-20">
                    <ul class="list-reset lg:flex justify-end flex-1 items-center">
                        <li class="mr-3">
                            <x-nav-link>
                                <button class="hover:text-gray-100 mx-auto py-2 px-4 inline-block lg:mx-0 hover:no-underline font-medium focus:outline-none transform transition hover:scale-105 duration-300 ease-in-out">
                                    HOME
                                </button>
                            </x-nav-link>
                        </li>
                        <li class="mr-3">
                            <x-nav-link>
                                <button class="hover:text-gray-100 mx-auto py-2 px-4 inline-block lg:mx-0 hover:no-underline font-medium focus:outline-none transform transition hover:scale-105 duration-300 ease-in-out">
                                    ABOUT
                                </button>
                            </x-nav-link>
                        </li>
                            @if (Route::has('login'))
                            @auth
                                <li class="mr-3">
                                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('login')">
                                            <button class="bg-white mx-auto lg:mx-0 hover:no-underline text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                                DASHBOARD
                                            </button>
                                        </x-nav-link>
                                    </li>
                                @else
                                    @if (Route::has('register'))
                                    <li class="mr-3">
                                        <x-nav-link :href="route('register')" :active="request()->routeIs('register')">
                                            <button class=" hover:text-gray-100 mx-auto py-2 px-4 inline-block lg:mx-0 hover:no-underline font-medium focus:outline-none transform transition hover:scale-105 duration-300 ease-in-out">
                                                REGISTER
                                            </button>
                                        </x-nav-link>
                                    </li>
                                    @endif
                                    <li class="mr-3">
                                        <x-nav-link :href="route('login')" :active="request()->routeIs('login')">
                                            <button id="navAction" class="mx-auto lg:mx-0 hover:no-underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                                LOGIN
                                            </button>
                                        </x-nav-link>
                                    </li>
                                @endif
                            @endif
                    </ul>
                </div>
        </div>
        <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
    </nav>
	<!--Title-->
	<div class="text-center pt-16 md:pt-32">
		<p class="uppercase text-sm md:text-base text-blue-500 font-bold">08 MARET 2021 <span class="text-gray-900">/</span> Surabaya</p>
	</div>

	<!--image-->
	<div class="container w-full max-w-6xl mx-auto bg-white bg-cover mt-8 rounded" style="background-image:url('https://source.unsplash.com/collection/1118905/'); height: 75vh;"></div>

	<!--Container-->
	<div class="container max-w-5xl mx-auto -mt-32">

		<div class="mx-0 sm:mx-6">

			<div class="bg-white w-full p-8 md:p-24 text-xl md:text-2xl text-gray-800 leading-normal" style="font-family:Georgia,serif;">

				<!--Post Content-->


				<!--Lead Para-->
				<p class="text-2xl md:text-3xl mb-5">
					<a class="text-center text-gray-800 hover:text-gray-500 border-b-2 border-blue-500">DISINI JUDULNYA YA KHOIRON</a>
				</p>

				<p class="py-6">The basic blog page layout is available and all using the default Tailwind CSS classes (although there are a few hardcoded style tags). If you are going to use this in your project, you will want to convert the classes into components.</p>

				<p class="py-6">Sed dignissim lectus ut tincidunt vulputate. Fusce tincidunt lacus purus, in mattis tortor sollicitudin pretium. Phasellus at diam posuere, scelerisque nisl sit amet, tincidunt urna. Cras nisi diam, pulvinar ut molestie eget, eleifend ac magna. Sed at lorem condimentum, dignissim lorem eu, blandit massa. Phasellus eleifend turpis vel erat bibendum scelerisque. Maecenas id risus dictum, rhoncus odio vitae, maximus purus. Etiam efficitur dolor in dolor molestie ornare. Aenean pulvinar diam nec neque tincidunt, vitae molestie quam fermentum. Donec ac pretium diam. Suspendisse sed odio risus. Nunc nec luctus nisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis nec nulla eget sem dictum elementum.</p>

				<ol>
					<li class="py-3">Maecenas accumsan lacus sit amet elementum porta. Aliquam eu libero lectus. Fusce vehicula dictum mi. In non dolor at sem ullamcorper venenatis ut sed dui. Ut ut est quam. Suspendisse quam quam, commodo sit amet placerat in, interdum a ipsum. Morbi sit amet tellus scelerisque tortor semper posuere.</li>
					<li class="py-3">Morbi varius posuere blandit. Praesent gravida bibendum neque eget commodo. Duis auctor ornare mauris, eu accumsan odio viverra in. Proin sagittis maximus pharetra. Nullam lorem mauris, faucibus ut odio tempus, ultrices aliquet ex. Nam id quam eget ipsum luctus hendrerit. Ut eros magna, eleifend ac ornare vulputate, pretium nec felis.</li>
					<li class="py-3">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc vitae pretium elit. Cras leo mauris, tristique in risus ac, tristique rutrum velit. Mauris accumsan tempor felis vitae gravida. Cras egestas convallis malesuada. Etiam ac ante id tortor vulputate pretium. Maecenas vel sapien suscipit, elementum odio et, consequat tellus.</li>
				</ol>
            </div>
        </div>
    </div>
    <footer class="w-full text-center uppercase bg-gray-200 p-4">
        BY <a target="_blank" href="https://davidgrzyb.com" class="underline">Media ENT- 2021</a>.
    </footer>
</body>
</html>
