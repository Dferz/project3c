<html>
	<head>
		<title>Halaman Login</title>
	</head>
	<body>
		<p align="center"><b>Login Cetak Kartu Peserta</b></p>
		<form action="php/login.php" method="post">
			<table border="0" cellpadding="0" cellspacing="10" align="center">
				<tr>
					<td><label for='no_pendaftaran'>No Pendaftaran</label></td>
			  	<td><input name="no_pendaftaran" value="" maxlength="10"></td>
			    </tr>
				<tr>
				  <td><label for='identitas'>Kartu Identitas (KTP/SIM/KK/Kartu Pelajar/Paspor)</label></td>
				  <td><input type="text" name="identitas" value ="" maxlength="16"></td>
				</tr>
				<tr>
				  <td><label for='pin'>Kode Akses/Pin (pada nota bank)</label></td>
				  <td><input type="password" name="pin" value ="" maxlength="10"></td>
				</tr>
				<tr>
				  <td><label for='kodeCaptcha'>Ketik Kode ini :</label><img src="php/kode_captcha.php" alt="gambar" /></td>
				  <td><input type='text' name="kodeCaptcha" value="" maxlength="4"/></td>
				</tr>
		  	</table>
		  	<center>
		  		<input type ="submit" name='submit' value="Login">
		  		<input type="reset" value="Reset">
		  	</center>
		</form>
	</body>
</html>