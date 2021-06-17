<div class="border border-gray-200 rounded-2xl">
	@forelse ($tweets as $tweet)
	@include('_tweet')
	@empty
	<p class="p-5 text-center text-gray-500">It's so quiet... 🥱</p>
	@endforelse
</div>