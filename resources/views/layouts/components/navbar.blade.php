<header class="shadow-md z-50 fixed top-0 w-full transition-all bg-accent" id="navbar">
	<nav x-data="{isOpen: false}" class="container py-7 md:py-10">
		<div class="flex justify-between items-center">
			<a href="{{ route('home') }}" class="flex gap-3 items-center">
				<img src="{{ asset('ent.png') }}" alt="" class="h-12 md:h-16" />
				<span class="text-lg md:text-2xl font-bold tracking-wide text-accent3">MediaENT</span>
			</a>
			<ul class="hidden md:flex items-center gap-7">
				<li>
					<a href="index.html" class="font-semibold text-accent3 hover:text-gray-800">Home</a>
				</li>
				<li class="flex items-center">
					<div x-data="{isOpen: false}" @click.away="isOpen = false">
						<div class="flex items-center">
							<a href="index.html" class="font-semibold text-accent3 hover:text-gray-800">Article</a>
							<button @click="isOpen = !isOpen">
								<svg class="h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
									<path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z"></path>
								</svg>
							</button>
						</div>

						<div :class="{'showpopup': isOpen, 'hidden': !isOpen}"
							class="origin-top-right absolute mt-2 w-52 shadow-lg bg-accent ring-1 ring-black ring-opacity-5 focus:outline-none"
							role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
							<div class="py-1" role="none">
								<a href="category.html" class="text-accent3 hover:text-gray-400 block px-4 py-2 text-sm" role="menuitem"
									tabindex="-1" id="menu-item-0">category 1</a>
								<a href="category.html" class="text-accent3 hover:text-gray-400 block px-4 py-2 text-sm" role="menuitem"
									tabindex="-1" id="menu-item-1">category 2</a>
								<a href="category.html" class="text-accent3 hover:text-gray-400 block px-4 py-2 text-sm" role="menuitem"
									tabindex="-1" id="menu-item-2">category 3</a>
								<a href="category.html" class="text-accent3 hover:text-gray-400 block px-4 py-2 text-sm" role="menuitem"
									tabindex="-1" id="menu-item-2">category 4</a>
							</div>
						</div>
					</div>
				</li>
				<li>
					<a href="videos.html" class="font-semibold text-accent3 hover:text-gray-800">Videos</a>
				</li>
				<li>
					<a href="about.html" class="font-semibold text-accent3 hover:text-gray-800">About</a>
				</li>
			</ul>
			<div class="hidden md:flex space-x-3">
				@auth
					@hasanyrole('admin|author')
						<li class="mr-3">
							<x-nav-link :href="route('admin.home')" :active="request()->routeIs('login')">
								<button id="navAction"
									class="mx-auto lg:mx-0 hover:no-underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
									DASHBOARD
								</button>
							</x-nav-link>
						</li>
					@endhasanyrole
					<li class="mr-3">
						<x-dropdown align="right" width="48">
							<x-slot name="trigger">
								<button
									class="flex items-center text-sm font-medium text-white focus:outline-none focus:text-gray-300 transition duration-150 ease-in-out">
									<div>{{ Auth::user()->name }}</div>

									<div class="ml-1">
										<svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
											<path fill-rule="evenodd"
												d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
												clip-rule="evenodd" />
										</svg>
									</div>
								</button>
							</x-slot>

							<x-slot name="content">
								<!-- Authentication -->
								<form method="POST" action="{{ route('logout') }}">
									@csrf

									<x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
																																						this.closest('form').submit();">
										{{ __('Log out') }}
									</x-dropdown-link>
								</form>
							</x-slot>
						</x-dropdown>
					</li>
				@else
                    <a href="{{ route('register') }}" class="px-5 py-3 bg-primary text-accent font-semibold tracking-wide">Register</a>
                    <a href="{{ route('login') }}" class="px-5 py-3 bg-accent3 text-accent font-semibold tracking-wide">Login</a>
				@endauth
			</div>
			<button @click="isOpen = !isOpen" type="submit" class="md:hidden">
				<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-list h-7" viewBox="0 0 16 16">
					<path fill-rule="evenodd"
						d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
				</svg>
			</button>
			<!-- end mobile navbar -->
		</div>
		<div class="mobile-navbar">
			<!-- navbar wrapper -->
			<div class="md:hidden w-full h-auto p-5 text-center items-center" x-show="isOpen" @click.away="isOpen = false">
				<div class="flex flex-col space-y-6 items-center text-center">
					<a href="index.html" class="py-3 font-semibold text-accent hover:text-gray-800">Home</a>
					<div x-data="{isOpen: false}" @click.away="isOpen = false">
						<div class="flex items-center text-center">
							<a href="index.html" class="py-3 font-semibold text-accent hover:text-gray-800">Article</a>
							<button @click="isOpen = !isOpen">
								<svg class="h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
									<path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z"></path>
								</svg>
							</button>
						</div>

						<div :class="{'showpopup': isOpen, 'hidden': !isOpen}" class="w-full" role="menu"
							aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
							<div class="py-1 flex flex-col" role="none">
								<a href="category.html" class="w-full py-3 text-accent hover:text-gray-400 text-sm" role="menuitem"
									tabindex="-1" id="menu-item-0">category 1</a>
								<a href="category.html" class="w-full py-3 text-accent hover:text-gray-400 text-sm" role="menuitem"
									tabindex="-1" id="menu-item-1">category 2</a>
								<a href="category.html" class="w-full py-3 text-accent hover:text-gray-400 text-sm" role="menuitem"
									tabindex="-1" id="menu-item-2">category 3</a>
								<a href="category.html" class="w-full py-3 text-accent hover:text-gray-400 text-sm" role="menuitem"
									tabindex="-1" id="menu-item-2">category 4</a>
							</div>
						</div>
					</div>
					<a href="videos.html" class="py-3 font-semibold text-accent hover:text-gray-800">Video</a>
					<a href="about.html" class="py-3 font-semibold text-accent hover:text-gray-800">About</a>
				</div>
			</div>
		</div>
	</nav>
</header>
