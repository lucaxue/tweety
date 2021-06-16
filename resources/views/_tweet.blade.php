<div class="flex p-5 border-b border-gray-200">
	<img src="{{ $tweet->user->avatar }}" alt="avatar" class="rounded-full max-h-12 mr-3">

	<div class="grid">
		<h5 class="font-bold mb-1">{{ $tweet->user->name }}</h5>
		<p class="text-sm">
			{{ $tweet->body }}
		</p>
		<div class="flex gap-2 mt-3">
			<button class="bg-blue-100 rounded-xl px-2 py-0.5 text-blue-400 font-bold">👍 12</button>
			<button class="bg-red-100 rounded-xl px-2 py-0.5 text-red-400 font-bold">👎 8</button>
		</div>
	</div>
</div>