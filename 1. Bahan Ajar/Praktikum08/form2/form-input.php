<!DOCTYPE html>
<html>
<head>
	<title>Form Input Data</title>
</head>
<body>
	<form method="post" action="pemroses_form.php">
		Nama   : <input type="text" minlength="5" ="" name="nama" /><br />
		Alamat : <input type="text" required="required" name="alamat" /><br />
		Telpon : <input type="tel" name="telp" placeholder="999999999999" required /><br>
		<input type="submit" value="klik" />
	</form>
</body>
</html>