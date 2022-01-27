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

					<div class="flex flex-col md:flex-row justify-center gap-6">
						<!-- video example -->
						<div class="w-full flex md:flex-row justify-center items-start gap-10">
							@foreach ($videos as $video)
								<div class="w-1/3 flex flex-col justify-center items-center">
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
