<!DOCTYPE html>
<html>
<head>
	<title>Login User</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

	<style type="text/css">
		body{
			font-family: sans-serif;
			background: #d5f0f3;
		}

		h1{
			text-align: center;
			/*ketebalan font*/
			font-weight: 300;
		}

		.tulisan_login{
			text-align: center;
			/*membuat semua huruf menjadi kapital*/
			text-transform: uppercase;
		}

		.kotak_login{
			width: 350px;
			background: white;
			/*meletakkan form ke tengah*/
			margin: 80px auto;
			padding: 30px 20px;
		}

		label{
			font-size: 11pt;
		}

		.form_login{
			/*membuat lebar form penuh*/
			box-sizing : border-box;
			width: 100%;
			padding: 10px;
			font-size: 11pt;
			margin-bottom: 20px;
		}

		.tombol_login{
			background: #46de4b;
			color: white;
			font-size: 11pt;
			width: 100%;
			border: none;
			border-radius: 3px;
			padding: 10px 20px;
		}

		.link{
			color: #232323;
			text-decoration: none;
			font-size: 10pt;
		}
	</style>
<body>

	<h1>Masuk Dulu</h1>

	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>

		<form method="post" action="cek_login.php">
			<label>Username</label>
			<input type="text" name="id_user" class="form_login" placeholder="Username ..">

			<label>Password</label>
			<input type="text" name="paswd" class="form_login" placeholder="Password ..">

			<img src="captcha.php">
			<input type="text" name="captcha_code" class="form_login" placeholder="Masukkan Captcha">

			<input type="submit" class="tombol_login" value="LOGIN">

			<br/>
			<br/>
		</form>
		<center>
			<p>Belum Punya Akun ?</p><a class="link" style="color: blue;" href="form_user.php"> Daftar sini . .</a>
		</center>
		
	</div>


</body>
</html>
