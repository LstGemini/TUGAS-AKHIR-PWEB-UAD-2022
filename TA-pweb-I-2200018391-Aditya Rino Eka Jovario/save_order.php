<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $item1 = $_POST['item1'];
  $item2 = $_POST['item2'];
  $item3 = $_POST['item3'];
  $item4 = $_POST['item4'];
  $item5 = $_POST['item5'];

  // Simpan data pesanan ke file txt
  $file = fopen("orders.txt", "a");
  $order = "Item 1: " . $item1 . ", Item 2: " . $item2 . ", Item 3: " . $item3 . ", Item 4: " . $item4 . ", Item 5: " . $item5 .",Total : ". $totalprice "\n";
  fwrite($file, $order);
  fclose($file);
}
?>
