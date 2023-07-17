<?php
	$arrNilai=array("Adit"=>80, "Budi"=>70, "Joko"=>75, "Yono"=>85);
	echo "Menampilkan isi array asosiatif dengan foreach: <br>";
	foreach($arrNilai as $nama=>$nilai){
		echo "Nilai $nama=$nilai<br>";
	}

	reset($arrNilai);
	echo "<br>Menampilkan isi array asosiatif dengan WHILE dan LIST: <br>";
	while(list($nama,$nilai)=each($arrNilai)){
		echo "Nilai $nama=$nilai<br>";
	} 
?>