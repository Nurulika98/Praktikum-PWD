<!DOCTYPE html>
<html>
<head>
	<title>Form User</title>
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

	<h1>Form User</h1>

	<div class="kotak_login">
		<p class="tulisan_login">Silahkan Isi Form</p>

		<form method="post" action="input_user.php">
			<label>ID User</label>
			<input type="text" name="id_user" class="form_login" placeholder="ID User ..">

			<label>Password</label>
			<input type="text" name="password" class="form_login" placeholder="Password ..">

			<label>Nama Lengkap</label>
			<input type="text" name="nama_lengkap" class="form_login" placeholder="Nama Lengkap ..">

			<label>Email</label>
			<input type="text" name="email" class="form_login" placeholder="Email ..">

			<input type="submit" class="tombol_login" value="LOGIN">

			<br/>
			<br/>
			<center>
				<p>Sudah Punya Akun ?</p><a class="link" style="color: blue;" href="user_login.php"> Masuk sini . .</a>
			</center>
		</form>
		
	</div>

</body>
</html>
