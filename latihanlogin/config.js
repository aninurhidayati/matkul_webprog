document.getElementById("txt_nama").onkeyup = function () {
  //misal di input syarif
  let txnama = document.getElementById("txt_nama").value; //syarif
  let txnama2 = txnama.toUpperCase(); //ubah karakter jadi huruf kapital
  document.getElementById("txt_nama").value = txnama2;
};

document.getElementById("txt_pasw2").onchange = function () {
  let pas1 = document.getElementById("txt_pasw").value;
  let pas2 = document.getElementById("txt_pasw2").value;
  if (pas1 === pas2) {
    alert("oke password sama");
    document.getElementById("btn_simpanuser").disabled = false;
  } else {
    alert("password tidak sama");
    document.getElementById("btn_simpanuser").disabled = true;
  }
};
