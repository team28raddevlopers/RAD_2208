<?php
  include("connection/connection.php");
?>


<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
	<?php 
		$x=$_POST['regButton'];

		$y=(int)$x;
		echo $y;

		 $sql = "UPDATE nonregistered_members SET register=1 WHERE id=$y";

			$result = $conn->query($sql);
			
			if($conn->query($sql) === TRUE) {
    				echo "Record updated successfully members";
			} else {
			    echo "Error updating record: " . $conn->error;
			}


			//messure registration

			 $sql = "UPDATE instructors SET register=1 WHERE id=$y AND role='messeur'";

			$result = $conn->query($sql);
			
			if($conn->query($sql) === TRUE) {
    				echo "Record updated successfully messeur";
			} else {
			    echo "Error updating record: " . $conn->error;
			}


			// tennis cauch registrations
			$sql = "UPDATE instructors SET register=1 WHERE id=$y AND role='tennis cauch'";

			$result = $conn->query($sql);
			
			if($conn->query($sql) === TRUE) {
    				echo "Record updated successfully tennis cauch";
			} else {
			    echo "Error updating record: " . $conn->error;
			}




			// gym instructor registrations

			$sql = "UPDATE instructors SET register=1 WHERE id=$y AND role='gym instructor'";

			$result = $conn->query($sql);
			
			if($conn->query($sql) === TRUE) {
    				echo "Record updated successfully gym instructor";
			} else {
			    echo "Error updating record: " . $conn->error;
			}






			header("Location:index.php");

	 ?>
	 <a href="index.php">back</a>

</body>
</html>