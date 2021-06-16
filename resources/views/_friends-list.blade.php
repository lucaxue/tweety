<h3 class="font-bold text-xl mb-4">Friends</h3>
<ul>
	@foreach (range(1,8) as $index)
	<li class="mb-4">
		<div class="flex items-center text-sm">
			<img src="https://randomuser.me/api/portraits/men/{{ $index }}.jpg" alt="avatar"
				class="max-h-10 rounded-full mr-4">
			John Doe
		</div>
	</li>
	@endforeach
</ul>