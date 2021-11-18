<?php
	include 'config.php';
	
	$id=$_POST['id'];
	$layanan=$_POST['layanan'];
	$berat=$_POST['berat'];
	$harga=$_POST['harga'];
	

	$sql2 = "UPDATE rincian SET id='$id',layanan='$layanan', berat='$berat',harga='$harga' WHERE id = '$id'";
	$query = mysqli_query($db_link,$sql2);
	if($query)
	{
	header('location:index3.php');
	}
	else
	{
	echo "Edit data gagal";
	}
?>