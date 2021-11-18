<!DOCTYPE html>
<html>
<head>
  <title>Tambah Data</title>
    <link rel="stylesheet" href="css/style-t.css" type="text/css">
        <link href="Sunset.jpg" rel="shortcut icon">
</head>
<body>
<div id="card-l">
  <div id="card-content-l">
    <div id="card-title-l">
      <h2>Tambah Data</h2>
      <div class="underline-title-l"></div>
    </div>
  </div>
<form action="aksi_pelanggan.php" method="POST" class="form">
<label for="user-email" style="padding-top: 13px; padding-left: 30px;">&nbsp;Id</label>
<input id="id" style="margin-left: 95px; border-radius: 5px;" class="form-content" type="number" name="id" autocomplete="on" required/>
<label for="user-password" style="padding-top: 22px; padding-left: 30px;">&nbsp;Tanggal</label>
<input id="tanggal" style="border-radius: 5px; margin-left: 10px;" class="form-content" type="date" name="tanggal" required/>
  <div class="form-border"></div>
<br>

<label for="user-password" style="padding-top: 22px; padding-left: 30px;">&nbsp;Nama Pelanggan</label>
<input id="nama" style="border-radius: 5px;" class="form-content" type="text" name="nama" required/>
<label for="user-password" style="padding-top: 22px; padding-left: 30px;">&nbsp;No HP</label>
<input id="no_telp" style="border-radius: 5px; margin-left: 16px;" class="form-content" type="number" name="no_telp" required/>
<div class="form-border"></div>
<br>

<label for="user-password" style="padding-top: 22px; padding-left: 30px;">&nbsp;Alamat</label>
<input id="alamat" style="border-radius: 5px; margin-left: 62px;" class="form-content" type="text" name="alamat" required/>
<label for="user-password" style="padding-top: 22px; padding-left: 30px;">&nbsp;Berat</label>
<input id="berat" style="border-radius: 5px; margin-left: 26px;" class="form-content" type="text" name="berat" required/>
<div class="form-border"></div>
<br>

<label for="user-password" style="padding-top: 22px; padding-left: 30px;">&nbsp;Layanan</label>
<input id="layanan" style="border-radius: 5px; margin-left: 52px;" class="form-content" type="text" name="layanan" required/>
<label for="user-password" style="padding-top: 22px; padding-left: 30px;">&nbsp;Harga</label>
<input id="harga" style="border-radius: 5px; margin-left: 24px;" class="form-content" type="text" name="harga" required/>
<div class="form-border"></div>
<br>

<input id="submit-btn-l" style="margin-left: 65px;" type="submit" name="submit" value="Tambah"/>
<a href="index.php">back</a>
</form>
</form>
</div>
</body>
</html>
