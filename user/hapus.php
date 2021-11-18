<?php
	include 'config.php';
	
	$id = $_GET['id'];
	$sql = "DELETE FROM rincian WHERE id = '$id'";
	$query = mysqli_query($db_link,$sql);
	if($query)
	{
	header('location:index3.php');
	}
	else
	{
	echo "hapus nilai Gagal";
	}
?>