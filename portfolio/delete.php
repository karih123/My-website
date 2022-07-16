<?php
	$server = "localhost";
	$username = "root";
	$password = "";
	$dbname = "contact";


	$conn = mysqli_connect($server,$username,$password,$dbname);

	$id = $_GET['ids'];

	$deletequery = "delete from contact_us where id = $id";

	$query = mysqli_query($conn, $deletequery);

	if($query){
		?>
		<script>
			alert('deleted Successfull');
		</script>

		<?php
		header('location:Admin_Panel.php');
	} else {
		?>
		<script>
			alert('Not deleted');
		</script>
		<?php
	}
?>