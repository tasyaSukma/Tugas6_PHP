<?php
	$hargaJambu = 15000;
	$dus = 6;
	$kgperdus = 5;
	$hargabekasdus = 2000;
	$totalPenjualan = (($dus*$kgperdus)*$hargaJambu) + ($hargabekasdus * $dus);

	echo "=======================================================<br>";
	echo "Harga Jambu = Rp $hargaJambu / Kg<br>Harga Kardus = Rp $hargabekasdus<br>Total Penjualan (Dus dan Jambu) = Rp $totalPenjualan<br>";
	echo "=======================================================<br>";
?>