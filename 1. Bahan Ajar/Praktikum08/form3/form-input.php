<!DOCTYPE html>
<html>
<head>
	<script>
		function validateForm() {
		    var x = document.forms["formku"]["nama"].value;
		    if (x == "") {
		        alert("elemen input nama harus diisi!");
		        return false;
		    }
		}
	</script>
	<title>Form Input Data</title>
</head>
<body>
	<form name="formku" onsubmit="return validateForm()" method="post" action="pemroses_form.php">
		Nama   : <input type="text" name="nama" /><br />
		Alamat : <input type="text" name="alamat" /><br />
		Telpon : <input type="tel" name="telp"/><br>
		<input type="submit" value="submit" />
	</form>
</body>
</html>