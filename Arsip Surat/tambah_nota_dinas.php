<!DOCTYPE html>
<html>
<head>
	<title>Beranda Admin</title>
	<?php include 'header_admin.php' ?>

	<div class="container">
	<h2>Tambah Data Nota Dinas<hr></h2>
  <ul class="breadcrumb">
        <li><a href="beranda_admin.php">Beranda</a></li>
        <li><a href="nota_dinas.php">Arsip Nota Dinas</a></li>
        <li>Tambah Data Nota Dinas</li>
  </ul>
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
	<form  action="proses_tambah_nota_dinas.php" method="post">
	<table id="tabeltambah">
  <tr>
    <td><label for="no_agenda">Nomor Agenda</label></td>
    <td><input type="number" name="no_agenda" class="form-control" id="no_agenda" style="width: 500px" required></td>
  </tr>
	<tr>
		<td><label for="nomor">Nomor Surat</label></td>
		<td><input type="text" name="no_surat_nota_dinas" class="form-control" id="nomor" style="width: 500px" required=""></td>
	</tr>
  <tr>
      <td><label for="tgl">Tanggal Surat</label></td>
      <td><input type="date" name="tgl_surat" class="form-control" id="tgl" style="width: 200px" required=""></td>
    </tr>
	<tr>
		<td><label for="perihal">Perihal</label></td>
		<td><textarea type="text" name="perihal" id="perihal" style="width: 500px; height: 100px" required=""></textarea></td>
	</tr>
  	<tr>
  		<td><label for="tujuan">Tujuan</label></td>
  		<td><input type="text" name="tujuan" class="form-control" id="tujuan" style="width: 500px" required=""></td>
  	</tr>
  </table>
  <br>
  <button onclick="return confirm('Apakah Data Sudah Benar ?')" class="btn btn-primary btn-md" style="width: 100px">
        <span class="glyphicon glyphicon-plus-sign"></span>&nbsp Tambah</button>
        <a href="nota_dinas.php" class="btn btn-danger btn-md" style="width: 100px">
        <span class="glyphicon glyphicon glyphicon-remove"></span>&nbsp Batal</a>
  
</form>
</div>
</body>