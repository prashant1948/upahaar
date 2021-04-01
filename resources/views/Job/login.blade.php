@extends('Job.layout.master')
@section('content')

		<!-- login section start -->
		<section class="login-wrapper">
			<div class="container">
				<div class="col-md-6 col-sm-8 col-md-offset-3 col-sm-offset-2">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
						<img class="img-responsive" alt="logo" src="job/img/logo.png">
						<input type="email" class="form-control input-lg" name="email" placeholder="Email">
                        @error('email')
                        <span class="red-text" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
						<input type="password" class="form-control input-lg" name="password" placeholder="Password">
                        @error('password')
                        <span class="red-text" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
{{--						<label><a href="">Forget Password?</a></label>--}}
						<button type="submit" class="btn btn-primary">Login</button>
						<p>Have't Any Account <a href="{{route('job.register')}}">Create An Account</a></p>
                        <p>Want to post a job? <a href="{{route('job_company.create')}}">Sign Up</a></p>
					</form>
				</div>
			</div>
		</section>
		<!-- login section End -->
    @endsection

