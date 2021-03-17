
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Kategori</title>
	<meta name="author" content="name">
    <meta name="description" content="description here">
		<meta name="keywords" content="keywords,here">
		<link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet"> <!--Replace with your tailwind.css once created-->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" rel="stylesheet">

</head>
<body class="bg-gray-200 font-sans leading-normal tracking-normal">

	<!--Header-->
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
	<div class="w-full m-0 p-0 bg-cover bg-bottom" style="background-image:url('cover.jpg'); height: 60vh; max-height:460px;">
			<div class="container max-w-4xl mx-auto pt-16 md:pt-32 text-center break-normal">
				<!--Title-->
					<p class="text-white font-extrabold text-3xl md:text-5xl">
						 NEW ARTIKEL
					</p>
					<p class="text-xl md:text-2xl text-gray-500">Welcome to Media ENT</p>
			</div>
		</div>

		<!--Container-->
		<div class="container px-4 md:px-0 max-w-6xl mx-auto -mt-32">
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
								<div class="w-full font-bold text-xl text-gray-900 px-6">Disini Judulnya Yang Pualing Baru Ya Ron</div>
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

				<!--Posts Container-->
				<div class="flex flex-wrap justify-between pt-12 -mx-6">

					<!--1/3 col -->
					<div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
						<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
							<a href="#" class="flex flex-wrap no-underline hover:no-underline">
								<img src="https://source.unsplash.com/collection/3106804/800x600" class="h-64 w-full rounded-t pb-6">
								<p class="uppercase w-full text-gray-600 text-xs md:text-sm px-6">surabaya</p>
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
								<p class="uppercase w-full text-gray-600 text-xs md:text-sm px-6">surabaya</p>
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
								<p class="uppercase w-full text-gray-600 text-xs md:text-sm px-6">surabaya</p>
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
    <footer class="w-full text-center uppercase bg-gray-300 p-4">
        BY <a target="_blank" href="https://davidgrzyb.com" class="underline">Media ENT- 2021</a>.
    </footer>

	<script src="https://unpkg.com/popper.js@1/dist/umd/popper.min.js"></script>
	<script src="https://unpkg.com/tippy.js@4"></script>
	<script>
		//Init tooltips
		tippy('.avatar')
	</script>
</body>
</html>
