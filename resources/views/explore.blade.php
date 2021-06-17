<x-app>
	<h1 class="text-4xl font-bold mb-4">Explore</h1>

	<div class="border border-gray-200 rounded-2xl">
		@foreach ($users as $user)
		@include('_profile-card')
		@endforeach
	</div>

	<div class="mt-4">
		{{ $users->links() }}
	</div>
</x-app>