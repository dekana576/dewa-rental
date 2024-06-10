




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pemesanan Rental</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      backgroun
      font-family: sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .container {
      display: flex;
      gap: 20px;
      background-color: #f5f5f5;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .card {
      flex: 1;
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
    }

    .card h2 {
      margin-bottom: 10px;
    }

    .card .circle {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background-color: #6c757d;
      margin: 0 auto;
      margin-bottom: 10px;
    }

    .card .data-pemesanan {
      margin-bottom: 20px;
    }

    .card .data-pemesanan input {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .card .syarat-pemesanan {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }

    .card .syarat-pemesanan button {
      background-color: #6c757d;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .modal {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      z-index: 10;
      display: none;
    }

    .modal-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }

    .modal-header h3 {
      margin: 0;
    }

    .modal-header .close {
      cursor: pointer;
    }

    .modal-body {
      margin-bottom: 20px;
    }

    .modal-body label {
      display: block;
      margin-bottom: 5px;
    }

    .modal-body input[type="checkbox"] {
      margin-right: 5px;
    }

    .modal-footer {
      text-align: center;
    }

    .modal-footer button {
      background-color: #6c757d;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
  </style>
</head>

<body>
  <div class="container dark:bg-cyan-600">
    <div class="card">
      <h2>Pemesanan Anda</h2>
      <div class="circle"></div>
      <div class="data-pemesanan">
        <input type="text" placeholder="Nama Lengkap">
        <input type="text" placeholder="No. Handphone">
        <input type="email" placeholder="Email">
      </div>
      <div class="syarat-pemesanan">
        <button>Syarat Pemesanan</button>
      </div>
    </div>
   

  <div class="modal" id="modalSyarat">
    <div class="modal-header">
      <h3>Syarat Rental</h3>
      <span class="close" onclick="closeModal()">&times;</span>
    </div>
    <div class="modal-body">
      <label>
        <input type="checkbox"> Pilih Semua
      </label>
      <label>
        <input type="checkbox"> e-KTP/paspor
        <small>Pergonal harus menlampirkan penyalin foto e-KTP/paspor menua</small>
      </label>
      <label>
        <input type="checkbox"> SIM
        <small>Pergonal harus menlampirkan penyalin foto SIM menua</small>
      </label>
    </div>
    <div class="modal-footer">
      <button onclick="closeModal()">Simpan</button>
    </div>
  </div>

  <script>
    function openModal() {
      document.getElementById("modalSyarat").style.display = "block";
    }

    function closeModal() {
      document.getElementById("modalSyarat").style.display = "none";
    }

    document.querySelectorAll(".syarat-pemesanan button").forEach(button => {
      button.addEventListener("click", openModal);
    });
  </script>
    
</body>
</html>