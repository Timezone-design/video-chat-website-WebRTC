<x-guest-layout>
    <x-auth-card>
       
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <h3 class="title">Log In Now</h3>

        <form method="POST" class="account-form" action="{{ route('login') }}">
            @csrf
                <!-- Email Address -->
                <div class="form-group">
                        <input id="email" type="text" placeholder="Email" name="email" required />
                    </div>

                <!-- Password -->
                <div class="form-group">
                            <input id="password" type="password" placeholder="Password" name="password" required />
                </div>
                <!-- Remember Me -->
                <div class="form-group">
                    <div class="d-flex justify-content-between flex-wrap pt-sm-2">
                        <div class="checkgroup">
                                <input type="checkbox" name="remember" id="remember_me">
                                <label for="remember">Remember Me</label>
                        </div>
                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                                @endif
                    </div>
                </div>

                <div class="form-group">
                    <button class="d-block lab-btn"><span>Submit Now</span></button>
                </div>

             <!-- <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif -->

                <!-- <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button> -->
            </form>
            <div class="account-bottom">
                    <span class="d-block cate pt-10" style="color:white;">Don’t Have any Account? <a href="{{ route('register') }}"> Sign
                            Up</a></span>
                    <span class="or"><span>or</span></span>
                    <h5 class="subtitle">Login With Social Media</h5>
                    <ul class="social-media social-color lab-ul d-flex justify-content-center">
                        <li>
                            <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#" class="pinterest"><i class="icofont-pinterest"></i></a>
                        </li>
                    </ul>
                </div>
    </x-auth-card>
</x-guest-layout>
