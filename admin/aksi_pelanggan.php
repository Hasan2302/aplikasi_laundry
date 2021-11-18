<?php 
include 'config.php';
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$no_telp = $_POST['no_telp'];
	$tanggal = $_POST['tanggal'];
    $layanan = $_POST['layanan'];
	$berat = $_POST['berat'];
	$harga= $_POST['harga'];
	

$sql= "INSERT INTO data_pelanggan (id, nama, alamat, no_telp, tanggal, layanan, berat, harga) VALUES('$id','$nama','$alamat','$no_telp','$tanggal','$layanan','$berat','$harga')";
$query = mysqli_query($db_link,$sql);
if($query)
{
	header('location:index.php');
}
else
{
echo "Tambah data Pembeli gagal";
}
?>