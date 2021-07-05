<?php 
	
	if(isset($_POST['submit'])){

		$email = $_POST['email'];
		$to ="mrepte700@gmail.com";
		$subject ="From your site Submission";
		$message = "Email: $email";
		$headers = "From: $email";


		if($email == NULL){
			$error['email'] = "Email is Missing"; 
		}

		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$error['email'] = "Email is not Valid"; 
		}

		if(count( $error) == 0){

			mail( $to, $subject, $message,$headers);
			echo "<h2>sent Successfully! Thank You, We will Connect you shortly!</h2>"; 
		}
	}
 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<form action="" method="POST" name="form">
	<label for="email">Email ID</label>
	<input type="email" name="email" placeholder="Enter your email">
	<input type="submit" name="submit" value="Send">

	
</form>
</body>
</html>