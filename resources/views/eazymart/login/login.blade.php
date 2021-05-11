<div class="login-popup">
    <div class="form-box">
        <div class="tab tab-nav-simple tab-nav-boxed form-tab">
            <ul class="nav nav-tabs nav-fill align-items-center border-no justify-content-center mb-5" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active border-no lh-1 ls-normal" href="#signin">Login</a>
                </li>
                <li class="delimiter">or</li>
                <li class="nav-item">
                    <a class="nav-link border-no lh-1 ls-normal" href="#register">Register</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="signin">
                <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Email Address" value="{{ old('email') }}" required autofocus>
                            @error('email')
                            <span class="red-text" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                       
                                            </div>
                        
                        <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password" value="{{ old('password') }}" required>
                            @error('password')
                            <span class="red-text" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                           
                        </div>
                        <input type="submit" value="Sign In" class="btn btn-dark btn-block btn-rounded">
                    </form>


                    <div class="form-choice text-center">
                        <label class="ls-m">or Login With</label>
                        <div class="social-links">
                            <a href="{{ url('auth/google') }}" class="social-link social-google fab fa-google border-no"></a>
                            <a href="{{ url('auth/facebook') }}" class="social-link social-facebook fab fa-facebook-f border-no"></a>
                        </div>
                    </div>

                </div>

                <div class="tab-pane" id="register">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group mb-3">
                        <input type="text" placeholder="Name" name="name" class="form-control" required="">
                        </div>

                        <div class="form-group mb-3">
                        <input type="email" class="form-control"
                            name="email" placeholder="Your Email Address *"
                                required />

                        <div class="form-group">
                            <input type="password" class="form-control" id="password1"
                            name="password" placeholder="Password "
                                required />
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" id="password2"
                            name="password_confirmation" id="password2" placeholder="Re-enter Password " 
                                required />
                        </div>
                        
                        <button class="btn btn-primary btn-block btn-rounded" type="submit" value="Sign Up">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>