<?php

if(isset($_POST['insert'])){
	$hostname= "localhost";
	$username= "root";
	$password = "";
	$db_name = "kamu";

	$username = validate($_POST['username']);
	$nic = validate($_POST['nic']);
	$license = validate($_POST['license']);
	$contact = validate($_POST['contact']);
	$email = validate($_POST['email']);
	$password = validate($_POST['password']);
	$confirmpassword = validate($_POST['confirmpassword']);


	$conn = mysqli_connect($hostname, $username, $password, $db_name);
	$query="INSERT INTO accounts(username,password,usertype) VALUES('$username', '$password', 'deliverydriver')";

	$query2="INSERT INTO deliverydriver(username,nic,license,contact,email,,password) VALUES('$username', '$nic', '$license', '$contact', '$email', '$password')";
		
		$result=mysql_query($conn,$query,$query2);

		if($result){
			echo"successfull";
		}else{
			echo "not successfull";
		}

		mysql_free_result($result);
		mysql_close($conn);
}
?>
