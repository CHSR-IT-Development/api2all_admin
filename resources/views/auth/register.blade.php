<x-guest-layout>
    <x-validation-errors class="mb-4" />
    <div class="container py-5 my-5 register-form">
        <div class="guest-page-title mb-5 text-center">Register</div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="row">
                <div class="row col-sm-12 col-md-6 mx-auto">
                    <div class="col-sm-12 col-md-6 mb-4">
                        <x-label for="name" value="{{ __('Name') }}" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    </div>
                    <div class="col-sm-12 col-md-6 mb-4">
                        <x-label for="email" value="{{ __('Email') }}" />
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    </div>
                    <div class="col-sm-12 col-md-6 mb-4">
                        <x-label for="password" value="{{ __('Password') }}" />
                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                    </div>
                    <div class="col-sm-12 col-md-6 mb-4">
                        <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                        <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>
                    <div class="col-sm-12 col-md-12 mb-4">
                        <label for="exampleFormControlInput1" class="form-label ">VerifyCode </label>
                        <input type="text" class="form-control rounded rounded-2" id="exampleFormControlInput1" placeholder="VerifyCode">
                    </div>
                    <div class="col-sm-12 col-md-12 mb-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-12 text-center mb-4">
                        <x-button class="ml-4">
                            {{ __('Register') }}
                        </x-button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-guest-layout>
