<x-guest-layout>
    @if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
    @endif
    <x-validation-errors class="mb-4" />
    <div class="container py-5 my-5 register-form">
        <div class="guest-page-title mb-5 text-center">Login</div>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="row">
            <div class="row col-sm-12 col-md-6 mx-auto">
                <div class="col-sm-12 col-md-12 mb-4">
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                </div>
                <div class="col-sm-12 col-md-12 mb-4">
                    <x-label for="password" value="{{ __('Password') }}" />
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                </div>
                <div class="col-sm-12 col-md-12 mb-4">
                    <label for="remember_me" class="flex items-center">
                        <x-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>
                <div class="col-sm-12 col-md-12 mb-4">
                    @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                    @endif

                </div>
                <div class="col-sm-12 col-md-12 text-center mb-4">
                    <x-button class="ml-4">
                        {{ __('Log in') }}
                    </x-button>
                </div>            
            </div>
            </div>
        </form>
    </div>
</x-guest-layout>
