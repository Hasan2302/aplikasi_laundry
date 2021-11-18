<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
		<link rel="stylesheet" href="user/css/style-l.css" type="text/css">
        <link href="Sunset.jpg" rel="shortcut icon">
</head>
<body>
<div id="card-l">
	<div id="card-content-l">
		<div id="card-title-l">
			<h2>Login Admin</h2>
			<div class="underline-title-l"></div>
		</div>
	</div>
<form action="admin/cek_login.php" method="POST" class="form">
	<label for="user-email" style="padding-top: 13px; padding-left: 30px;">&nbsp;Username</label>
	<input id="email" style="margin-left: 3px; border-radius: 5px;" class="form-content" type="text" name="username" autocomplete="on" required/>
	<div class="form-border"></div>
<br>
<label for="user-password" style="padding-top: 22px; padding-left: 30px;">&nbsp;Password</label>
<input id="password" style="border-radius: 5px; margin-left: 7px;" class="form-content" type="password" name="password" required/>
<div class="form-border"></div>
<br>
<input id="submit-btn-l" style="margin-left: 65px;" type="submit" name="submit" value="MASUK"/>
<br>
<a href="user/index2.php"><input type="button" value="lewati"></a>
</form>
</form>
</div>
</body>
</html>