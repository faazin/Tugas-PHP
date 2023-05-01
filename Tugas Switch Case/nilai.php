
<form action="">
	<label>Nilai :</label>
	<input type="number" name="nilai" placeholder="Masukan Nilai Anda">
	<button type="submit" name="proses">Proses</button>
</form>


<?php

if(isset($_GET['proses'])){
	$nilai = $_GET['nilai'];

	switch ($nilai)
	{
		case ($nilai <= 100 && $nilai >= 90) :
			echo 'Nilai anda adalah A';
			break;
		case ($nilai < 90 && $nilai >= 80) :
			echo 'Nilai anda adalah B';
			break;
		case ($nilai < 80 && $nilai >= 70) :
			echo 'Nilai anda adalah C';
			break;
		case ($nilai < 70 && $nilai >=  0) :
			echo 'Nilai anda adalah D';
			break;
	}
}
?>
