@extends('layouts.master')
@section('content')

	<x-app-layout>

		<!--Left Col-->
		<main class="container flex flex-col min-h-screen mt-36 md:mt-40">
			<div class="py-7">
				<div class="py-5 border-b-4 mx-auto mb-8">
					<h2 class="font-bold text-2xl text-center tracking-widest uppercase">{{ request()->route('category')->name }}</h2>
				</div>

				<section class="flex flex-col md:flex-row justify-center gap-10 pb-10 border-b-4">
					<div class="w-full flex flex-col justify-center">
						<h3 class="text-center font-semibold text-xl uppercase tracking-wide mb-4">Latest Article</h3>
						<a href="{{ route('article.show', $articles[0]) }}" class="">
							<div class="w-full relative bg-cover bg-center aspect-video max-w-4xl mx-auto"
								style="background-image: url('https://ent.pens.ac.id{{ Storage::url($articles[0]->thumbnail->url) }}');">
								{{-- <h3 class="text-3xl font-semibold text-slate-100">{{ $articles[0]->title }}</h3> --}}
								<div class="w-full absolute bottom-0">
									<div class="py-20 px-6 md:px-10 md:py-16 mt-32 space-y-2">
										<h2 class="text-3xl font-semibold text-gray-100 leading-tight">{{ $articles[0]->title }}</h2>
										<p class="line-clamp-1 text-gray-100">{{ $articles[0]->description }}</p>
									</div>
								</div>
							</div>
						</a>
					</div>

					@if ($videos->count() > 0)
						<div class="w-full">
							<h3 class="text-center font-semibold text-xl uppercase tracking-wide mb-4">Video on Youtube</h3>
							@foreach ($videos as $video)
								<iframe src="{{ $video->url }}" title="{{ $video->title }}" frameborder="0"
									allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
									class="w-full aspect-video"></iframe>
							@endforeach
						</div>
					@endif
				</section>

				<div class="flex flex-col lg:flex-row justify-between items-start space-x-12 mb-4 py-8">
					<section class="w-full lg:w-full">
						<div class="py-2 mx-auto mb-8">
							<h2 class="font-bold text-2xl text-center tracking-widest uppercase">Articles</h2>
						</div>

						<div class="w-9/12 flex flex-col space-y-5 mx-auto">
							@include('components.article-list')
						</div>

						<!-- pagination example -->
						<nav class="w-full py-7 inline-flex justify-center rounded-md" aria-label="Pagination">
							<a href="#"
								class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
								<span class="sr-only">Previous</span>
								<!-- Heroicon name: solid/chevron-left -->
								<svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
									aria-hidden="true">
									<path fill-rule="evenodd"
										d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
										clip-rule="evenodd" />
								</svg>
							</a>
							<!-- Current: "z-10 bg-indigo-50 border-indigo-500 text-indigo-600", Default: "bg-white border-gray-300 text-gray-500 hover:bg-gray-50" -->
							<a href="#" aria-current="page"
								class="z-10 bg-indigo-50 border-indigo-500 text-indigo-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
								1 </a>
							<a href="#"
								class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
								2 </a>
							<a href="#"
								class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 hidden md:inline-flex relative items-center px-4 py-2 border text-sm font-medium">
								3 </a>
							<a href="#"
								class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
								<span class="sr-only">Next</span>
								<!-- Heroicon name: solid/chevron-right -->
								<svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
									aria-hidden="true">
									<path fill-rule="evenodd"
										d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
										clip-rule="evenodd" />
								</svg>
							</a>
						</nav>
						<!-- end of pagination example -->
					</section>
				</div>
			</div>
		</main>
	</x-app-layout>
@endsection
