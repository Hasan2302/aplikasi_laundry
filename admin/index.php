<?php 
include "config.php";
?>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/style-d.css" type="text/css">
  </head>
<body class="body">
  <nav id="nav">
        <h1>Laundry Toko</h1>
        <a href="index2.php" class="link">Home</a>             
  </nav>
<br>
<div class="formcard3">
<H3 style="margin-bottom: 30px; margin-left: 1%;">Data Pelanggan</H3>
        <a href="../index.php" style="margin-bottom: 1%; margin-left: 83%;"><img src="img/exit.jpeg" align="right" width="55px" height="40px"></a></div>
<div class="formcard1">
  <div class="formcard2"><table>
                    <tr> 
<td><input style="margin-left: 135%;" type="button" border="0" value="Tambah" onclick="location.href='tambah_data.php'"></a><br/><br/></td>
                    </tr>
                </table> </div>
        <tr>
           <table style="margin-left: 3%; border-radius: 5px;" border='0' width="90%" height="50%" cellspacing="0" cellpadding='5'>  
           <tr style="background-color: #eee">     
            <th>No</th>
            <th>Id Pelanggan</th>
            <th>Nama Pelanggan</th>
            <th>Alamat</th>
            <th>No. Handphone</th>
            <th>Tanggal</th>
            <th>Layanan</th>
             <th>Berat</th>
             <th>Harga</th>
             <th colspan="2">Aksi</th> 
        </tr>
<?php
$no = 1;
$sql = "SELECT * FROM data_pelanggan";
$query=mysqli_query($db_link,$sql);
 while ($data = mysqli_fetch_array($query)) 
  {
   ?>
        <tr align="center">
            <td><?php echo $no; ?><hr></td>
            <td><?php echo "$data[id]"; ?><hr></td>
            <td><?php echo "$data[nama]"; ?><hr></td>
            <td><?php echo "$data[alamat]"; ?><hr></td>
            <td><?php echo "$data[no_telp]"; ?><hr></td>
            <td><?php echo "$data[tanggal]"; ?><hr></td> 
             <td><?php echo "$data[layanan]"; ?><hr></td>
              <td><?php echo "$data[berat]"; ?><hr></td>
            <td><?php echo "$data[harga]"; ?><hr></td>
                     <td>
            <a  class="hapus" href="hapus_pelanggan.php?id=<?php echo $data['id']; ?>"><input type="button" value="hapus"></a> 
              <a  class="edit" href="edit_pelanggan.php?id=<?php echo $data['id']; ?>"><input type="button" value="edit"></a>             
            </td>
            <?php $no++;
          } 
          ?>

        </tr>
</table>
</a>
</div>
</div>







      </td>
    </tr>
    </table>
    </form>
    <div class="footer">
      <a id="card-title-d" href="index.php">DATA PELANGGAN</a> <a id="card-title-d2" href="index3.php">RINCIAN LAUNDRY</a>
    </div>
</body>
</html>