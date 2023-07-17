<?php
	$arrNilai=array("Adit"=>80, "Joko"=>70, "Budi"=>75, "Yono"=>85);
	echo "<b>Array sebelum diurutkan</b>";
	echo "<pre>";
	print_r($arrNilai);
	echo "</pre>";

	asort($arrNilai);
	reset($arrNilai);
	echo "<b>Array setelah diurutkan dengan asort()</b>";
	echo "<pre>";
	print_r($arrNilai);
	echo "</pre>"; 

	arsort($arrNilai);
	reset($arrNilai);
	echo "<b>Array setelah diurutkan dengan arsort()</b>";
	echo "<pre>";
	print_r($arrNilai);
	echo "</pre>"; 
?>