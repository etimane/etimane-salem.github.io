<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','salem2021');

// get the post records
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$Phone_number = $_POST['phone_number'];
$house_address = $_POST['house_address'];
$gender = $_POST['gender'];
$location_location = $_POST['location_location'];
$bus_stop = $_POST['bus_stop'];
$Email = $_POST['email'];

// database insert SQL code
$sql="INSERT INTO `convert_2021`(`id`, `first_name`, `last_name`, 
`phone_number`, `house_address`, `gender`, `location_location`, `bus_stop`, `Email`) 
VALUES ('0','$firstname','$lastname','$Phone_number','$house_address',
'$gender','$location_location','$bus_stop','$Email')";
// insert in database 
$rs = mysqli_query($con, $sql);
?>
	<script>alert('data inserted successfully');
	</script>
		<?php  



	echo "new convert Records Inserted successfully";	 

?>
