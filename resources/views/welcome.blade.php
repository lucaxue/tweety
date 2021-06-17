<x-master>
    <div class="min-h-screen flex lg:flex-row flex-col relative">
        <div class="grid place-items-center lg:w-1/2 py-12 bg-blue-400">
            <span class="text-9xl">🐦</span>
        </div>
        <div class="grid place-items-center py-12 lg:w-1/2">
            @auth
            <a href="{{ route('home') }}"
                class="rounded-full text-center bg-blue-400 hover:bg-blue-500 shadow text-white font-bold text-lg py-3 px-4 w-1/3">Home</a>
            @else
            <div class="grid gap-8">
                <h1 class="text-7xl font-extrabold">It's Occuring.</h1>
                <div class="grid w-2/3 gap-4">
                    <h1 class="text-4xl font-bold">Join Tweety Now.</h1>
                    <a href="{{ route('register') }}"
                        class="rounded-full text-center bg-blue-400 hover:bg-blue-500 shadow text-white font-bold text-lg py-3 px-4">
                        Register
                    </a>
                    <a href="{{ route('login') }}"
                        class="rounded-full text-center border border-blue-400 hover:bg-blue-100 shadow text-blue-400 font-bold text-lg py-3 px-4 ">
                        Log in
                    </a>
                </div>
            </div>
            @endauth
        </div>
    </div>
    <footer class="absolute bottom-0 w-full h-14 bg-white text-gray-500 grid place-items-center">
        © 2021 Tweety
    </footer>
</x-master>