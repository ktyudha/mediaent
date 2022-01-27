@extends('layouts.master')
@section('content')

	<main class="container flex flex-col min-h-screen mt-36 md:mt-40">
		<!-- info, article, and similar post -->
		<div class="pt-7 md:py-7 border-b">
			<!-- content -->
			<div class="mx-auto p-0 md:py-12">
				<!-- article section -->
				<div class="w-full md:flex justify-between items-start gap-16 pb-10 border-b-2">
					<!-- left side content {title, writer} -->
					<div class="w-1/4 hidden md:block sticky top-60 text-right">
						<h2 class="font-semibold text-lg font-serif">
							{{ $article->title }}
						</h2>
						<h2 class="mt-4 text-sm font-serif">
							{{ Carbon\Carbon::parse($article->created_at)->format('d M') }}
						</h2>
						<ul class="mt-10 space-y-3">
							<li>
								<a href="#" class="flex justify-end">
									<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-instagram h-6 text-right"
										viewBox="0 0 16 16">
										<path
											d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
									</svg>
								</a>
							</li>
							<li>
								<a href="#" class="flex justify-end">
									<svg xmlns="http://www.w3.org/2000/svg" class="bi bi-youtube h-6 text-right" viewBox="0 0 16 16">
										<path
											d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
									</svg>
								</a>
							</li>
							<li>
								<a href="#" class="flex justify-end">
									<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-facebook h-6 text-right"
										viewBox="0 0 16 16">
										<path
											d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
									</svg>
								</a>
							</li>
						</ul>
					</div>
					<!-- end of left side -->

					<!-- article section -->
					<section class="w-full md:w-4/6">
						<!-- header -->
						<div class="mb-14 space-y-7">
							<div class="space-y-4">
                                <h1 class="font-bold text-4xl text-accent3">
                                    {{ $article->title }}
								</h1>
                                <img class="w-full h-96 flex justify-center items-center bg-slate-200" src="{{ Storage::url($article->thumbnail->url) }}"/>
								<div class="flex flex-row gap-4 text-sm divide-x-2">
									<h5 class="underline uppercase tracking-wide text-gray-400">{{ $article->category->name }}</h5>
									<span class="px-4">{{ Carbon\Carbon::parse($article->created_at)->format('d M Y') }}</span>
								</div>
							</div>

							<!-- post thumbnail -->
							{{-- <div class="w-full h-96 flex justify-center items-center bg-slate-200">
									<p>Thumbnail</p>
								</div> --}}
							<!-- end of post thumbnail -->
						</div>
						<!-- end of header -->

						<article
							class="max-w-none w-full border-b-2 p-0 pb-20 prose prose-headings:text-accent3 prose-img:max-h-96 prose-h3:text-lg prose-img:mx-auto">
							{!! $article->body !!}
						</article>

						<!-- next and previous post -->
						<div class="w-full grid columns-3 space-x-5 mx-auto my-20 md:mb-0">
							<div class="row-auto">
								@if ($previous)
									<div class="w-1/2 text-left space-y-2 float-left">
										<a href="{{ $previous->slug }}" class="font-semibold hover:text-blue-500">
											<span>Previous Post</span>
											<p class="font-normal">{{ $previous->title }}</p>
										</a>
									</div>
								@endif

								@if ($next)
									<div class="w-1/2 text-right space-y-2 float-right">
										<a href="{{ $next->slug }}" class="font-semibold hover:text-blue-500">
											<span>Next Post</span>
											<p class="font-normal">{{ $next->title }}</p>
										</a>
									</div>
								@endif
							</div>
						</div>
						<!-- end of next and previous post -->
					</section>
					<!-- end of article section -->

					<!-- similar post -->
					<div class="w-1/4 hidden md:block sticky top-60">
						@if ($similar_articles->count() > 0)
							<h2 class="font-semibold text-lg font-serif text-accent3">Similar posts</h2>

							<div class="w-full flex flex-col space-y-2 md:space-y-4 mt-5">
								@foreach ($similar_articles as $similar_article)
									<a href="" class="text-gray-600 hover:text-blue-500 text-sm">{{ $similar_article->title }}</a>
								@endforeach
							</div>
						@endif
					</div>
					<!-- end of similar post -->
				</div>
				<!-- end of article section -->

				<!-- comment section -->
				<div class="mx-auto w-full md:w-3/6 space-y-9 py-10">
					<!-- comments form -->
					<div class="pb-3">
						<h2 class="text-lg font-semibold uppercase tracking-wide">Write comment</h2>

						@if (auth()->user())
							<form class="w-full mt-2" method="POST" action="{{ route('comment.store') }}">
								@csrf
								<input type="text" value="{{ $article->id }}" name="article_id" class="hidden">
								<div class="flex flex-wrap -mx-3 mb-6">
									<div class="w-full md:w-full px-3 mb-2 mt-2">
										<textarea
											class="bg-gray-100 border border-gray-400 leading-normal resize-none w-full h-32 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"
											name="body" placeholder="Type Your Comment" required></textarea>
									</div>
									<div class="w-full md:w-full flex justify-end px-3">
										<button type="submit"
											class="font-medium py-2 px-5 bg-accent3 text-accent tracking-wide hover:bg-accent hover:text-accent3">Post
											comment</button>
									</div>
								</div>
							</form>
						@else
							<div class="flex flex-wrap -mx-3 mb-6">
								<div class="w-full md:w-full px-3 mb-2 mt-2">
									<textarea
										class="bg-gray-100 border border-gray-400 leading-normal resize-none w-full h-32 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"
										name="body" placeholder="Login to write a comment" required disabled></textarea>
								</div>
								<div class="w-full md:w-full flex justify-end px-3">
									<button type="submit" class="font-medium py-2 px-5 bg-accent3 text-accent tracking-wide" disabled>
										Post comment
									</button>
								</div>
							</div>
						@endif
					</div>
					<!-- end of comments form -->
					<!-- comments rows -->
					<div class="pb-4">
						<h2 class="text-xl font-semibold uppercase tracking-wide">Comments</h2>

						<div class="mt-4 space-y-6">
							@forelse ($article->comments as $comment)
								<div class="flex flex-row items-start gap-5">
									<div class="w-16 aspect-square bg-slate-200 rounded-full"></div>
									<div class="w-full space-y-4 pb-5 border-b">
										<div class="flex justify-between">
											<h4 class="font-semibold uppercase tracking-wide">{{ $comment->user->name }}</h4>
											<span class="text-gray-400">{{ $comment->created_at->format('d M Y') }}</span>
										</div>
										<p class="text-sm">
											{{ $comment->body }}
										</p>
									</div>
								</div>
							@empty
								<div class="flex justify-center">
									<h1 class="text-lg text-slate-600">No comment yet</h1>
								</div>
							@endforelse
						</div>
					</div>
					<!-- end of comments rows -->
				</div>
				<!-- end of comment section -->
			</div>
			<!-- end of content -->
		</div>
		<!-- end of info, article, and similar post -->
	</main>
@endsection
