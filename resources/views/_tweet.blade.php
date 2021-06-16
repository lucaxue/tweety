<div class="flex p-5 border-b border-gray-200">
	<a href="{{ route('profile', $tweet->user) }}">
		<img src="{{ $tweet->user->avatar }}" alt="avatar" class="rounded-full mr-3" height="50" width="50">
	</a>

	<div class="grid">
		<a href="{{ route('profile', $tweet->user) }}">
			<h5 class="font-bold mb-1">{{ $tweet->user->name }}</h5>
		</a>
		<p class="text-sm">
			{{ $tweet->body }}
		</p>
		<div class="flex gap-2 mt-3">
			<button class="bg-blue-100 rounded-xl px-2 py-0.5 text-blue-400 font-bold">👍 12</button>
			<button class="bg-red-100 rounded-xl px-2 py-0.5 text-red-400 font-bold">👎 8</button>
		</div>
	</div>
</div>