<!DOCTYPE html>
<html>
<head>
	<title>Reset Your Password</title>
	<style type="text/css">
		body {
			font-family: Arial, sans-serif;
			font-size: 14px;
			line-height: 1.4;
			color: black;
		}
		.btn {
			display: inline-block;
			padding: 8px 16px;
			font-size: 14px;
			font-weight: bold;
			text-align: center;
			text-decoration: none;
			background-color: #3490dc;
			color: #ffffff;
			border-radius: 5px;
		}
		.btn:hover {
			background-color: #2779bd;
		}
	</style>
</head>
<body>
	<div class="container">
		<h2 style="font-weight:500; color:#f48840">Reset Your Password</h2>
		<p>Hi {{$name}},</p>
		<p>We received a request to reset your password for your account at Food Blog. If you did not request a password reset, you can safely ignore this email.</p>
		<p>Your new password is:</p>
		<p><strong>{{$password}}</strong></p>
		<p>Please note that this link will expire in 24 hours.</p>
		<p>If you have any questions or concerns, please contact us at foodblog@gmail.com</p>
		<p>Best regards,</p>
		<p>Food Blog Team</p>
	</div>
</body>
</html>
