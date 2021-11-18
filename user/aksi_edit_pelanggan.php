<?php
	include 'config.php';
	
	$id=$_POST['id'];
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$no_telp=$_POST['no_telp'];
	$tanggal=$_POST['tanggal'];
	$layanan=$_POST['layanan'];
	$berat=$_POST['berat'];
	$harga=$_POST['harga'];
	
	

	$sql2 = "UPDATE data_pelanggan SET id='$id',nama='$nama', alamat='$alamat',no_telp='$no_telp', tanggal='$tanggal', layanan='$layanan',berat='$berat',harga='$harga' WHERE id = '$id'";
	$query = mysqli_query($db_link,$sql2);
	if($query)
	{
	header('location:index.php');
	}
	else
	{
	echo "Edit data gagal";
	}
?>