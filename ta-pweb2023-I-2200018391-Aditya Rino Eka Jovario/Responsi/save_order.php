<?php
  $data = $_POST['data'];
  
  $file = fopen("orders.txt", "a");
  fwrite($file, $data);
  fclose($file);
?>