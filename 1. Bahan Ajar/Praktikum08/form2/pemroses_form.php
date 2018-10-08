<?php
include("koneksi.php");
$name	= $_POST['nama'];
$alm	= $_POST['alamat'];
$telp	= $_POST['telp'];
if (empty($name) OR empty($alm) OR empty($telp)) {
	echo "elemen harus diisi semua <br>";
	echo "<a href='form-input.php'>kembali ke form</a>";
} else{
	echo "Nama : ".$name."<br>";
	echo "Alamat : ".$alm."<br>";
	echo "Telepon : ".$telp."<br>";
	$mysqli	= "INSERT INTO tabel_user (nama, alamat, telepon) VALUES ('$name', '$alm', '$telp')";
	$result	= mysqli_query($conn, $mysqli);
	echo "Input berhasil";
	mysqli_close($conn);
}
?>