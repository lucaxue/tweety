<div class="flex py-4 px-5 {{ $loop->last ? '' : 'border-b border-gray-200' }} hover:bg-gray-50 relative">
	<div class="absolute top-5 right-5">
		<x-follow-button :user="$user" />
	</div>

	<a href="{{ $user->path() }}">
		<img src="{{ $user->avatar }}" alt="avatar" class="rounded-full mr-3" height="50" width="50">
	</a>

	<div class="grid">
		<a href="{{ $user->path() }}" class="hover:underline">
			<h5 class="font-bold">{{ $user->name }}</h5>
		</a>
		<p class="text-gray-500 -mt-1 mb-1">{{ '@' . $user->username }}</p>
		<p class="text">
			{{ $user->bio }}
		</p>
	</div>
</div>