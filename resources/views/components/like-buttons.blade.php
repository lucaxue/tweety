<div class="flex gap-4 mt-2">
	<form method="POST" action="/tweets/{{ $tweet->id }}/like">
		@csrf
		@if ($tweet->isLikedBy(auth()->user()))
		@method('DELETE')
		@endif

		<button type="submit"
			class="{{ $tweet->isLikedBy(auth()->user()) ? 'font-bold text-blue-400' : 'text-gray-500' }} flex items-center gap-2 text-md focus:outline-none hover:bg-blue-100 hover:text-blue-400 px-1 rounded-md">
			👍 <span class="text-sm">{{ $tweet->likes ?? 0 }}</span>
		</button>
	</form>

	<form method="POST" action="/tweets/{{ $tweet->id }}/dislike">
		@csrf
		@if ($tweet->isDislikedBy(auth()->user()))
		@method('DELETE')
		@endif

		<button type="submit"
			class="{{ $tweet->isDislikedBy(auth()->user()) ? 'font-bold text-red-400' : 'text-gray-500' }} flex items-center gap-2 text-md focus:outline-none hover:bg-red-100 hover:text-red-400 px-1 rounded-md">
			👎 <span class="text-sm">{{ $tweet->dislikes ?? 0 }}</span>
		</button>
	</form>
</div>