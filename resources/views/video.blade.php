@extends('layouts.master')

@section('content')
	<x-app-layout>
        <main class="container flex flex-col min-h-screen mt-36 md:mt-40">
			<div class="py-7">
				<!--latest video on youtube  -->
				<section class="flex flex-col md:flex-row justify-center items-center gap-8">
					<div class="w-full p-7 space-y-3">
						<h3 class="text-left font-bold text-2xl uppercase tracking-wide">Latest video on youtube</h3>
						<p class="text-lg">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias soluta, atque iste doloribus nihil dolores, sequi explicabo corporis qui ratione necessitatibus repudiandae dolore ducimus maxime ipsum reprehenderit rem
							rerum quo.
						</p>
					</div>
					<div class="w-full space-y-3">
                        @foreach ($latest_videos as $vid)
						<div class="h-96 w-full flex justify-center items-center">
                            <iframe src="{{ $vid->url }}" title="{{ $vid->title }}" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
                                class="w-full aspect-video"></iframe>
						</div>
                        @endforeach
					</div>
				</section>
				<!-- end of latest video on youtube -->

				<!-- our videos -->
				<section class="w-full lg:w-full my-12">
					<div class="py-2 mx-auto mb-8">
						<h2 class="font-bold text-2xl text-center tracking-widest uppercase">Our Videos</h2>
					</div>

					<div class="flex flex-col md:flex-row justify-center gap-6 pb-6 border-b-4">
                  <!-- video example -->
                  <div class="flex md:flex-row justify-center gap-6">
                    @foreach ($videos as $video)
                     <div class="w-full flex flex-col justify-center items-center">
                        <iframe src="{{ $video->url }}" title="{{ $video->title }}" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
                            class="w-full aspect-video"></iframe>
                            <div class="mt-4 justify-between items-center">
                                <h1 class="font-semibold text-xl">{{ $video->title }}</h1>
                                <span class="text-gray-400 text-sm">{{ $video->created_at }}</span>
                             </div>
                     </div>

                     @endforeach
                  </div>
                  <!-- end of video example -->

					</div>
				</section>
				<!-- end of our videos -->
			</div>
		</main>



    </x-app-layout>
@endsection
