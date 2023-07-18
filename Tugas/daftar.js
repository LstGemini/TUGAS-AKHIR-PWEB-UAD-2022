function validateForm() {
  var email = document.getElementById('email').value;
  var password = document.getElementById('password').value;
  var age = document.getElementById('age').value;
  
  if (email === '' || password === '' || age === '') {
    alert('Semua field harus diisi');
    return false;
  }
  
  return true;
}

function goBack() {
  window.location.href = "login.html";

  
}
