@extends('layouts.master')

@section('content')
	<x-app-layout>
		<!--Hero-->
		<main class="container flex flex-col min-h-screen mt-36 md:mt-40">
			<div class="py-7">
				<section>
					<div class="swiper">
						<div class="swiper-wrapper">
							@foreach ($latest_articles as $article)
								<div class="swiper-slide bg-cover bg-center sm:bg-1/2"
									style="background-image: url('https://ent.pens.ac.id{{ Storage::url($article->thumbnail->url) }}');">
									<div class="mx-auto pt-32 pb-0">
										<div class="w-full">
											<div class="py-20 px-6 md:px-10 md:py-16 mt-32 bg-gray-900 bg-opacity-60 space-y-2">
												<a href="{{ route('article.show', $article) }}">
													<h2 class="text-2xl font-semibold text-gray-100 leading-tight">{{ $article->title }}
													</h2>
												</a>
												<p class="line-clamp-1 text-gray-100">{{ $article->description }}</p>
											</div>
										</div>
									</div>
								</div>
							@endforeach
						</div>
						<div class="swiper-button-prev text-gray-800"></div>
						<div class="swiper-button-next text-gray-800"></div>
					</div>
				</section>
			</div>
			<div class="flex flex-col lg:flex-row justify-between items-start space-x-12 mb-4 py-8">
				<article class="w-12/12 lg:w-8/12">
					<div class="py-2 border-b-4">
						<h2 class="font-bold text-2xl tracking-widest uppercase">Artikel</h2>
					</div>

					<!-- articles example -->
					<div class="py-5 flex flex-col space-y-8">
						@include('components.article-list')
					</div>
					<!-- end of articles example -->

					<!-- pagination example -->
					<!-- end of pagination example -->

					<!-- suggest box -->
					<section class="block md:hidden bg-accent2 p-5">
						<div class="py-2 border-b-4 border-accent3">
							<h2 class="font-bold text-2xl tracking-widest uppercase">Suggestion box</h2>
						</div>

						<form class="py-3 flex flex-col gap-4">
							<div class="space-y-2">
								<label for="name" class="block text-lg">Name</label>
								<input type="text" id="name" class="w-full p-2" placeholder="John Doe" />
							</div>
							<div class="space-y-2">
								<label for="email" class="block text-lg">Email</label>
								<input type="email" id="email" class="w-full p-2" placeholder="johndoe@example.com" />
							</div>
							<div class="space-y-2">
								<label for="message" class="block text-lg">Message</label>
								<textarea id="message" class="w-full p-2 resize-none h-32"></textarea>
							</div>
							<button
								class="py-3 bg-accent3 text-gray-100 hover:bg-accent2 hover:text-accent3 font-semibold text-lg">Send</button>
						</form>
					</section>
					<!-- end of suggest box -->
				</article>

				<aside class="hidden w-12/12 lg:w-1/3 md:flex flex-col space-y-8">
					<!-- latest video on youtube -->
					<section>
						<div class="py-2">
							<h2 class="font-bold text-2xl tracking-widest uppercase">Latest video on youtube</h2>
						</div>

						<div class="w-full flex justify-center items-center">
							@foreach ($latest_video as $vid)
								<iframe src="{{ $vid->url }}" title="{{ $vid->title }}" frameborder="0"
									allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
									class="w-full aspect-video"></iframe>
							@endforeach
						</div>
					</section>
					<!-- end of latest video on youtube -->

					<!-- recent post -->
					<section>
						<div class="py-2 border-b-4">
							<h2 class="font-bold text-2xl tracking-widest uppercase">Recent Post</h2>
						</div>

						<div class="py-3 flex flex-row lg:flex-col gap-3">
							@foreach ($latest_articles as $latest_article)
								<a href="{{ route('article.show', $latest_article) }}">
									<div class="lg:border-l-2 w-full lg:max-w-full lg:flex items-center gap-3">
										<div class="flex-shrink-0 w-24 h-24">
											<img src="https://ent.pens.ac.id{{ Storage::url($latest_article->thumbnail->url) }}"
												alt="{{ $latest_article->title }}" class="w-full h-full object-cover" />
										</div>
										<h1 class="text-gray-900 text-sm mb-2 line-clamp-3">
											{{ $latest_article->title }}
										</h1>
									</div>
								</a>
							@endforeach
						</div>
					</section>
					<!-- end of recent post -->

					<!-- suggest box -->
					<section class="bg-accent2 p-5">
						<div class="py-2 border-b-4 border-accent3">
							<h2 class="font-bold text-2xl tracking-widest uppercase">Suggestion box</h2>
						</div>

						<form class="py-3 flex flex-col gap-4" method="POST" action="{{ route('suggestbox.store') }}">
							<div class="space-y-2">
								<label for="name" class="block text-lg">Name</label>
								<input name="name" type="text" id="name" class="w-full p-2" placeholder="John Doe" />
								@csrf
							</div>
							<div class="space-y-2">
								<label for="email" class="block text-lg">Email</label>
								<input name="email" type="email" id="email" class="w-full p-2" placeholder="johndoe@example.com" />
							</div>
							<div class="space-y-2">
								<label for="message" class="block text-lg">Message</label>
								<textarea name="message" id="message" class="w-full p-2 resize-none h-32"></textarea>
							</div>
							<button type="submit"
								class="py-3 bg-accent3 text-gray-100 hover:bg-accent2 hover:text-accent3 font-semibold text-lg">Send</button>
						</form>
					</section>
					<!-- end of suggest box -->
				</aside>
			</div>
		</main>


		<script>
		 const swiper = new Swiper(".swiper", {
		  // Optional parameters
		  direction: "horizontal",
		  loop: true,

		  // If we need pagination
		  pagination: {
		   el: ".swiper-pagination",
		  },

		  // Navigation arrows
		  navigation: {
		   nextEl: ".swiper-button-next",
		   prevEl: ".swiper-button-prev",
		  },

		  // And if we need scrollbar
		  scrollbar: {
		   el: ".swiper-scrollbar",
		  },
		 });
		</script>
	</x-app-layout>
@endsection
