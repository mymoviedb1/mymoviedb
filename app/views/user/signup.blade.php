<!DOCTYPE html>
<html>
<head>
	<title>{{ $title }}</title>
	{{ HTML::style('/css/bootstrap.min.css') }}
	{{ HTML::style('/css/bootstrap-theme.css') }}
</head>
<body>
	
	<div id="nav">
		<div class="navbar navbar-inverse">
			<a href="" class="navbar-brand">MyMovieDB</a>
		</div> <!-- End "navbar" Div -->
	</div> <!-- End "Nav" Div -->

	<h2 style="text-align:center">New User Signup</h2>
	<br><br>

	@if($errors->any())
	<ul>
		{{ implode ('', $errors->all('<li>:message</li>')) }}
	</ul>
	@endif

	<center>
		<div class="well col-md-4 col-md-offset-4">
			<?php echo '<form method="post" action="'.URL::to('signup').'">'; ?>
				<label>First Name:</label><br>
				<input type="text" id="givenname" name="givenname" placeholder="First Name" required>
				<br><br>

				<label>Last Name:</label><br>
				<input type="text" id="surname" name="surname" placeholder="Last Name" required>
				<br><br>

				<label>Username:</label><br>
				<input type="text" id="username" name="username" placeholder="Username" required>
				<br><br>

				<label>E-mail:</label><br>
				<input type="text" id="email" name="email" placeholder="E-mail Address" required>
				<br><br>

				<label>Password:</label><br>
				<input type="password" id="password" name="password" placeholder="Password">
				<br><br>

				<label>Confirm Password:</label><br>
				<input type="password" id="password_confirmation" name="password_confirmation" placeholder="Retype Password">
				<br><br>

				<button class="btn btn-success" type="submit" value="Signup">Signup</button>
			</form>

			<br><br>
			<center> &copy; www.mymoviedb.local {{ date('Y') }}</center>
		</div>
	</center>

	<!-- Javascript Files required for page-->
	<script type="text/javascript" src="{{ asset('/js/bootstrap.min.js') }}"></script>
</body>
</html>