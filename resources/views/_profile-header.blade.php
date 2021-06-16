<header class="flex flex-col mb-8 gap-4">

	<img src="https://picsum.photos/450/150" alt="banner" class="rounded-2xl">

	<div class="relative grid">
		<img src="{{ $user->avatar }}" alt="{{ $user->name }}"
			class="absolute -top-1/2 left-1/2 transform -translate-x-1/2 h-32 rounded-full">

		<div class="flex justify-between">
			<h1 class="text-3xl font-bold w-1/3">{{ $user->name }}</h1>

			<div class="flex gap-2">
				<button
					class="rounded-full border border-gray-200 hover:bg-gray-100 shadow font-bold text-sm py-2 px-4">Edit
					Profile
				</button>
				<button
					class="rounded-full bg-blue-400 hover:bg-blue-500 shadow text-white font-bold text-sm py-2 px-4">
					Follow Me
				</button>
			</div>
		</div>

		<p class="mb-4 mb-10">Joined on {{ date("M d", strtotime($user->created_at)) }}</p>

		<div>
			<p class="text-center text-sm">
				Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam recusandae veniam, praesentium
				molestiae nihil modi, officiis doloremque ex assumenda quo magnam repellendus repudiandae facilis quas
				totam voluptate? Commodi, praesentium cum!
			</p>
		</div>
	</div>

</header>