<?php
include('config.php');

$id =$_POST['id'];
$email	=$_POST['email'];
$password	=$_POST['password'];

$query =mysqli_query($host,"UPDATE login SET email='$email',password='$password' WHERE id='$id' ")or die(mysql_error());
if($update){
	echo "<script>alert<'Yess Data Berhasil Disimpan');
	window.location='index3.php'</script>";
}else{
	echo "<script>alert('ASEEK Berhasil Diubah');
	window.location='index3.php'</script>";
}
?>
