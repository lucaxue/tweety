<div class="flex py-4 px-5 {{ $loop->last ? '' : 'border-b border-gray-200' }} hover:bg-gray-50">
	<a href="{{ $tweet->user->path() }}">
		<img src="{{ $tweet->user->avatar }}" alt="avatar" class="rounded-full mr-3 mt-0.5" height="50" width="50">
	</a>

	<div class="grid">
		<div class="flex gap-2">
			<a href="{{ $tweet->user->path() }}" class="hover:underline font-bold mb-1">
				{{ $tweet->user->name }}
			</a>
			<p class="text-gray-500">{{ '@' . $tweet->user->username }}</p>
			<p class="text-gray-500">{{ '· ' . date('d M', strtotime($tweet->created_at)) }}</p>
		</div>

		<p class="text-sm">
			{{ $tweet->body }}
		</p>

		<x-like-buttons :tweet="$tweet" />
		
	</div>
</div>