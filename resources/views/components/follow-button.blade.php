@if (auth()->user()->isNot($user))
<form method="POST" action="{{ route('follow', $user) }}">
	@csrf

	@if (auth()->user()->following($user))
	<button type="submit"
		class="rounded-full border border-blue-400 hover:bg-blue-100 shadow text-blue-400 font-bold text-sm py-2 px-4">
		Unfollow
	</button>
	@else
	<button type="submit"
		class="rounded-full bg-blue-400 hover:bg-blue-500 shadow text-white font-bold text-sm py-2 px-4">
		Follow
	</button>
	@endif

</form>
@endif