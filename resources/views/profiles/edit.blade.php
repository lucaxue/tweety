<x-app>
	<form action="{{ $user->path() }}" method="POST" class="grid gap-4 lg:mx-24" enctype="multipart/form-data">
		@csrf
		@method('PATCH')

		<h1 class="text-4xl font-bold">Edit Profile</h1>

		<div class="grid gap-1">
			<label for="name" class="font-bold text-sm uppercase">Name</label>
			<input required name="name" value="{{ $user->name }}"
				class="border px-2 py-1 border-blue-50 rounded shadow-sm focus:ring-2 focus:ring-blue-100 focus:outline-none">
			@error('name')
			<p class="text-sm text-red-400">{{ $message }}</p>
			@enderror
		</div>

		<div class="grid gap-1">
			<label for="username" class="font-bold text-sm uppercase">Username</label>
			<input required name="username" value="{{ $user->username }}"
				class="border px-2 py-1 border-blue-50 rounded shadow-sm focus:ring-2 focus:ring-blue-100 focus:outline-none">
			@error('username')
			<p class="text-sm text-red-400">{{ $message }}</p>
			@enderror
		</div>

		<div class="grid gap-1">
			<label for="avatar" class="font-bold text-sm uppercase">avatar</label>
			<div class="flex gap-2">
				<img src="{{ $user->avatar }}" alt="{{ $user->name }}" width="50" height="50"
					class="rounded-full shadow-sm">
				<input required name="avatar" type="file"
					class="border w-full px-2 py-1 border-blue-50 rounded shadow-sm focus:ring-2 focus:ring-blue-100 focus:outline-none">
			</div>
			@error('avatar')
			<p class="text-sm text-red-400">{{ $message }}</p>
			@enderror
		</div>

		<div class="grid gap-1">
			<label for="email" class="font-bold text-sm uppercase">Email</label>
			<input required name="email" value="{{ $user->email }}" type="email"
				class="border px-2 py-1 border-blue-50 rounded shadow-sm focus:ring-2 focus:ring-blue-100 focus:outline-none">
			@error('email')
			<p class="text-sm text-red-400">{{ $message }}</p>
			@enderror
		</div>

		<div class="grid gap-1">
			<label for="password" class="font-bold text-sm uppercase">Password</label>
			<input required name="password" type="password"
				class="border px-2 py-1 border-blue-50 rounded shadow-sm focus:ring-2 focus:ring-blue-100 focus:outline-none">
			@error('password')
			<p class="text-sm text-red-400">{{ $message }}</p>
			@enderror
		</div>

		<div class="grid gap-1">
			<label for="password_confirmation" class="font-bold text-sm uppercase">Confirm Password</label>
			<input required name="password_confirmation" type="password"
				class="border px-2 py-1 border-blue-50 rounded shadow-sm focus:ring-2 focus:ring-blue-100 focus:outline-none">
			@error('password_confirmation')
			<p class="text-sm text-red-400">{{ $message }}</p>
			@enderror
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