@extends('layouts.master')

@section('content')
	<x-app-layout>
		<main class="container flex flex-col min-h-screen mt-36 md:mt-40">
			<div class="py-7">
				<!--latest video on youtube  -->
				<section class="flex flex-col md:flex-row justify-center items-center gap-8">
					<div class="w-full p-7 space-y-3">
						<h3 class="text-left font-bold text-2xl uppercase tracking-wide">Latest video on youtube</h3>
					</div>
					<div class="w-full space-y-3">
						@foreach ($latest_videos as $latest_video)
							<div class="h-96 w-full flex justify-center items-center">
								<iframe src="{{ $latest_video->url }}" title="{{ $latest_video->title }}" frameborder="0"
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

					<div class="flex flex-wrap -mx-3 overflow-hidden sm:-mx-3 md:-mx-5 lg:-mx-6 xl:-mx-6">
						<!-- video example -->
						<div class="flex flex-wrap -mx-2 overflow-hidden sm:-mx-2 md:-mx-4 lg:-mx-6 xl:-mx-6">
							@foreach ($videos as $video)
								<div
									class="my-3 px-3 w-1/2 overflow-hidden sm:my-3 sm:px-3 sm:w-1/2 md:my-5 md:px-5 md:w-1/3 lg:my-6 lg:px-6 lg:w-1/3 xl:my-6 xl:px-6 xl:w-1/3">
									<iframe src="{{ $video->url }}" title="{{ $video->title }}" frameborder="0"
										allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
										allowfullscreen class="w-full aspect-video"></iframe>
									<div class="mt-4 w-full flex flex-row justify-between items-start">
										<h1 class="font-semibold m-0">{{ Str::limit($video->title, 50) }}</h1>
										<span class="text-gray-400 text-sm w-1/4 text-right">{{ $video->created_at->format('d M Y') }}</span>
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
