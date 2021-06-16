<form method="POST" action="{{ route('profile', $user) }}/follow">
	@csrf
	<button type="submit"
		class="rounded-full bg-blue-400 hover:bg-blue-500 shadow text-white font-bold text-sm py-2 px-4">
		{{ auth()->user()->following($user) ? 'Unfollow' : 'Follow' }}
	</button>
</form>