@extends('Job.layout.master')
@section('content')

		<!-- login section start -->
		<section class="login-wrapper">
			<div class="container">
				<div class="col-md-6 col-sm-8 col-md-offset-3 col-sm-offset-2">
                    <form method="POST" action="{{ route('jobcompany.store')}}">
                        @csrf
						<img class="img-responsive" alt="logo" src="job/img/logo.png">
                        <input type="text" class="form-control input-lg" name="name" placeholder="Company Name" required>
                        @error('name')
                        <span class="red-text" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <input type="text" class="form-control input-lg" name="description" placeholder="Company Description" required>
                        @error('description')
                        <span class="red-text" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <input type="file" class="form-control input-lg" name="logo" placeholder="Company Logo" required>
                        @error('logo')
                        <span class="red-text" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <input type="text" class="form-control input-lg" name="address" placeholder="Company Address" required>
                        @error('address')
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
                        <input id="password-confirm" type="password" class="form-control input-lg" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">



                        <input type="text" class="form-control" name="user_role" style="display: none">
{{--						<label><a href="">Forget Password?</a></label>--}}
						<button type="submit" class="btn btn-primary">Sign Up</button>
{{--						<p>Have't Any Account <a href="{{route('job.register')}}">Create An Account</a></p>--}}
{{--                        <p>Want to post a job? <a href="{{route('job_company.create')}}">Sign Up</a></p>--}}
					</form>
				</div>
			</div>
		</section>
		<!-- login section End -->
    @endsection

