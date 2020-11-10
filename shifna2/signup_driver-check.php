<?php 
session_start(); 
include "connection.php";

if (isset($_POST['username']) && isset($_POST['nic']) && isset($_POST['license']) && isset($_POST['contact']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirmpassword'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$username = validate($_POST['username']);
	$nic = validate($_POST['nic']);
	$license = validate($_POST['license']);
	$contact = validate($_POST['contact']);
	$email = validate($_POST['email']);
	$password = validate($_POST['password']);
	$confirmpassword = validate($_POST['confirmpassword']);

	if (empty($username)) {
		header("Location: signup_deliverydriver.php?error=username is required");
	    exit();
	}else if(empty($nic)){
        header("Location: signup_deliverydriver.php?error=nic is required");
	    exit();
	}

	else if(empty($license)){
        header("Location: signup_deliverydriver.php?error=license is required");
	    exit();
	}
	else if(empty($contact)){
        header("Location: signup_deliverydriver.php?error=contact is required");
	    exit();
	}

	else if(empty($email)){
        header("Location: signup_deliverydriver.php?error=email is required");
	    exit();
	}
	
	else if(empty($password)){
        header("Location: signup_deliverydriver.php?error=password is required");
	    exit();
	}

	else if($password !== $confirmpassword){
        header("Location: signup_deliverydriver.php?error=The confirmation password  does not matched");
	    exit();
	}

	else{
		// hashing the password
   

        
		$password = md5($password);

	    $sql = "SELECT * FROM accounts WHERE username='$username' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup_deliverydriver.php?error=The username is taken try again");
	        exit();
		}else {
           $sql1 = "INSERT INTO accounts(username,password,usertype) VALUES('$username', '$password', 'deliverydriver')";
           $sql2 = "INSERT INTO deliverydriver(username,nic,license,contact,email,,password) VALUES('$username', '$nic', '$license', '$contact', '$email', '$password')";
           $result1 = mysqli_query($conn, $sql1);
           $result2 = mysqli_query($conn, $sql2);
           if ($result1 && $result2) {
           	 header("Location: deliverydriver.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: deliverydriver.php?error=unknown error occurred");
		        exit();
           }
		}
	}
	
}else{
	header("Location: deliverydriver.php");
	exit();
}