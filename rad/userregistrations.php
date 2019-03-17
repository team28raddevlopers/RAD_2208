<?php
  include("connection/connection.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>UserReg</title>
</head>
<body>

	<?php 

		if (isset($_POST['submit'])) {

			echo "data";
		}
		else{
			echo("ne");
		}

		$firstName=$_POST['firstName'];
		$lastName=$_POST['lastName'];
		$userName=$_POST['userName'];
		$email=$_POST['email'];
		$tpNo=$_POST['contactNumber'];
		$nic=$_POST['nic'];
		$gender=$_POST['gender'];
		$register=0;
		$password=$_POST['password'];
		
		

		if (isset($_POST['role'])) {
				$role=$_POST['role'];
				$sql = "INSERT INTO instructors(firstName,lastName,role,userName,password,tpNo,email,nic,gender,register) VALUES ('$firstName','$lastName','$role','$userName','$password','$tpNo','$email','$nic','$gender',$register)";
		}
		elseif (isset($_POST['appartmentId'])) {
			$appartmentId=$_POST['appartmentId'];
			$sql = "INSERT INTO nonregistered_members(firstName,lastName,userName,email,tpNo,nic,gender,register,password,appartmentId) VALUES ('$firstName','$lastName','$userName','email','$tpNo','$nic','$gender',$register,'$password','$appartmentId')";
		}
		


		if($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();

	 ?>
	 <a href="registeruser.php"></a>

</body>
</html>