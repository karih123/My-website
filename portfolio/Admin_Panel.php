<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin_Panel</title>



	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel = "shortcut icon" type="image/x-icon" href="images/favicon.ico" />

  	<style>
  		table { 
	width: 750px; 
	border-collapse: collapse; 
	margin:50px auto;
	}

/* Zebra striping */
tr:nth-of-type(odd) { 
	background: #eee; 
	}

th { 
	background: #3498db; 
	color: white; 
	font-weight: bold; 
	}

td, th { 
	padding: 10px; 
	border: 1px solid #ccc; 
	text-align: left; 
	font-size: 18px;
	}

/* 
Max width before this PARTICULAR table gets nasty
This query will take effect for any screen smaller than 760px
and also iPads specifically.
*/
@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

	table { 
	  	width: 100%; 
	}

	/* Force table to not be like tables anymore */
	table, thead, tbody, th, td, tr { 
		display: block; 
	}
	
	/* Hide table headers (but not display: none;, for accessibility) */
	thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
	
	tr { border: 1px solid #ccc; }
	
	td { 
		/* Behave  like a "row" */
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 50%; 
	}

	td:before { 
		/* Now like a table header */
		position: absolute;
		/* Top/left values mimic padding */
		top: 6px;
		left: 6px;
		width: 45%; 
		padding-right: 10px; 
		white-space: nowrap;
		/* Label the data */
		content: attr(data-column);

		color: #000;
		font-weight: bold;
	}

}
  	</style>
</head>
<body>
     <div class = "main-div">
     		<h1 style="text-align: center;">Contact Us</h1>

     		<!-- <a href="registration_form.php"><button type="submit" class="btn btn-info btn-lg btn-block login-button"  style="text-decoration:none;">Go to Login Page</button></a> -->

     		<div class="center-div">
     			<div class="table-responsive">
     				<table class="table table-dark">
     					<thead class="thead-dark">
     						<tr>
     							<th>id</th>
     							<th>name</th>
     							<th>email</th>
     							<th>Subject</th>
     							<th>Message</th>
     							<th>operation</th>
     						</tr>
     					</thead>

     					<tbody>



						<?php
							
							$server = "localhost";
							$username = "root";
							$password = "";
							$dbname = "contact";


							$conn = mysqli_connect($server,$username,$password,$dbname);


							if($conn){

								?>
								<script>
									alert('connection Successful');
								</script>
							<?php
							}else{
								die("No connection" .mysqli_connect_error($conn));	
							}

						?>

						<?php

						$selectquery = " SELECT * from contact_us";

						$query = mysqli_query($conn,$selectquery);

						$nums = mysqli_num_rows($query);



						while($res = mysqli_fetch_array($query)){
						?>

							<tr>
     							<td><?php echo $res['id']; ?></td>
     							<td><?php echo $res['first_name']; ?></td>
     							<td><?php echo $res['email']; ?></td>
     							<td><?php echo $res['subject']; ?></td>
     							<td><?php echo $res['message']; ?></td>
     							
     							<td><a href="delete.php?ids=<?php echo $res['id']; ?>">   <i class="fa fa-trash"></i></td></a>
     						</tr>
						<?php
     					}
						?>


     						
     					</tbody>
     				</table>
     				
     			</div>
     		</div>
     	<h1>
     </div>

</body>
</html>