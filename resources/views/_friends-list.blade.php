<div class="bg-blue-50 p-4 rounded-2xl">
	<h3 class="font-bold text-xl mb-4">Following</h3>
	<ul>
		@forelse (auth()->user()->follows as $user)
		<li class="{{ $loop->last ? '' : 'mb-4' }}">
			<a class="flex items-center text-sm" href="{{ $user->path() }}">
				<img src="{{ $user->avatar }}" alt="avatar" class="rounded-full mr-4" width="40" height="40">
				{{ $user->name }}
			</a>
		</li>
		@empty
		<li class="text-sm text-gray-400">😔 It's so empty...</li>
		@endforelse
	</ul>
</div>