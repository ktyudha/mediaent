<div class="mx-auto items-center">
            <div class="text-center pb-40 font-bold text-gray-300 text-3xl">
                Relatest Posts
            </div>
        </div>
        <!-- Featured Post 1 -->
        <section class="text-gray-500 body-font">
            <div class="px-5 pb-4 pt-0 -mt-40 mx-auto">
                <div class="flex flex-wrap">
                    @foreach($articles_recent->take(3) as $article)
                    <div class="group p-4 md:w-1/3 ">
                        <div
                            class="bg-white group-hover:shadow-2xl duration-700 group-hover:border-gray-900 h-full shadow-md border-opacity-60 rounded-lg overflow-hidden">
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                                src="{{ Storage::url($article->thumbnail->url) }}" alt="{{ $article->slug }}">
                            <div class="p-6 pt-2">
                                <h2 class="uppercase tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                                    {{ $article->category->name }}
                                </h2>
                                <a href="{{ route('article.show', $article) }}" class="hover:underline">
                                    <h1 class="title-font text-lg font-medium text-xl text-gray-900 mb-3">
                                        {{ $article->title }}</h1>
                                </a>
                                <p class="leading-relaxed mb-3 group-hover:text-gray-600 text-md">
                                    {{ $article->description }}
                                </p>
                                <div class="flex items-center flex-wrap ">
                                    <a href="{{ route('article.show', $article) }}"
                                        class="mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-nonepr-3 py-1">
                                        {{-- <a href="{{ route('article.show', $article) }}"> --}}
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

                                    {{-- <span
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
                                    </span> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
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

                            @if (empty($articles_lifestyle) || $video_lifestyle)
                            <div class="xl:w-1/2 sm:w-full lg:w-1/2 w-full px-2 pb-5">
                                <div class="w-full h-2 rounded-t-md bg-blue-500"></div>
                                {{-- link kategori --}}
                                <a href="{{ route('category.show', 1) }}">
                                    <div
                                        class="bg-white flex text-2xl  flex-row justify-between font-bold text-blue-500 uppercase px-4 py-1 border-b border-gray-300">
                                        <div>Lifestyle</div>
                                        <div class="text-xl px-5 flex my-auto">Selengkapnya
                                            <svg class="w-7 h-7 mx-1 flex-row" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M14 5l7 7m0 0l-7 7m7-7H3" />

                                            </svg>
                                        </div>
                                    </div>

                                </a>

                                <div class="md:flex-row flex-wrap lg:flex-col flex">
                                    <div class="w-full xl:w-full ">
                                        <div
                                            class="md:flex-row duration-700 bg-white p-4 group-hover:shadow-2xl shadow-md">
                                            @if ($video_lifestyle)
                                            <iframe class="h-96 mb-6 rounded w-full" src="{{ $video_lifestyle->url }}"
                                                title="{{ $video_lifestyle->title }}" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                            <a href="#" class="hover:underline">
                                                <h2
                                                    class="duration-700 text-2xl text-gray-800 font-bold title-font mb-2">
                                                    {{ $video_lifestyle->title }}
                                                </h2>
                                            </a>
                                            <p class="leading-relaxed text-lg">
                                                {{ $video_lifestyle->description }}
                                            </p>
                                            @else
                                            <img class="h-49 rounded w-full object-cover object-center mb-6"
                                                src="{{ Storage::url($articles_lifestyle[0]->thumbnail->url) }}"
                                                alt="content">
                                            <a href="{{ route('article.show', $articles_lifestyle[0]) }}" class="hover:underline">
                                                <h2
                                                    class="duration-700 text-2xl text-gray-800 font-bold title-font mb-2">
                                                    {{ $articles_lifestyle[0]->title }}
                                                </h2>
                                            </a>
                                            <p class="leading-relaxed text-lg">
                                                {{ $articles_lifestyle[0]->description }}
                                            </p>
                                            @endif
                                        </div>
                                    </div>

                                    {{-- second card kategori max 3 posts --}}
                                    <?php $articles = $video_lifestyle ? $articles_lifestyle : $articles_lifestyle->slice(1) ?>
                                    @foreach ($articles as $article)
                                    <div class="w-full mx-auto bg-white rounded-b-lg text-gray-600 body-font">

                                        <div class="flex relative py-2 items-center border-t w-full mx-auto">
                                            <a href="{{ route('article.show', $article) }}">
                                                <div class="flex-grow flex items-center flex-row md:px-4 px-4">
                                                    <div
                                                        class="flex-shrink-0 w-24 h-24 my-auto bg-indigo-100 my-auto text-indigo-500 rounded-md inline-flex items-center justify-center">
                                                        <img src="{{ Storage::url($article->thumbnail->url) }}"
                                                            alt="{{ $article->title }}"
                                                            class="w-full h-full object-cover">
                                                    </div>
                                                    <div class="mx-4 mt-6 sm:mt-0">
                                                        <h2
                                                            class="font-bold title-font my-auto text-gray-900 mb-1 text-lg md:text-lg">
                                                            {{ $article->title }}
                                                        </h2>
                                            </a>
                                            <p class="font-medium text-md">by
                                                <span>{{ $article->user->name }}</span>
                                                |
                                                <span>{{ \Carbon\Carbon::parse( $article->created_at )->format('F j, Y')}}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                    @endif

                    {{-- kategori hiburan --}}

                    <div class="xl:w-1/2 sm:w-full lg:w-1/2 w-full px-2 pb-5">
                        <div class="w-full h-2 rounded-t-md bg-pink-500"></div>
                        {{-- link kategori --}}
                        <a href="{{ route('category.show', 2) }}">
                            <div
                                class="bg-white flex text-2xl flex-row justify-between font-bold text-pink-500 uppercase px-4 py-1 border-b border-gray-300">
                                <div>Hiburan</div>
                                <div class="text-xl px-5 flex my-auto">Selengkapnya
                                    <svg class="w-7 h-7 mx-1 flex-row" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3" />

                                    </svg>
                                </div>

                            </div>
                        </a>

                        <div class="md:flex-row flex-wrap lg:flex-col flex">
                            <div class="w-full xl:w-full ">
                                <div class="md:flex-row duration-700 bg-white p-4 group-hover:shadow-2xl shadow-md">
                                    {{-- link embed video --}}
                                    @if($video_hiburan)
                                    <iframe class="h-96 mb-6 rounded w-full" src="{{ $video_hiburan->url }}"
                                        title="{{ $video_hiburan->title }}" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                    <a href="#" class="hover:underline">
                                        <h2 class="duration-700 text-2xl text-gray-800 font-bold title-font mb-2">
                                            {{ $video_hiburan->title }}
                                        </h2>
                                    </a>
                                    <p class="leading-relaxed text-lg">
                                        {{ $video_hiburan->description }}
                                    </p>
                                    @else
                                    <img class="h-49 rounded w-full object-cover object-center mb-6"
                                        src="{{ Storage::url($articles_hiburan[0]->thumbnail->url) }}" alt="content">
                                    <a href="{{ route('article.show', $articles_hiburan[0]) }}" class="hover:underline">
                                        <h2 class="duration-700 text-2xl text-gray-800 font-bold title-font mb-2">
                                            {{ $articles_hiburan[0]->title }}
                                        </h2>
                                    </a>
                                    <p class="leading-relaxed text-lg">
                                        {{ $articles_hiburan[0]->description }}
                                    </p>
                                    @endif
                                </div>
                            </div>

                            {{-- second card kategori max 3 posts --}}

                            <?php $articles = $video_hiburan ? $articles_hiburan : $articles_hiburan->slice(1) ?>
                            @foreach ($articles as $article)
                            <div class="w-full mx-auto bg-white rounded-b-lg text-gray-600 body-font">

                                <div class="flex relative py-2 items-center border-t w-full mx-auto">
                                    <a href="{{ route('article.show', $article) }}">
                                        <div class="flex-grow flex items-center flex-row md:px-4 px-4">
                                            <div
                                                class="flex-shrink-0 w-24 h-24 my-auto bg-indigo-100 my-auto text-indigo-500 rounded-md inline-flex items-center justify-center">
                                                <img src="{{ Storage::url($article->thumbnail->url) }}"
                                                    alt="{{ $article->title }}" class="w-full h-full object-cover">
                                            </div>
                                            <div class="mx-4 mt-6 sm:mt-0">
                                                <h2
                                                    class="font-bold title-font my-auto text-gray-900 mb-1 text-lg md:text-lg">
                                                    {{ $article->title }}
                                                </h2>
                                    </a>
                                    <p class="font-medium text-md">by
                                        <span>{{ $article->user->name }}</span>
                                        |
                                        <span>{{ \Carbon\Carbon::parse( $article->created_at )->format('F j, Y')}}</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

            </div>
        </div>

<div class="xl:w-1/2 sm:w-full lg:w-1/2 w-full px-2 pb-5">
            <div class="w-full h-2 rounded-t-md bg-green-500"></div>
            {{-- link kategori --}}
            <a href="{{ route('category.show', 3) }}">
                <div
                    class="bg-white flex flex-row justify-between text-2xl font-bold text-green-500 uppercase px-4 py-1 border-b border-gray-300">
                    <div>Teknologi</div>

                    <div class="text-xl px-5 flex my-auto">Selengkapnya
                        <svg class="w-7 h-7 mx-1 flex-row" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3" />

                        </svg>
                    </div>
                </div>
            </a>

            <div class="md:flex-row flex-wrap lg:flex-col flex">
                <div class="w-full xl:w-full ">
                    <div class="md:flex-row duration-700 bg-white p-4 group-hover:shadow-2xl shadow-md">
                        @if($video_teknologi)
                        <iframe class="h-96 mb-6 rounded w-full" src="{{ $video_teknologi->url }}"
                            title="{{ $video_teknologi->title }}" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                        <a href="#" class="hover:underline">
                            <h2 class="duration-700 text-2xl text-gray-800 font-bold title-font mb-2">
                                {{ $video_teknologi->title }}
                            </h2>
                        </a>
                        <p class="leading-relaxed text-lg">
                            {{ $video_teknologi->description }}
                        </p>
                        @else
                        <img class="h-49 rounded w-full object-cover object-center mb-6"
                            src="{{ Storage::url($articles_teknologi[0]->thumbnail->url) }}" alt="content">
                        <a href="{{ route('article.show', $articles_teknologi[0]) }}" class="hover:underline">
                            <h2 class="duration-700 text-2xl text-gray-800 font-bold title-font mb-2">
                                {{ $articles_teknologi[0]->title }}
                            </h2>
                        </a>
                        <p class="leading-relaxed text-lg">
                            {{ $articles_teknologi[0]->description }}
                        </p>
                        @endif
                    </div>
                </div>

                {{-- second card kategori max 3 posts --}}

                <?php $articles = $video_teknologi ? $articles_teknologi : $articles_teknologi->slice(1) ?>
                @foreach ($articles as $article)
                <div class="w-full mx-auto bg-white rounded-b-lg text-gray-600 body-font">

                    <div class="flex relative py-2 items-center border-t w-full mx-auto">
                        <a href="{{ route('article.show', $article) }}">
                            <div class="flex-grow flex items-center flex-row md:px-4 px-4">
                                <div
                                    class="flex-shrink-0 w-24 h-24 my-auto bg-indigo-100 my-auto text-indigo-500 rounded-md inline-flex items-center justify-center">
                                    <img src="{{ Storage::url($article->thumbnail->url) }}" alt="{{ $article->title }}"
                                        class="w-full h-full object-cover">
                                </div>
                                <div class="mx-4 mt-6 sm:mt-0">
                                    <h2 class="font-bold title-font my-auto text-gray-900 mb-1 text-lg md:text-lg">
                                        {{ $article->title }}
                                    </h2>
                        </a>
                        <p class="font-medium text-md">by
                            <span>{{ $article->user->name }}</span>
                            |
                            <span>{{ \Carbon\Carbon::parse( $article->created_at )->format('F j, Y')}}</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        </div>
        </div>

        {{-- kategori explore --}}

        @if (empty($articles_explore) || $video_explore)
        <div class="xl:w-1/2 sm:w-full lg:w-1/2 w-full px-2 pb-5">
            <div class="w-full h-2 rounded-t-md bg-yellow-500"></div>
            <a href="{{ route('category.show', 4) }}">
                <div
                    class="bg-white flex flex-row justify-between text-2xl font-bold text-yellow-500 uppercase px-4 py-1 border-b border-gray-300">
                    <div>Explore</div>
                    <div class="text-xl px-5 flex my-auto">Selengkapnya
                        <svg class="w-7 h-7 mx-1 flex-row" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3" />

                        </svg>
                    </div>
                </div>
            </a>

            <div class="md:flex-row flex-wrap lg:flex-col flex">
                <div class="w-full xl:w-full ">
                    <div class="md:flex-row duration-700 bg-white p-4 group-hover:shadow-2xl shadow-md">
                        @if($video_explore)
                        <iframe class="h-96 mb-6 rounded w-full" src="{{ $video_explore->url }}"
                            title="{{ $video_explore->title }}" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                        <a href="#" class="hover:underline">
                            <h2 class="duration-700 text-2xl text-gray-800 font-bold title-font mb-2">
                                {{ $video_explore->title }}
                            </h2>
                        </a>
                        <p class="leading-relaxed text-lg">
                            {{ $video_explore->description }}
                        </p>
                        @else
                        <img class="h-49 rounded w-full object-cover object-center mb-6"
                            src="{{ Storage::url($articles_explore[0]->thumbnail->url) }}" alt="content">
                        <a href="{{ route('article.show', $articles_explore[0]) }}" class="hover:underline">
                            <h2 class="duration-700 text-2xl text-gray-800 font-bold title-font mb-2">
                                {{ $articles_explore[0]->title }}
                            </h2>
                        </a>
                        <p class="leading-relaxed text-lg">
                            {{ $articles_explore[0]->description }}
                        </p>
                        @endif
                    </div>
                </div>

                {{-- second card kategori max 3 posts --}}

                <?php $articles = $video_explore ? $articles_explore : $articles_explore->slice(1) ?>
                @foreach ($articles as $article)
                <div class="w-full mx-auto bg-white rounded-b-lg text-gray-600 body-font">

                    <div class="flex relative py-2 items-center border-t w-full mx-auto">
                        <a href="{{ route('article.show', $article) }}">
                            <div class="flex-grow flex items-center flex-row md:px-4 px-4">
                                <div
                                    class="flex-shrink-0 w-24 h-24 my-auto bg-indigo-100 my-auto text-indigo-500 rounded-md inline-flex items-center justify-center">
                                    <img src="{{ Storage::url($article->thumbnail->url) }}" alt="{{ $article->title }}"
                                        class="w-full h-full object-cover">
                                </div>
                                <div class="mx-4 mt-6 sm:mt-0">
                                    <h2 class="font-bold title-font my-auto text-gray-900 mb-1 text-lg md:text-lg">
                                        {{ $article->title }}
                                    </h2>
                        </a>
                        <p class="font-medium text-md">by
                            <span>{{ $article->user->name }}</span>
                            |
                            <span>{{ \Carbon\Carbon::parse( $article->created_at )->format('F j, Y')}}</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        </div>
        </div>
        @endif


        {{-- end --}}
        </div>
        </div>


        </section>
        </div>

        {{-- 1/4 sidebar  --}}
        </div>
        </div>
        </div>
