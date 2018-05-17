<?php
session_start();

if (isset($_POST['submit'])) {
	#code...
	include 'dbh-inc.php';

	$uid=mysqli_real_escape_string($conn,$_POST['uid']);
	$pwd=mysqli_real_escape_string($conn,$_POST['pwd']);

	//error handlers
	// Check if input are empty
	if (empty($uid)||empty($pwd)) {
		# code...
		header("Location: ../index.php?login=empty");
		exit();
	} else{
		// check if username exist in database
		$sql = "SELECT * FROM users WHERE user_uid='$uid' OR user_email= '$uid'";
		$result =mysqli_query($conn, $sql);
		$resultsCheck=mysqli_num_rows($result);
		if ($resultsCheck <1){
			#code...
				header("Location: ../index.php?login=error");
				exit();
		}else {
		 	if ($row = mysqli_fetch_assoc($result)) {
			# code...
			#echo $row['user_uid'];

			#dehashing the password
			$hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
			if ($hashedPwdCheck==false) {
			#code...
				header("Location: ../index.php?login=error");
				exit();				
			}elseif ($hashedPwdCheck==true) {
				# code...
				# login user into system
				$_SESSION['u_id']=$row['user_id'];
				$_SESSION['u_first']=$row['user_first'];
				$_SESSION['u_OtherName']=$row['user_OtherName'];
				$_SESSION['u_last']=$row['user_last'];
				$_SESSION['u_email']=$row['user_email'];
				$_SESSION['u_uid']=$row['user_uid'];
				header("Location: ../index.php?login=success");
				exit();	
			}
          }
		}
	}

} else {
	header("Location: ../login.php?login=error");
	exit();
}