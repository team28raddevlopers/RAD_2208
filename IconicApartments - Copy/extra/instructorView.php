<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Instructor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
  
</head>
<body>
    <h1>Requested Bookings</h1>
    
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "iconic_apartments";

        $conn = new mysqli($servername, $username, $password, $db);

        if ($conn->connect_error){
            die("Connection failed: ".$conn->connect_error);
        }

        if (isset($_POST["submit"])) {
            $instructorid = $_POST["instructorid"];
        }

        $sql = "SELECT * FROM instructor_booking WHERE booking_status = 'pending' and instructor_id = '$instructorid'";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            echo "<table>";
            echo "<tr><th>Booking ID</th><th>User ID</th><th>Booking Date</th><th>Time-from</th><th>Time-to</th></tr>";
            while($row = $result->fetch_assoc()){
                echo "<tr><td>".$row['booking_id']."</td><td>".$row['user_id']."</td><td>".$row['book_date']."</td><td>".$row['time_from']."</td><td>".$row['time_to']."</td></tr>";
            }
            echo "</table>";
        }
        else{
            echo "<p>No pending bookings</p>";
        }
        
    ?>

    <h2>Accept a requested booking</h2>

    <form action="" method ="POST" onsubmit="return post();">
        <p>Insert Booking ID:
        <input type="text" name="booking"> </p><br>

        <input type="submit" value="ENTER" name = "accept" id="button">
    </form>

    <h2>Reject a requested booking</h2>

    <form action="" method ="POST" onsubmit="return post();">
        <p>Insert Booking ID:
        <input type="text" name="booking"> </p><br>

        <input type="submit" value="ENTER" name = "cancel" id="button">
    </form>

    <h1>Accepted Bookings</h1>

    <?php
        $sql = "SELECT * FROM instructor_booking WHERE booking_status = 'accepted' AND instructor_id = '$instructorid'";
            $result = $conn->query($sql);

            if($result->num_rows > 0){
                echo "<table>";
                echo "<tr><th>Booking ID</th><th>User ID</th><th>Booking Date</th><th>Time-from</th><th>Time-to</th></tr>";
                while($row = $result->fetch_assoc()){
                    echo "<tr><td>".$row['booking_id']."</td><td>".$row['user_id']."</td><td>".$row['book_date']."</td><td>".$row['time_from']."</td><td>".$row['time_to']."</td></tr>";
                }
                echo "</table>";
            }
            else{
                echo "<p>No accepted bookings</p>";
            }
        
    ?>

    <h2>Cancel an accepted booking</h2>
    <form action="" method ="POST" onsubmit="return post();">
        <p>Insert Booking ID:
        <input type="text" name="booking"> </p><br>

        <input type="submit" value="ENTER" name = "cancel" id="button">
    </form>
    <br>
    <a href="index.html">HOME</a>

    <?php
   
    if (isset($_POST["accept"])) {
        $bookingid = $_POST["booking"];

        $sql = "UPDATE instructor_booking SET booking_status = 'accepted' WHERE instructor_booking.booking_id = $bookingid";

        if($conn->query($sql) === TRUE){
            echo "Request Accepted";
        }
        else{
            echo "Error: ". $conn->error;
        }

        $conn->close();
        header('location:instructorView.php');
    }
    elseif (isset($_POST["cancel"])) {
        $bookingid = $_POST["booking"];

        if ($conn->connect_error){
            die("Connection failed: ".$conn->connect_error);
        }
        echo "Connected Successfully";
    
        $sql = "DELETE FROM instructor_booking WHERE instructor_booking.booking_id = $bookingid";
    
        if($conn->query($sql) === TRUE){
            echo "Booking Cancelled";
        }
        else{
            echo "Error: ". $conn->error;
        }
    
        $conn->close();
        header('location:instructorView.php');
    }
    
?>
</body>
</html>