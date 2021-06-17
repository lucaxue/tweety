<x-master>

  <div class="container grid place-items-center">
    <div class="flex flex-row justify-content-center">
      <div class="col-md-8">
        <div class="card rounded shadow-md p-10 gap-4 grid">
          <div class="card-header text-3xl font-bold">{{ __('Register') }}</div>

          <div class="card-body">
            <form method="POST" action="{{ route('register') }}" class="grid gap-4">
              @csrf

              <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                <div class="col-md-6">
                  <input id="name" type="text"
                    class="border border-blue-100 focus:ring-2 focus:ring-blue-100 focus:outline-none rounded shadow-sm @error('name') is-invalid @enderror"
                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                  @error('name')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                <div class="col-md-6">
                  <input id="username" type="text"
                    class="border border-blue-100 focus:ring-2 focus:ring-blue-100 focus:outline-none rounded shadow-sm @error('username') is-invalid @enderror"
                    name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                  @error('username')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                  <input id="email" type="email"
                    class="border border-blue-100 focus:ring-2 focus:ring-blue-100 focus:outline-none rounded shadow-sm @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email">

                  @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                <div class="col-md-6">
                  <input id="password" type="password"
                    class="border border-blue-100 focus:ring-2 focus:ring-blue-100 focus:outline-none rounded shadow-sm @error('password') is-invalid @enderror"
                    name="password" required autocomplete="new-password">

                  @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="password-confirm"
                  class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                <div class="col-md-6">
                  <input id="password-confirm" type="password"
                    class="border border-blue-100 focus:ring-2 focus:ring-blue-100 focus:outline-none rounded shadow-sm"
                    name="password_confirmation" required autocomplete="new-password">
                </div>
              </div>

              <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="bg-blue-400 hover:bg-blue-500 font-bold text-white py-2 px-4 rounded">
                    {{ __('Register') }}
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</x-master>