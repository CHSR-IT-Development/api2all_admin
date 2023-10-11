<x-guest-layout>
    <div class="container py-5 my-5 register-form">
        <div class="guest-page-title mb-5 text-center">Forgot Password</div>
        <div class="mb-4 text-sm text-gray-600 text-center">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="row">
                <div class="row col-sm-12 col-md-6 mx-auto">
                    <div class="col-sm-12 col-md-12 mb-4">
                        <x-label for="email" value="{{ __('Email') }}" />
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    </div>
                    <div class="col-sm-12 col-md-12 text-center mb-4">
                        <x-button>
                            {{ __('Email Password Reset Link') }}
                        </x-button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-guest-layout>
