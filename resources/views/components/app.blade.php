<x-master>

	<section class="px-8 py-4 mb-6">
		<header class="container mx-auto">
			<h1 class="text-3xl font-bold">
				<a href="{{ route('home') }}">
					🐦 Tweety
				</a>
			</h1>
		</header>
	</section>

	<section class="px8">
		<main class="container mx-auto mb-10">
			<div class="lg:flex lg:justify-between">

				<div class="lg:w-32">
					@include('_sidebar-links')
				</div>

				<div class="lg:flex-1 lg:mx-10" style="max-width: 700px">
					{{ $slot }}
				</div>

				<div class="lg:w-1/6 ">
					@include('_friends-list')
				</div>

			</div>
		</main>
	</section>

</x-master>