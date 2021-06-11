<x-guest-layout>
    <x-auth-card>
  
<h3>Forgot your password?</h3>
        <div>
            <span class="d-block cate pt-10" style="color: white;
    text-align: center;">{{ __('No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}</span>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <br>
        <form method="POST" class="account-form" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div class="form-group">
                <input id="email" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="form-group">
                <button class="d-block lab-btn">
                    {{ __('Email Password Reset Link') }}
                </button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
