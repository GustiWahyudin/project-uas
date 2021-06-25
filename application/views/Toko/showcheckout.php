<!DOCTYPE html>
<html>
<head>
	<title>	Konfirmasi Pesanan </title>
	<link rel="stylesheet" type="text/css" href="dataregistrasi.css">
</head>
<body bgcolor="#5F9EA0">
	<center>
		<br>
		<br>
		<br>
<h2>Pesanan Berhasil Dipesan </h2>
<div class="kotak_regist">
<table bgcolor="#778899" border="0.5" cellpadding="5" height="200" width="400" table align="center" cellspacing=3>
	<br>
	<br>
	<br>
	<br>
	<br>
	<tr>
		<td>Nama :</td>
		<td><?php echo $_POST ["nama"]; ?></td>
	</tr>
	<tr>
		<td>Nomer Handphone :</td>
		<td><?php echo $_POST ["nomor"]; ?></td>
	</tr>
	<tr>
		<td>Email :</td>
		<td><?php echo $_POST ["email"]; ?></td>
	</tr>
	<tr>
		<td>Alamat :</td>
		<td><?php echo $_POST ["alamat"]; ?></td>
	</tr>
</table>
</div>
<br>
<br>
<button><a href="http://localhost/toko-kue/Toko/"> Back To Home</button>
</center>
</body>
</html>