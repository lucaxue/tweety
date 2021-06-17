<div class="border focus-within:ring-blue-200 focus-within:ring-2 border-blue-300 rounded-2xl px-8 py-4 mb-4">
	<form method="POST" action="{{ route('home') }}">
		@csrf

		<textarea required name="body" id="body" columns="30" class="w-full focus:outline-none"
			placeholder="🗣 What is up?"></textarea>

		<hr class="my-4">

		<footer class="flex justify-between items-center">
			<a href="{{ auth()->user()->path() }}">
				<img src="{{ auth()->user()->avatar }}" alt="{{ auth()->user()->name }}" class="rounded-full max-h-8">
			</a>
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