<div class="border border-blue-300 rounded-2xl px-8 py-4 mb-4">
	<form method="POST" action="{{ route('home') }}">
		@csrf

		<textarea name="body" id="body" columns="30" class="w-full focus:outline-none"
			placeholder="What is up?"></textarea>

		<hr class="my-4">

		<footer class="flex justify-between items-center">
			<img src="{{ auth()->user()->avatar }}" alt="avatar" class="rounded-full max-h-8">
			<button type="submit"
				class="rounded-full bg-blue-400 hover:bg-blue-500 shadow text-white font-bold text-sm py-2 px-4">
				Tweet
			</button>
		</footer>
	</form>

	@error('body')
	<p class="text-red-400 text-sm mt-2">{{ $message }}</p>
	@enderror
</div>