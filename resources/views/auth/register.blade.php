<x-guest-layout>
    <x-auth-card>
    
    <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <h3 class="title">Register Now</h3>

      <form method="POST" class="account-form" action="{{ route('register') }}">
            @csrf
            <!-- Name -->
            <div class="form-group">
                <input id="name" type="text" placeholder="User Name" name="name" value="{{ old('name') }}" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="form-group">
                <input id="email" type="text" placeholder="Email" name="email" value="{{ old('email') }}" required />
            </div>

            <!-- Password -->
            <div class="form-group">
                        <input id="password" type="password" placeholder="Password" name="password" required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="form-group">
                        <input id="password_confirmation" type="password" placeholder="Confirm Password" name="password_confirmation" required />
                    </div>

            <!-- <div class="account-bottom"> -->
                <!-- <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a> -->
                <div class="form-group">
                        <button class="d-block lab-btn"><span>Get Started Now</span></button>
                    </div>
        </form>
        <div class="account-bottom">
                    <span class="d-block cate pt-10" style="color:white">Are you a member? <a href="{{ route('login') }}">Login</a></span>
                    <span class="or"><span>or</span></span>
                    <h5 class="subtitle">Register With Social Media</h5>
                    <ul class="social-media social-color justify-content-center d-flex lab-ul">
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
