<x-master>

  <div class="grid place-items-center">
    <form action="{{ route('register') }}" method="POST" class="grid gap-4 lg:w-1/3 w-9/10 pt-4">
      @csrf

      <span class="text-6xl">🐦</span>

      <h1 class="text-4xl font-bold">Create your account</h1>

      <div class="flex flex-col">
        <input name="name" placeholder="Name"
          class="border border-gray-200 rounded py-4 px-2 focus:ring-2 focus:ring-blue-400 focus:outline-none">
        @error('name')
        <p class="text-sm text-red-400">{{ $message }}</p>
        @enderror
      </div>

      <div class="flex flex-col">
        <input name="username" placeholder="Username"
          class="border border-gray-200 rounded py-4 px-2 focus:outline-none focus:ring-2 focus-ring-blue-400">
        @error('username')
        <p class="text-sm text-red-400">{{ $message }}</p>
        @enderror
      </div>

      <div class="flex flex-col">
        <input name="email" type="email" placeholder="Email"
          class="border border-gray-200 rounded py-4 px-2 focus:outline-none focus:ring-2 focus-ring-blue-400">
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

      <div class="flex flex-col">
        <input name="password_confirmation" type="password" placeholder="Confirm Password"
          class="border border-gray-200 rounded py-4 px-2 focus:outline-none focus:ring-2 focus-ring-blue-400">
        @error('password_confirmation')
        <p class="text-sm text-red-400">{{ $message }}</p>
        @enderror
      </div>

      <button type="submit"
        class="rounded-full text-center bg-blue-400 hover:bg-blue-500 shadow text-white font-bold text-lg py-3 px-4">
        Register
      </button>

    </form>
  </div>

</x-master>