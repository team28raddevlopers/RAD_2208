<?php
require_once 'config.php';
$UserID_err  = $UserID = $msg= $CouchID =$CouchID_err= $UserID_err = $date = $date_err= "";
$sql = 'SELECT *
		FROM coach';

$query = mysqli_query($link, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($link));
}



if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["ID"]))){
        $UserID_err = 'Please enter Your ID';
    } else{
      $pass_id = ($_POST["ID"]);

			if(empty(trim($_POST["CID"]))){
	        $CouchID_err = 'Please enter COuch ID';
	    } else{
				$CID = $_POST["CID"];
				if(empty(trim($_POST["date"]))){
						$date_err = 'Please enter Date';
				} else{
	      $date1 = ($_POST["date"]);

			$sql2 = "INSERT into coach_bookings (CoachID, UserID , date1) values('$CID', '$pass_id' , '$date1')";


			$query1 = mysqli_query($link, $sql2);

			if (!$query1) {
				die ('SQL Error: ' . mysqli_error($link));
			}
			else {
				$msg =  "Succuessfully ADD";
			}
}
}
		}
	}

 ?>
<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<style type="text/css">
			body{ font: 14px sans-serif; }
			.wrapper{ width: 350px; padding: 20px; }
	</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<link rel="stylesheet" href="styles.css" type="text/css" />

<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
<style>
#mainnav {
	text-align: center;

}
ul a {
	font-size: 18px;
}
/* Add a black background color to the top navigation */
.active1{
 padding:  50px;
}
.topnav {
  /*background-color: #333;*/
  overflow: hidden;
}
.btn {

  border: none; /* Remove borders */
  color: white; /* Add a text color */
  padding: 14px 28px; /* Add some padding */
  cursor: pointer; /* Add a pointer cursor on mouse-over */
}

.success {background-color: #4CAF50;} /* Green */
.success:hover {background-color: #46a049;}

.info {background-color: #2196F3;} /* Blue */
.info:hover {background: #0b7dda;}

.warning {background-color: #ff9800;} /* Orange */
.warning:hover {background: #e68a00;}

.danger {background-color: #f44336;} /* Red */
.danger:hover {background: #da190b;}

.default {background-color: #e7e7e7; color: black;} /* Gray */
.default:hover {background: #ddd;}
/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  /*color: #f2f2f2;*/
  text-align: center;
  padding: 20px 25px;
	opacity: 100%;
  text-decoration: none;
  font-size: 25px;
}

/* Change the color of links on hover */
.topnav a:hover {
/*  //background-color: #ddd;*/
	opacity: 100%;
  /*color: black;*/
}
/* Add a color to the active/current link */
.topnav a.active {
  /*background-color: #4CAF50;*/
		opacity: 100%;
/*  //color: white;*/
}

table {
			margin: auto;
      margin-right: 10px;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 40px;
		}

		table td {
			transition: all .5s;
		}

		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th,
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
.msg
{
  color: Green;
}
.summery
{
  float: center;
  padding-left: 50px;
}
.col
{
  color: Green;
}
.b_b
{
  font-size: 40px;
  margin-left: 2%;
}
h2 {
	font-size: 50px;
	}
</style>
</head>

<body>

		<section id="body" class="width">
			<aside id="sidebar" class="column-left">

			<header style="margin-top:-10%; ">
				<h1><a href="#">Iconic</a></h1>

				<center><h2 style="font-size: 14px;">Welcome to Iconic System</h2></center>

			</header>

			<nav id="mainnav">
  				<ul>
                            		<li class="selected-item"><b><label style="text-align:center; font-size:22px;  color:red;" style = "color:red;">Booking </label></b></li>
                           		 <li><a style="text-align:center;" href="examples.html">Gym</a></li>
                           		 <li><a style="text-align:center;"href="#">Spa</a></li>
                            		<li><a style="text-align:center;"href="index.php">Tennis</a></li>

                            		<li ><b><label style="text-align:center; font-size:22px;  color:red;" style = "color:red;"> Instructors</label></b></li>
																<li><a style="text-align:center;" href="examples.html">Home</a></li>
																<li><a style="text-align:center;"href="#">About</a></li>
																 <li><a style="text-align:center;"href="#">Contact Us</a></li>
													</ul>
			</nav>
			</aside>
	<div class="topnav">

		<a class="active2" style="color:black; padding-left:25%;">IConic Apartments</a>
			<a class="active3" style="color:black; padding-left:40%;">Sign Out</a>

	</div>
			<section id="content" class="column-right">

	    <article>




		</article>

		<article class="expanded">



			<div style="width:900px;height:300px; margin-top: -8%;overflow:auto; float:right;">
			<table class="data-table">

			<caption class="title"><h5><center>Couch Booking</center></h5></caption>
			<thead>
				<tr>
					<th>NO</th>
					<th>Couch ID</th>
					<th>Couch Name</th>

				</tr>
			</thead>
			<tbody>
			<?php

			$no 	= 1;
			$total 	= 0;
			$couch_array = [];
			while ($row = mysqli_fetch_array($query))
			{
				//$amount  = $row['amount'] == 0 ? '' : number_format($row['amount']);

				echo '<tr>
						<td>'.$no.'</td>
						<td>'.$row['CoachID'].'</td>
						<td>'.$row['name'].'</td>


					</tr>';
				//$total += $row['Quantity'];
				$no++;

			}?>

			</tbody>
			<tfoot>
				<tr>
					<th colspan="5">TOTAL</th>
					<th><?=number_format($total)?></th>
				</tr>
			</tfoot>
		</table>

	</div>

<div class="wrapper"  style="margin-left:10%; padding-top:-20%">

<center>  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

		<div  class="form-group <?php echo (!empty($UserID_err)) ? 'has-error' : ''; ?>">
		</br>
				<label style="color: black; ">Your USER ID</label>
			</br>
				<input type="text" name="ID"class="form-control" value="<?php echo $UserID; ?>">
				<span class="help-block"><?php echo $UserID_err; ?></span>
		</div>
		<div class="form-group <?php echo (!empty($UserID_err)) ? 'has-error' : ''; ?>">
		</br>
				<label style="color: black; ">Couch ID</label>
			</br>
				<input type="text" name="CID"class="form-control" value="<?php echo $CouchID; ?>">
				<span class="help-block"><?php echo $CouchID_err; ?></span>
		</div>
		<div class="form-group <?php echo (!empty($UserID_err)) ? 'has-error' : ''; ?>">
		</br>
				<label style="color: black; ">Date</label>
			</br>
				<input type="date" name="date"class="form-control" value="<?php echo $date; ?>">
				<span class="help-block"><?php echo $date_err; ?></span>
		</div>

			<div class="form-group">
				<center>  <input type="submit" class="btn btn-primary" value="ADD Booking"></center>


				</div>

		</form>
	</center>
</div>
<h4 class="msg"><center><?php echo $msg ?></center><h4>

		</article>


			<footer class="clear">

			</footer>

		</section>

		<div class="clear"></div>

	</section>


</body>
</html>
