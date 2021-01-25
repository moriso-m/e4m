@extends('base')	

@section('content')
		
<section id=""><!--form-->
	<div class="container">
		<div class="row">
				@if ($errors->any())
					<div class="alert alert-danger col-sm-4 col-sm-offset-4">
						<ul>
							@foreach ($errors->all() as $error)
								<li> {{ $error }} </li>
							@endforeach
						</ul>
					</div>
				@endif
			
				@if (session('error'))
					<div class="alert alert-danger col-sm-4 col-sm-offset-4">
						<p><i class="fa fa-exclamation-triangle fa-2x"></i> {{ session('error') }}</p>
					</div>
				@endif
				@if (session('success'))
					<div class="alert alert-success">
						<p>{{ session('success') }}</p>
					</div>
				@endif
			<div class="col-sm-4 col-sm-offset-1">
				<div class="login-form"><!--login form-->
					<h2>Login to your account</h2>
					<form action="{{ route('login') }}" method="POST">
						@csrf
						<input type="email" name="email" placeholder="email" required />
						<input type="password" name="password" placeholder="Email Address" required />
						<span>
							<input type="checkbox" class="checkbox"> 
							Keep me signed in
						</span>
						<button type="submit" class="btn btn-default">Login</button>
					</form>
				</div><!--/login form-->
			</div>
			<div class="col-sm-1">
				<h2 class="or">OR</h2>
			</div>
			<div class="col-sm-4">
				<div class="signup-form"><!--sign up form-->
					<h2>New User Signup!</h2>
					<form action="{{ route('register') }}" method="POST">
						@csrf
						<input type="hidden" name="user_type"/>
						<input type="text" placeholder="Name"/>
						<input type="email" name="email" placeholder="Email Address"/>
						<input type="password" name="password" placeholder="Password"/>
						<input type="password" name="password_confirmation"  placeholder="Confirm Password"/>
						<button type="submit" class="btn btn-default">Signup</button>
					</form>
				</div><!--/sign up form-->
			</div>
		</div>
	</div>
</section><!--/form-->


@endsection

  
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>