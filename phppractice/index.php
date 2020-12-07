<!DOCTYPE html>
<html>
<head>
	<title>upload image</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php

	if (isset($_POST['submit'])) {

		 $name   = $_POST['name'];
	 	 $email  = $_POST['email'];
	 	 $pass   = $_POST['pass'];
	 	 $passlen = strlen($pass);
	 	 $uname  = $_POST['uname'];



	 if (empty($name) OR empty($email) OR empty($pass) OR empty($uname)) {
		echo " <h3 style=' color: red; text-align: center;'>please fill up correctly </h3> ";
	}elseif ($passlen <= 4) {
	 	echo " <h3 style=' color: red; text-align: center;'>your password is too short</h3> ";
	 }elseif ($passlen >= 10) {
	 	echo " <h3 style=' color: red; text-align: center;'>your password is too long</h3> ";
	 }else{
	 	echo " <h1 style=' color: pink; text-align: center;' >$uname</h1> <h3 style=' color: green; text-align: center;'>  You are Welcome</h3> ";
	 }


	}

?>



<link rel="stylesheet" type="text/css" href="style.css">

<div class="inputform">
	<h3>Sign up form</h3>
	<hr>
	<form action="" method="POST">
		<table>
		<tr>
			<td>NAME</td>
			<td>
				<input type="text" name="name">
			</td>
		</tr>
		<tr>
			<td>EMAIL</td>
			<td>
				<input type="email" name="email">
			</td>
		</tr>
		<tr>
			<td>PASSWORD</td>
			<td>
				<input type="password" name="pass">
			</td>
		</tr>
		<tr>
			<td>USERNAME</td>
			<td>
				<input type="text" name="uname">
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input name="submit" type="submit" value="signup">
			</td>
		</tr>
	</table>
	</form>
</div>

</body>
</html>