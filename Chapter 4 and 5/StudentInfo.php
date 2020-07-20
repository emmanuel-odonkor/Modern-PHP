<?php

/*
*@author Emmanuel Odonkor Teye-Kofi
*Using PHP's functions that hashes, validates and sanitizes form data
*
*/

//checks to see if the submit button is clicked
if(isset($_POST['usubmit']))
{
	echo "<h4><u>YOUR REGISTRATION INFORMATION</u></h4>";

	//Gets the Username from the form and validates it
	$Username = $_POST['uname'];
	if(preg_match("/^([a-zA-Z' ]+)$/", $Username)){
		echo "$Username is a valid name";

	}else{
		echo "$Username is not a valid name";

	}

	echo "<br />";

	//Gets the Password from the form and hashes it using md5()
	$Password = $_POST['upass'];
	$HashedPassword = md5($Password);
	echo "The hashed password is $HashedPassword";

	echo "<br />";


	//Gets the Email from the form and validates it
	$Email = $_POST['uemail'];
	if(preg_match("/^([A-Za-z0-9_\-\.])+\@([A-Za-z_\-\.])+\.([A-Za-z]{2,4})$/", $Email)){

		echo("$Email is a valid email");
	}else
	{
		echo("$Email is not a valid email");
	}

	echo "<br />";


	//Gets the Contact from the form and sanitizes it
	$Contact = $_POST['ucontact'];
	var_dump(filter_var($Contact, FILTER_SANITIZE_NUMBER_INT));
	
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width , initial-scale= 1">
	<title>User Registeration</title>
</head>
<body>
	<center><h1>STUDENT INFORMATION SYSTEM</h1></center>
	<hr />
	<center><form action="" method="post">
		<h2><b>REGISTRATION FORM</b></h2>
		<br />
		<div>
		<label>Username: </label>
		<input type="text" name="uname" placeholder="Enter your name" style="width:185px;" required>
		</div>
		<br />

		<div>
		<label>Password: </label>
		<input type="password" name="upass" placeholder="Enter your password" style="width:190px;" required>
		</div>
		<br />

		<div>
		<label>Email: </label>
		<input type="email" name="uemail" placeholder="Enter your email" style="width:210px;" required>
	   	</div>
		<br />

		<div>
		<label>Contact: </label>
		<input type="tel" name="ucontact" placeholder="Enter your contact" style="width:200px;" required>
		</div>
		<br />

		<button type="submit" name="usubmit">SUBMIT</button>

	</form></center>
	<center><footer >
		<b><p>BY EMMANUEL ODONKOR TEYE-KOFI</p></b>
	</footer></center>
	</body>
</html>