function calculateTotal() {
    alert("Order saved successfully!");
  var item1 = document.getElementById('item1').value;
  var item2 = document.getElementById('item2').value;
  var item3 = document.getElementById('item3').value;
  var item4 = document.getElementById('item4').value;
  var item5 = document.getElementById('item5').value;
  
  var totalPrice = parseInt(item1) * 100000 + parseInt(item2) * 150000 + parseInt(item3) * 75000 + parseInt(item4) * 200000 + parseInt(item5) * 120000;
  
  document.querySelector('.total-price').innerHTML = "Total Harga: Rp " + totalPrice;


  // Simpan data pesanan ke file txt menggunakan AJAX
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "save_order.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      console.log(xhr.responseText);
    }
  };
  var params = "item1=" + item1 + "&item2=" + item2 + "&item3=" + item3 + "&item4=" + item4 + "&item5=" + item5;
  xhr.send(params);
  
  return true;
}
