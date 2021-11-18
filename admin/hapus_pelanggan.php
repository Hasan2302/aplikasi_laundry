<?php
	include 'config.php';
	
	$id = $_GET['id'];
	$sql = "DELETE FROM data_pelanggan WHERE id = '$id'";
	$query = mysqli_query($db_link,$sql);
	if($query)
	{
	header('location:index.php');
	}
	else
	{
	echo "hapus nilai Gagal";
	}
?>