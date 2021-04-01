<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">

    <!-- Tailwind -->
    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }

        .bg-sidebar {
            background: #3d68ff;
        }

        .cta-btn {
            color: #3d68ff;
        }

        .upgrade-btn {
            background: #1947ee;
        }

        .upgrade-btn:hover {
            background: #0038fd;
        }

        .active-nav-link {
            background: #1947ee;
        }

        .nav-item:hover {
            background: #1947ee;
        }

        .account-link:hover {
            background: #3d68ff;
        }
    </style>
</head>

<body class="bg-gray-100 font-family-karla flex">

    <aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
        <div class="p-6">
            <a href="{{ route('admin.home') }}"
                class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
            <a href="{{ route('admin.article.create') }}"
                class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                <i class="fas fa-plus mr-3"></i> New Article
            </a>
            <a href="{{ route('admin.video.create') }}"
                class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                <i class="fas fa-plus mr-3"></i> New Video
            </a>
        </div>
        <nav class="text-white text-base font-semibold pt-3">
            <a href="{{ route('home') }}"
                class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-sign-out-alt mr-3"></i>
                Back Home
            </a>
            <a href="{{ route('admin.home') }}"
                class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-chart-bar mr-3"></i>
                Dashboard
            </a>
            @role('admin')
            <a href="{{ route('admin.author') }}"
                class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-tools mr-3"></i>
                Manage Author
            </a>
            @endrole
            <a href="{{ route('admin.article.index') }}"
                class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-table mr-3"></i>
                Table Article
            </a>
            <a href="{{ route('admin.video.index') }}"
                class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-table mr-3"></i>
                Table Video
            </a>
            <a href="{{ route('admin.calendar') }}"
                class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-calendar-alt mr-3"></i>
                Calendar
            </a>
        </nav>
    </aside>

    <div class="relative w-full flex flex-col h-screen overflow-y-hidden">
        <!-- Desktop Header -->
        <header class="w-full items-center bg-white py-2 px-6 hidden sm:flex">
            <div class="w-1/2"></div>
            <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
                @auth
                <!-- Settings Dropdown -->
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
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
                </div>
                @endauth

            </div>
        </header>

        <!-- Mobile Header & Nav -->
        <header x-data="{ isOpen: false }" class="w-full bg-sidebar py-5 px-6 sm:hidden">
            <div class="flex items-center justify-between">
                <a href="{{ route('admin.home') }}"
                    class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
                <button @click="isOpen = !isOpen" class="text-white text-3xl focus:outline-none">
                    <i x-show="!isOpen" class="fas fa-bars"></i>
                    <i x-show="isOpen" class="fas fa-times"></i>
                </button>
            </div>

            <!-- Dropdown Nav -->
            <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4">
                <a href="{{ route('admin.home') }}"
                    class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-chart-bar mr-3"></i>
                    Dashboard
                </a>
                <a href="{{ route('admin.article.create') }}"
                    class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-newspaper mr-3"></i>
                    New Article
                </a>
                <a href="{{ route('admin.video.create') }}"
                    class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-video mr-3"></i>
                    New Video
                </a>
                @role('admin')
                <a href="{{ route('admin.author') }}"
                    class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-tools mr-3"></i>
                    Manage Author
                </a>
                @endrole
                <a href="{{ route('admin.article.index') }}"
                    class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-table mr-3"></i>
                    Table Article
                </a>
                <a href="{{ route('admin.video.index') }}"
                    class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-table mr-3"></i>
                    Table video
                </a>
                <a href="{{ route('admin.calendar') }}"
                    class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-calendar-alt mr-3"></i>
                    Calendar
                </a>
                <a :href="route('logout') class=" flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4
                    nav-item">
                    <form method="POST" action="{{ route('logout') }}" class=" bg-gray-200">
                        @csrf
                        <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            <i class="text-black fas fa-sign-out-alt mr-3"></i>
                            LOG OUT
                        </x-dropdown-link>
                    </form>
                </a>
            </nav>
            <!-- <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                <i class="fas fa-plus mr-3"></i> New Report
            </button> -->
        </header>

        <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
                <div class="w-full mt-6">
                    <h1 class="text-3xl text-black pb-6"><i class="fas fa-newspaper mr-3"></i>Edit Video</h1>

                    <div class="leading-loose">
                        <form method="POST" action="{{ route('admin.video.update', $video) }}"
                            class="px-10 pt-8 pb-10 bg-white rounded shadow-xl" novalidate>
                            @csrf
                            @method('PATCH')
                            <div class="mt-2">
                                <label class="block text-sm text-gray-600" for="title">Judul</label>
                                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="title"
                                    name="title" type="text" value="{{ old('title') ?? $video->title }}"
                                    placeholder="Masukkan judul video" aria-label="title" required>
                                <x-validation-message name="title" />
                            </div>
                            <div class="mt-2">
                                <label class="block text-sm text-gray-600" for="category">Pilih Kategori</label>
                                <select class="uppercase w-full px-5 py-1 text-gray-700 bg-gray-200 rounded"
                                    name="category">
                                    <option value="1"
                                        {{ (old('category') ?? $video->category->id) == 1 ? "selected" : "" }}>Lifestyle
                                    </option>
                                    <option value="2"
                                        {{ (old('category') ?? $video->category->id) == 2 ? "selected" : "" }}>Hiburan
                                    </option>
                                    <option value="3"
                                        {{ (old('category') ?? $video->category->id) == 3 ? "selected" : "" }}>Teknologi
                                    </option>
                                    <option value="4"
                                        {{ (old('category') ?? $video->category->id) == 4 ? "selected" : "" }}>Explore
                                    </option>
                                </select>
                                <x-validation-message name="category" />
                            </div>
                            <div class="mt-2">
                                <label class="block text-sm text-gray-600" for="url">URL Video</label>
                                <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="url"
                                    aria-label="url" name="url" type="url" value="{{ old('url') ?? $video->url }}"
                                    placeholder="Masukkan url video" required>
                                <x-validation-message name="url" />
                            </div>
                            <div class="mt-2">
                                <label class=" block text-sm text-gray-600" for="description">Deskripsi Video</label>
                                <textarea class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="description"
                                    name="description" placeholder="Masukkan deskripsi video" aria-label="description"
                                    required>{{ old('description') ?? $video->description }}</textarea>
                                <x-validation-message name="description" />
                            </div>
                            <div class="mt-6">
                                <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"
                                    type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

            </main>

            <footer class="w-full bg-white text-right p-4">
                BY <a target="_blank" href="https://davidgrzyb.com" class="underline">Media ENT- 2021</a>.
            </footer>
        </div>

    </div>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</body>

</html>