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

	<h2 style="text-align:center">Reset User Password</h2>
	<br><br>

	@if(Session::has('message'))
		<center>{{ Session::get('message') }}</center>
		<br>
	@endif

	@if($errors->any())
	<ul>
		{{ implode ('', $errors->all('<li>:message</li>')) }}
	</ul>
	@endif

	<center>
		<div class="well col-md-4 col-md-offset-4">
			<?php echo '<form method="post" action="' .URL::to('forgotpassword'). '">'; ?>
				

				<label>Please type in your registered email address:</label><br><br>
				<input type="text" id="email" name="email" placeholder="E-Mail Address">
				<br><br>

				<button class="btn btn-success" type="submit" value="forgotpassword">Submit</button>
				<br><br>

				<div>
					<br><br>
					<center> &copy; www.mymoviedb.local {{ date('Y') }}</center>
				</div>
			</form>
		</div>
	</center>

	<!-- Javascript Files required for page-->
	<script type="text/javascript" src="{{ asset('/js/bootstrap.min.js') }}"></script>
</body>
</html>