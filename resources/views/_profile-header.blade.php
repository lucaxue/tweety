<header class="flex flex-col mb-8 gap-4">

	<img src="https://picsum.photos/450/150" alt="banner" class="rounded-2xl">

	<div class="relative grid">
		<img src="{{ $user->avatar }}" alt="{{ $user->name }}"
			class="absolute -top-1/2 left-1/2 transform -translate-x-1/2 h-32 rounded-full shadow-md">

		<div class="flex justify-between">
			<h1 class="text-3xl font-bold w-1/3">{{ $user->name }}</h1>

			<div class="flex gap-2">
				<x-edit-profile-button :user="$user" />
				<x-follow-button :user="$user" />
			</div>
		</div>

		<p class="mb-4 mb-10 text-gray-400">{{ '@' . $user->username }}</p>
		{{-- <p class="mb-4 mb-10">Joined on {{ date("M d", strtotime($user->created_at)) }}</p> --}}

		<div>
			<p class="text-center">
				{{ $user->bio }}
			</p>
		</div>

	</div>

</header>