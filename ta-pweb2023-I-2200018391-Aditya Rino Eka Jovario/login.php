<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];
  
  // Lakukan validasi dan pemrosesan login di sini
  // Contoh sederhana untuk validasi:
  
  if ($email === 'pweb@gmail.com' && $password === 'password123') {
    // Login berhasil
    echo 'Login berhasil!';
  } else {
    // Login gagal
    echo 'Email atau password salah!';
  }
}
?>
