@extends('Job.layout.master')
@section('content')

    <!-- login section start -->
    <section class="login-wrapper">
        <div class="container">
            <div class="col-md-6 col-sm-8 col-md-offset-3 col-sm-offset-2">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <img class="img-responsive" alt="logo" src="job/img/logo.png">
                    <input type="text" class="form-control input-lg" name="name" placeholder="User Name" required>
                    @error('name')
                    <span class="red-text" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                    <input type="email" class="form-control input-lg" name="email" placeholder="Email" required>
                    @error('email')
                    <span class="red-text" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                    <input type="password" class="form-control input-lg" name="password" placeholder="Password" required>
                    @error('password')
                    <span class="red-text" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                    <input id="password-confirm" type="password" class="form-control input-lg" name="password_confirmation" required autocomplete="new-password">

{{--                    <label><a href="">Forget Password?</a></label>--}}
                    <button type="submit" class="btn btn-primary">Register</button>
{{--                    <p>Have't Any Account <a href="">Create An Account</a></p>--}}
                </form>
            </div>
        </div>
    </section>
    <!-- login section End -->
@endsection

