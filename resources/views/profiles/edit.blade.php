<x-app>
	<form action="{{ $user->path() }}" method="POST" class="grid gap-6 lg:mx-24">
		@csrf
		@method('PUT')

		<h1 class="text-4xl font-bold">Edit Profile</h1>

		<div class="grid gap-2">
			<label for="name" class="font-bold">Name:</label>
			<input name="name" value="{{ $user->name }}"
				class="border px-2 py-1 border-blue-50 rounded shadow-sm focus:ring-2 focus:ring-blue-100 focus:outline-none">
		</div>

		<div class="grid gap-2">
			<label for="email" class="font-bold">Email:</label>
			<input name="email" value="{{ $user->email }}" type="email"
				class="border px-2 py-1 border-blue-50 rounded shadow-sm focus:ring-2 focus:ring-blue-100 focus:outline-none">
		</div>

		<div class="flex justify-end gap-2">
			<a href="{{ $user->path() }}"
				class="rounded-full border border-gray-100 hover:bg-gray-100 shadow font-bold text-sm py-2 px-4">
				Cancel
			</a>
			<button type="submit"
				class="rounded-full bg-blue-400 hover:bg-blue-500 shadow text-white font-bold text-sm py-2 px-4">
				Edit
			</button>
		</div>
	</form>
</x-app>