<!DOCTYPE html>
<html>
<head>
    <title> Form Order </title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('Assets/'); ?>css/register.css">
    <form action="showcheckout" method="post">
</head>
<body>
    <p class="texton"> Form Order </p>
    <div class="container">
        <p class="label"> Masukkan Nama</p>
        <input type="text" name="nama" placeholder="Masukan Nama">
        <p class="label"> Nomor Handphone </p>
        <input type="text" name="nomor" placeholder="Masukan Nomor Handphone">
        <p class="label"> Masukan Email </p>
        <input type="text" name="email" placeholder="Masukan Email">
        <p class="label"> Alamat  </p>
        <input type="text" name="alamat" placeholder="Masukan alamat">
        <button class="Order"> Place Order </button>
    </div>
</body>
</html>