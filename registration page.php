<!DOCTYPE html>
<html>
<head>
	<title>Form Registration </title>
</head>
<body>

	<h1>Form Registration</h1>
	<?php


		$FirstName= "";
		$LastName = "";
		$Gender = "";
		$Email = "";
		$UserName = "";
		$Password = "";
		$RecoveryEmail = "";
		$FirstNameErr= "";
		$LastNameErr = "";
		$GenderErr = "";
		$EmailErr = "";
		$UserNameErr = "";
		$PasswordErr = "";
		$RecoveryEmailErr = "";


?>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(empty($_POST['fname'])){
		 $FirstNameErr = "please fill up correct info"; 
	}
	else{

		$FirstName = $_POST['fname'];

	}
		if(empty($_POST['lname'])){
		$LastNameErr = "please fill up correct info"; 
	}
	else{

		$LastName = $_POST['lname'];

	}
		if(empty($_POST['gender'])){
		$GenderErr = "please fill up correct info"; 
	}
	else{

		$Gender = $_POST['gender'];

	}
		if(empty($_POST['email'])){
		$EmailErr = "please fill up correct info"; 
	}
	else{

		$Email = $_POST['email'];

	}
		if(empty($_POST['username'])){
		$UserNameErr = "please fill up correct info"; 
	}
	else{

		$UserName = $_POST['username'];

	}
		if(empty($_POST['password'])){
		$PasswordErr = "please fill up correct info"; 
	}
	else{

		$Password = $_POST['password'];

	}
		if(empty($_POST['remail'])){
		$RecoveryEmailErr = "please fill up correct info"; 
	}
	else{

		$RecoveryEmail = $_POST['remail'];

	}

}

?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?> " method="POST">
	<label for = "fname"> Enter first name </label>
<input type="text" name="fname" id="fname">
<p> <?php echo $FirstNameErr; ?> </p>

<br>

<label for = "lname"> Enter last name </label>
<input type="text" name="lname" id="lname">
<p> <?php echo $LastNameErr; ?> </p>
<br>

<label for = "gender"> Gender </label>
<input type="radio" name="gender" id="male" value="male">
<label for = "male"> Male </label>
<input type="radio" name="gender" id="female" value="female">
<label for = "female"> Female </label>
<p> <?php echo $GenderErr; ?> </p>
<br>

<label for = "email"> Email </label>
<input type="email" name="email" id="email">
<p> <?php echo $EmailErr; ?> </p>
<br>


<hr>
<h3>User Account Information</h3>
<label for = "username"> User Name/User ID </label>
<input type="text" name="username" id="username">
<p> <?php echo $UserNameErr; ?> </p>
<br>

<label for = "password"> Password </label>
<input type="password" name="password" id="password">
<p> <?php echo $PasswordErr; ?> </p>
<br>

<label for = "remail"> Recovery Email Address </label>
<input type="email" name="remail" id="remail">
<p> <?php echo $RecoveryEmailErr; ?> </p>

<input type="submit" value="Submit">
</form>


<br>
<?php
    	echo "First Name: $FirstName Last Name: $LastName  Gender: $Gender Email: $Email ";

	
        $f = fopen("text.txt","a");
        fwrite($f, "First Name= ".$FirstName ."\n");
        fwrite($f, "Last Name= ".$LastName ."\n");
        fwrite($f, "User Name=".$UserName. "\n");
        fwrite($f, "Email= ".$Email. "\n");
        fwrite($f, "Password=".$Password. "\n");
        fwrite($f, "Recovery Email=".$RecoveryEmail. "\n");
        fwrite($f, "Gender= ".$Gender ."\n\n");

        fclose($f);

?>


</body>
</html>