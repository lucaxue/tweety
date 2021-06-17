<x-master>

  <div class="grid place-items-center">
    <form action="{{ route('login') }}" method="POST" class="grid gap-8 lg:w-1/3 w-9/10 pt-4">
      @csrf

      <span class="text-6xl">🐦</span>

      <h1 class="text-4xl font-bold">Log in to Tweety</h1>

      <div class="flex flex-col">
        <input name="email" placeholder="Email"
          class="border border-gray-200 rounded py-4 px-2 focus:ring-2 focus:ring-blue-400 focus:outline-none">
        @error('email')
        <p class="text-sm text-red-400">{{ $message }}</p>
        @enderror
      </div>

      <div class="flex flex-col">
        <input name="password" type="password" placeholder="Password"
          class="border border-gray-200 rounded py-4 px-2 focus:outline-none focus:ring-2 focus-ring-blue-400">
        @error('password')
        <p class="text-sm text-red-400">{{ $message }}</p>
        @enderror
      </div>

      <button type="submit"
        class="rounded-full text-center bg-blue-400 hover:bg-blue-500 shadow text-white font-bold text-lg py-3 px-4">
        Log in
      </button>

      <div class="flex justify-center gap-2">
        <a href="{{ route('password.request') }}" class="text-blue-400 hover:underline font-semibold">Forgot
          password?</a>
        <span>·</span>
        <a href="{{ route('register') }}" class="text-blue-400 hover:underline font-semibold">
          Register for Tweety
        </a>
      </div>

    </form>
  </div>

</x-master>