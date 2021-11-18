
<?php
include 'config.php';

$email			= $_POST['email'];
$password		= $_POST['password'];

$host = mysqli_query ($host, "SELECT * FROM login WHERE email='$email' and password='$password'");
$cek = mysqli_num_rows($host);
if($cek>0){
	header('location:index3.php');
}else {
	echo"
	<script>
 	alert('maaf,email dan password anda salah'); 
 	window.location='login.php'</script>";
}
?>
