<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $gender = $_POST['gender'];
  $age = $_POST['age'];
  
  // Lakukan validasi dan pemrosesan sign in di sini
  // Contoh sederhana untuk validasi:
  

   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Login berhasil
    echo 'Sigin berhasil!';
  } else {
    // Login gagal
    echo 'Signin gagal!';
  }
}
?>
