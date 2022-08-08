<!DOCTYPE html>
<html>
<head>
	<title>Beranda Admin</title>
	<?php include 'header_admin.php' ?>

	<div class="container">
	<h2>Tambah User<hr></h2>
</div>
<style type="text/css">
    #tabeltambah tr td{
    padding-bottom: 20px;
    padding-left: 10px;
  }
  </style>
</head>
<body>
<div class="container">
	<form  action="proses_tambah_user.php" method="post">
	<table id="tabeltambah">
	<tr>
    <td><label for="id">Id User</label></td>
    <td><input type="number" name="id_user" class="form-control" id="id" style="width: 300px"></td>
  </tr>
	<tr>
		<td><label for="nama">Nama</label></td>
		<td><input type="text" name="nama_user" class="form-control" id="nama" style="width: 300px"></td>
	</tr>
  <tr>
    <td><label for="password"d>Password User</label></td>
    <td><input type="text" name="password" class="form-control" id="password" style="width: 300px"></td>
  </tr>
  <tr>
  <td>
    <input hidden="" type="text" name="level" value="User">
  </td>
  	</tr>
  </table>
  <br>
  <button class="btn btn-primary btn-md" style="width: 100px">
        <span class="glyphicon glyphicon-plus-sign"></span>&nbsp Tambah</button>
        <a href="user.php" class="btn btn-danger btn-md" style="width: 100px">
        <span class="glyphicon glyphicon glyphicon-remove"></span>&nbsp Batal</a>
  
</form>
</div>
</body>