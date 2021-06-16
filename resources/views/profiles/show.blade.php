<x-app>
	@include('_profile-header')
	@include('_timeline',[
	'tweets' => $user->tweets
	])
</x-app>