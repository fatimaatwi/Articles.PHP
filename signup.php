<!DOCTYPE html>
<html>
<head>
	<title>Signup Page </title>
    
</head>
<body>

	<?php require "header.php";?>

		<div style="margin: auto;max-width: 600px">

			<h2 style="text-align: center;">Signup</h2>

			<form method="post" action="signupaction.php" style="margin: auto;padding:10px;">

				<input type="text" name="fullname" placeholder="fullname" required><br>
				<input type="email" name="email" placeholder="Email" required><br>
				<input type="text" name="password" placeholder="Password" required><br>

				<button>Signup</button>
			</form>	
		</div>
	

</body>
</html>