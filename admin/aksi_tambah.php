<?php 
include 'config.php';
	$id = $_POST['id'];
    $layanan = $_POST['layanan'];
	$berat = $_POST['berat'];
	$harga= $_POST['harga'];
	

$sql= "INSERT INTO rincian (id, layanan, berat, harga) VALUES('$id','$layanan','$berat','$harga')";
$query = mysqli_query($db_link,$sql);
if($query)
{
	header('location:index3.php');
}
else
{
echo "Tambah data Pembeli gagal";
}
?>