<h3 class="font-bold text-xl mb-4">Following</h3>
<ul>
	@foreach (auth()->user()->follows as $user)
	<li class="mb-4">
		<div class="flex items-center text-sm">
			<img src="{{ $user->avatar }}" alt="avatar" class="max-h-10 rounded-full mr-4">
			{{ $user->name }}
		</div>
	</li>
	@endforeach
</ul>