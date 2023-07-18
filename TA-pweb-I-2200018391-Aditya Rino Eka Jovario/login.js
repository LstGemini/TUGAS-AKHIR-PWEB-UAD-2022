function validateForm() {
  var email = document.getElementById('email').value;
  var password = document.getElementById('password').value;
  
  if (email === '' || password === '') {
    alert('Email dan password harus diisi');
    return false;
  }
  
  return true;
}

function redirectToSignup() {
  window.location.href = "daftar.html";
}
