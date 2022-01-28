@foreach ($articles as $article)
	<a href="{{ route('article.show', $article) }}">
		<div class="w-full lg:max-w-full lg:flex items-center sm:items-center">
			<div class="flex-shrink-0 w-full md:w-48 aspect-video md:aspect-square">
				<img src="https://ent.pens.ac.id{{ Storage::url($article->thumbnail->url) }}" alt="{{ $article->title }}"
					class="w-full h-full object-cover object-fit" />
			</div>
			<div class="px-0 py-4 md:p-4 flex flex-col justify-between leading-normal">
				<div class="mb-8">
					<div class="text-gray-900 font-bold text-xl mb-2">{{ $article->title }}</div>
					<p class="text-gray-700 hidden line-clamp-3 md:line-clamp-4 text-sm md:text-base">
						{{ $article->description }}
					</p>
				</div>
				<div class="flex items-center">
					<div class="text-sm">
						<span class="text-gray-900 font-semibold leading-none">{{ $article->category->name }}</span>
						<span class="mx-2 text-gray-600"> {{ $article->created_at->format('d M Y') }}</span>
					</div>
				</div>
			</div>
		</div>
	</a>
@endforeach
