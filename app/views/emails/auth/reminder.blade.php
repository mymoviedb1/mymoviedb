<!DOCTYPE html>
<html lang="en-US" style="margin: 0;padding: 0;">
	<head>
		<meta charset="utf-8">
	</head>
	<body style="margin: 0;padding: 0;width: 100%;height: 100%;background: url(http://freeupload.in/uploads/842147630.background.jpg) no-repeat center center fixed;background-size: cover;-moz-background-size: cover;-webkit-background-size: cover;-o-background-size: cover;">
		<h2 style="text-align: center;font-size: 20px;font-weight: bolder;color: #ff9900;max-width: 650px;height: 10px;padding: 20px 30px 20px 40px;margin-top: 10px;margin-left: 50px;font: Arial, Helvetica, sans-serif;background: url(http://freeupload.in/uploads/1548343315.bg1.jpg);opacity: 0.6;border-radius: 5px;-moz-border-radius: 5px;-webkit-border-radius: 5px;box-shadow: 0px 0px 15px rgba(1, 1, 1, 1);-moz-box-shadow: 0px 0px 15px rgba(1, 1, 1, 1);-webkit-box-shadow: 0px 0px 15px rgba(1, 1, 1, 1);">Password Reset Notification</h2>

		<div style="max-width: 650px;padding: 40px 30px 40px 40px;margin-top: 30px;margin-left: 50px;font: 15px Arial, Helvetica, sans-serif;background: url(http://freeupload.in/uploads/1548343315.bg1.jpg);opacity: 0.6;border-radius: 5px;-moz-border-radius: 5px;-webkit-border-radius: 5px;box-shadow: 0px 0px 15px rgba(1, 1, 1, 1);-moz-box-shadow: 0px 0px 15px rgba(1, 1, 1, 1);-webkit-box-shadow: 0px 0px 15px rgba(1, 1, 1, 1);">
			Dear {{ $firstname }} {{ $lastname }},
			<br><br>

			<!-- To reset your password, complete this form -->
			You have requested to reset the login password for your {{ $username }} MyMovieDB account.
			You will need to click the following Button to activate your new password before attempting to login
			using it for the first time.
			<br><br>
			
			If you did not request that your password be reset, please ignore this email message and your password
			will retain its previous value.
			<br><br><br><br>

			<b>Your new temporary login password is:</b><div style="border: 1px solid #ffcc66;background: #ffcc66;height: 30px;max-width: 250px;text-align: center;margin-left: 300px;border-radius: 3px;-moz-border-radius: 3px;-webkit-border-radius: 3px;"><div style="margin-top: 5px;font-weight: bolder;color: #0000cc;">{{ $password }}</div></div>
			<br>
			<b>Activate the new password by clicking the following button:</b>
			<a href="{{ $link }}" style="text-decoration: none;text-align: center;color: #ffcc66;font-weight: bold;-webkit-transition: all 0.1s ease-in-out;-moz-transition: all 0.1s ease-in-out;-ms-transition: all 0.1s ease-in-out;-o-transition: all 0.1s ease-in-out;"><div style="background: #009900;border-top: 8px solid #009900;height: 25px;max-width: 155px;margin-left: 420px;border-radius: 3px;-moz-border-radius: 3px;-webkit-border-radius: 3px;-webkit-transition: all 0.3s ease-in-out;-moz-transition: all 0.3s ease-in-out;-ms-transition: all 0.3s ease-in-out;-o-transition: all 0.3s ease-in-out;">Active Password</div></a>

			<br><br>
			Thanks,
			<br>
			<b style="color: #ff0000;">MyMovieDB</b> Support Team
		</div>
	</body>
</html>