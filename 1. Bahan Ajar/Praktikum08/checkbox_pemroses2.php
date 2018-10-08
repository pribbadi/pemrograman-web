<?php
	$jum_pesen=count($_POST['pesanan']);
	for ($i=0; $i < $jum_pesen; $i++) { 
		echo $_POST['pesanan'][$i]."<br>";
	}
?>