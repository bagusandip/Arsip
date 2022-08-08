<!DOCTYPE html>
<html>
<head>
	<title>Beranda Admin</title>
	<?php include 'header_admin.php' ?>
  <script>
    $(document).ready(function(){
      $("#tgl").change(function(){
        $("#tgl_keberangkatan").attr("min", $("#tgl").val());
      });
      $("#tgl_keberangkatan").change(function(){
        $("#tgl_keberangkatan_1").attr("min", $("#tgl_keberangkatan").val());
      });
    });
  </script>
	<div class="container">
	<h2>Tambah Data Surat Tugas<hr></h2>
  <ul class="breadcrumb">
        <li><a href="beranda_admin.php">Beranda</a></li>
        <li><a href="surat_tugas.php">Arsip Surat Tugas</a></li>
        <li>Tambah Data Surat Tugas</li>
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
	<form  action="proses_tambah_surat_tugas.php" method="post">
	<table id="tabeltambah">
  <tr>
    <td><label for="no_agenda">Nomor Agenda</label></td>
    <td><input type="number" name="no_agenda" class="form-control" id="no_agenda" style="width: 500px" required></td>
  </tr>
	<tr>
		<td><label for="nomor">Nomor Surat</label></td>
		<td><input type="text" name="no_surat_tugas" class="form-control" id="nomor" style="width: 500px" required=""></td>
	</tr>
  <tr>
      <td><label for="tgl">Tanggal Surat</label></td>
      <td><input type="date" name="tgl_surat" class="form-control" id="tgl" style="width: 200px" required=""></td>
    </tr>
    <tr>
      <td><label for="tgl_keberangkatan">Tanggal Keberangkatan</label></td>
      <td><input type="date" name="tgl_keberangkatan" class="form-control" id="tgl_keberangkatan" style="width: 200px; float: left;" required="">
      <label style="float: left;"> s/d </label>
       <input type="date" name="tgl_keberangkatan_1" class="form-control" id="tgl_keberangkatan_1" style="width: 200px; float: left;" required=""></td>
    </tr>
	<tr>
		<td><label for="perihal">Perihal</label></td>
		<td><textarea type="text" name="perihal" id="perihal" style="width: 500px; height: 100px" required=""></textarea></td>
	</tr>
  	<tr>
  		<td><label for="tujuan">Tujuan</label></td>
  		<td><input type="text" name="tujuan" class="form-control" id="tujuan" style="width: 500px" required=""></td>
  	</tr>
    <tr>
      <td><label for="keterangan">Keterangan</label></td>
      <td><input type="text" name="keterangan" class="form-control" id="keterangan" style="width: 200px" required=""></td>
    </tr>
  </table>
  <br>
  <button onclick="return confirm('Apakah Data Sudah Benar ?')" class="btn btn-primary btn-md" style="width: 100px">
        <span class="glyphicon glyphicon-plus-sign"></span>&nbsp Tambah</button>
        <a href="surat_tugas.php" class="btn btn-danger btn-md" style="width: 100px">
        <span class="glyphicon glyphicon glyphicon-remove"></span>&nbsp Batal</a>
  
</form>
</div>
</body>