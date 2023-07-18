<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];
  
  if ($email === 'pweb@gmail.com' && $password === 'password123') {
    echo 'Login berhasil!';
  } else {
    echo 'Email atau password salah!';
  }
}
?>
