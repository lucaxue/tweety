<x-app>
	<form action="{{ $user->path() }}" method="POST" class="grid gap-4 lg:mx-24" enctype="multipart/form-data">
		@csrf
		@method('PATCH')

		<h1 class="text-4xl font-bold">Edit Profile</h1>

		<div class="grid gap-1">
			<label for="name" class="font-bold text-sm uppercase">Name</label>
			<input required name="name" value="{{ $user->name }}"
				class="border border-gray-200 rounded py-4 px-2 focus:ring-2 focus:ring-blue-400 focus:outline-none">
			@error('name')
			<p class="text-sm text-red-400">{{ $message }}</p>
			@enderror
		</div>

		<div class="grid gap-1">
			<label for="username" class="font-bold text-sm uppercase">Username</label>
			<input required name="username" value="{{ $user->username }}"
				class="border border-gray-200 rounded py-4 px-2 focus:ring-2 focus:ring-blue-400 focus:outline-none">
			@error('username')
			<p class="text-sm text-red-400">{{ $message }}</p>
			@enderror
		</div>

		<div class="grid gap-1">
			<label for="avatar" class="font-bold text-sm uppercase">Avatar</label>
			<div class="flex gap-2">
				<img src="{{ $user->avatar }}" alt="{{ $user->name }}" width="50" height="50"
					class="rounded-full shadow-sm">
				<input name="avatar" type="file"
					class="border w-full px-2 py-1 border-blue-50 rounded shadow-sm focus:ring-2 focus:ring-blue-100 focus:outline-none">
			</div>
			@error('avatar')
			<p class="text-sm text-red-400">{{ $message }}</p>
			@enderror
		</div>

		<div class="grid gap-1">
			<label for="bio" class="font-bold text-sm uppercase">Bio</label>
			<textarea required name="bio"
				class="border border-gray-200 rounded py-4 px-2 focus:ring-2 focus:ring-blue-400 focus:outline-none">
			{{ $user->bio }}
			</textarea>
			@error('bio')
			<p class="text-sm text-red-400">{{ $message }}</p>
			@enderror
		</div>

		<div class="grid gap-1">
			<label for="email" class="font-bold text-sm uppercase">Email</label>
			<input required name="email" value="{{ $user->email }}" type="email"
				class="border border-gray-200 rounded py-4 px-2 focus:ring-2 focus:ring-blue-400 focus:outline-none">
			@error('email')
			<p class="text-sm text-red-400">{{ $message }}</p>
			@enderror
		</div>

		<div class="grid gap-1">
			<input required name="password" type="password" placeholder="Password"
				class="border border-gray-200 rounded py-4 px-2 focus:ring-2 focus:ring-blue-400 focus:outline-none">
			@error('password')
			<p class="text-sm text-red-400">{{ $message }}</p>
			@enderror
		</div>

		<div class="grid gap-1">
			<input required name="password_confirmation" type="password" placeholder="Confirm password"
				class="border border-gray-200 rounded py-4 px-2 focus:ring-2 focus:ring-blue-400 focus:outline-none">
			@error('password_confirmation')
			<p class="text-sm text-red-400">{{ $message }}</p>
			@enderror
		</div>

		<div class="flex gap-2 justify-end">
			<a href="{{ $user->path() }}"
				class="rounded-full text-center border border-blue-400 hover:bg-blue-100 shadow text-blue-400 font-bold text-sm py-3 px-4 w-1/4">
				Cancel
			</a>
			<button type="submit"
				class="rounded-full text-center bg-blue-400 hover:bg-blue-500 shadow text-white font-bold text-sm py-3 px-4 w-1/4">
				Edit
			</button>
		</div>
	</form>
</x-app>