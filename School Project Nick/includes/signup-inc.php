<<?php 
if (isset($_POST['submit'])){
  # code...
	include_once 'dbh-inc.php';
	$first=mysqli_real_escape_string($conn,$_POST['first']);
	$last=mysqli_real_escape_string($conn,$_POST['last']);
	$otherName=mysqli_real_escape_string($conn,$_POST['otherName']);
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	$uid=mysqli_real_escape_string($conn,$_POST['uid']);
	$pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
	#error handler
	# is all fieds filled
	if (empty($first)||empty($last)||empty($email) ||empty($uid) ||empty($pwd)){
		#code...
		header("Location: ../signup.php?signup=empty");
		exit();
	}else{
		// Check if input characters are valid
		if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
			# code...
				header("Location: ../signup.php?signup=invalid");
				exit();
		} else{
		// Check if email is valid
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
			#code...
				header("Location: ../signup.php?signup=email");
				exit();
		}else{
			// Check if username already exist in db
			#$sql="SELECT * FROM users WHERE user_uid='$uid'";
			#$result =mysqli_query($conn, $sql);
			#$resultsCheck=mysqli_num_rows($result);
			

				$sql1="call UserExist('$first','$last','$email')";
				$result =mysqli_query($conn, $sql1);
				$resultsCheck=mysqli_num_rows($result);
				#if ($resultsCheck > 0){


            if ($resultsCheck > 0){
			#code...
				header("Location: ../signup.php?signup=UserNameTaken");
				#echo $result;
				exit();
			} else{
				// hashing the password : password_hash($Var, HashingMethod);
				$hashedPwd= password_hash($pwd, PASSWORD_DEFAULT);
				// insert user into the database
				// $sql can be replaced since we will nolonger need them and we dont need $result because we store no result
				$sql= "INSERT INTO users(user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first','$last','$email','$uid','$hashedPwd');";
				mysqli_query($conn, $sql);
				header("Location: ../signup.php?signup=Success");
				exit();
			}
		}
	  }
	}

} else{
	header("Location: ../signup-php");
	exit();
}