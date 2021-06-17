@can('update', $user)
<div>
	<a href="{{ $user->path('/edit') }}"
		class="rounded-full border border-gray-200 hover:bg-gray-100 shadow font-bold text-sm py-2 px-4">
		Edit Profile
	</a>
</div>
@endcan