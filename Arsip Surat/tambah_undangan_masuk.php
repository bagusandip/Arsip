<!DOCTYPE html>
<html>
<head>
	<title>Tambah Undangan</title>
  <style type="text/css">
    #tabeltambah tr td{
    padding-bottom: 20px;
    padding-left: 10px;
  }
  </style>
  </head>
	<?php include 'header_admin.php' ?>
  <script>
    $(document).ready(function(){
      $("#tgl_surat_undangan").change(function(){
        $("#tgl_undangan").attr("min", $("#tgl_surat_undangan").val());
      });
    });
  </script>
	<div class="container">
	<h2>Tambah Data Undangan Masuk<hr></h2>
  <ul class="breadcrumb">
        <li><a href="beranda_admin.php">Beranda</a></li>
        <li><a href="undangan_masuk.php">Arsip Undangan Masuk</a></li>
        <li>Tambah Data Undangan Masuk</li>
  </ul>
  </div>
<body>
<div class="container">
	<form  action="proses_tambah_undangan_masuk.php" method="post">
	<table id="tabeltambah">
  <tr>
      <td><label for="no_agenda">Nomor Agenda</label></td>
      <td><input type="number" name="no_agenda" class="form-control" id="no_agenda" style="width: 500px" required></td>
    </tr>
    <tr>
      <td><label for="no_surat_undangan">No. Surat Undangan</label></td>
      <td><input type="text" name="no_surat_undangan" class="form-control" id="no_surat_undangan" style="width: 500px" required></td>
    </tr>
    <tr>
      <td><label for="tgl_surat_undangan" style="margin-right: 80px">Tanggal Surat Undangan</label></td>
      <td> <input type="date" name="tgl_surat_undangan" class="form-control" id="tgl_surat_undangan" style="width: 200px" required></td>
    </tr>
    <tr>
      <td><label for="pengirim">Pengirim</label></td>
      <td><input type="text" name="pengirim" class="form-control" id="pengirim" style="width: 500px" required></td>
    </tr>
    <tr>
      <td><label for="tgl_undangan">Tanggal Acara</label></td>
      <td><input type="date" name="tgl_undangan" class="form-control" id="tgl_undangan" style="width: 200px" required></td>
    </tr>
  	<tr>
  		<td><label for="waktu">Waktu</label></td>
  		<td><input type="time" name="waktu" class="form-control" id="waktu" style="width: 140px" required></td>
  	</tr>
    <tr>
      <td><label for="tempat">Tempat</label></td>
      <td><input type="text" name="tempat" class="form-control" id="tempat" style="width: 500px" required></td>
    </tr>
  	<tr>
  		<td><label for="perihal">Perihal</label></td>
  		<td><textarea type="text" name="perihal" id="perihal" style="width: 500px; height: 100px" required></textarea></td>
  	</tr>
  </table>
  <br>
  <button onclick="return confirm('Apakah Data Sudah Benar ?')" type="submit" name="submit" class="btn btn-primary btn-md" style="width: 100px"><span class="glyphicon glyphicon glyphicon-floppy-disk"></span>&nbsp Tambah</button>
  <a href="undangan_masuk.php" class="btn btn-danger btn-md" style="width: 100px"><span class="glyphicon glyphicon glyphicon-remove"></span>&nbsp Batal</a>
  
</form>
</div>
</body>