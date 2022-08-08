<?php
        include 'koneksi.php';
  $no_agenda=$_POST['no_agenda'];
  $lampiran=$_POST['lampiran'];
  $pengirim=$_POST['pengirim'];
  $tgl_surat=$_POST['tgl_surat'];
  $tgl_terima=$_POST['tgl_terima'];
  $no_surat=$_POST['no_surat'];
  $perihal=$_POST['perihal'];    
      ?>
<!DOCTYPE html>
<html>
<head>
	<title>Beranda Admin</title>
  <style type="text/css">
    #tabeltambah tr td{
    padding-bottom: 20px;
    padding-left: 10px;
  }
  </style>
  </head>
	<?php include 'header_admin.php' ?>

	<div class="container">
	<h2>Edit Data Surat Masuk<hr></h2>
  <ul class="breadcrumb">
        <li><a href="beranda_admin.php">Beranda</a></li>
        <li><a href="surat_masuk.php">Arsip Surat Masuk</a></li>
        <li>Edit Data Surat Masuk</li>
  </ul>
  </div>
<body>
<div class="container">
	<form action="proses_edit_surat_masuk.php" method="post">
	<table id="tabeltambah">
  <tr>
    <td><label for="no_agenda">Nomor Agenda</label></td>
    <td><input type="number" name="no_agenda" class="form-control" id="no_agenda" style="width: 500px" value="<?php echo $data['no_agenda']; ?>" required></td>
  </tr>
  <tr>
    <td><label for="lampiran">Lampiran</label></td>
    <td><input type="text" name="lampiran" class="form-control" id="lampiran" style="width: 500px" value="<?php echo $data['lampiran']; ?>" required></td>
  </tr>
  <tr>
      <td><label for="pengirim" style="margin-right: 80px">Pengirim</label></td>
      <td> <input type="text" name="pengirim" class="form-control" id="pengirim" style="width: 500px" value="<?php echo $data['pengirim']; ?>" required></td>
    </tr>
    <tr>
      <td><label for="tgl_surat">Tanggal Surat</label></td>
      <td><input type="date" name="tgl_surat" class="form-control" id="tgl_surat" style="width: 200px" value="<?php echo $data['tgl_surat']; ?>" required></td>
    </tr>
    <tr>
      <td><label for="tgl_terima">Tanggal Terima</label></td>
      <td><input type="date" name="tgl_terima" class="form-control" id="tgl_terima" style="width: 200px" value="<?php echo $data['tgl_terima']; ?>" required></td>
    </tr>
	<tr>
		<td><label for="no_surat_masuk">Nomor Surat</label></td>
		<td><input type="text" name="no_surat_masuk" class="form-control" id="no_surat_masuk" style="width: 500px" value="<?php echo $data['no_surat_masuk']; ?>" required></td>
    <td><input type="hidden" name="no_surat_masuk_1" class="form-control" style="width: 500px" value="<?php echo $data['no_surat_masuk']; ?>"></td>
	</tr>
	<tr>
		<td><label for="perihal">Perihal</label></td>
		<td><textarea type="text" name="perihal" class="form-control" id="perihal" style="width: 500px; height: 100px" required><?php echo $data['perihal']; ?></textarea></td>
	</tr>
  <tr>
    <td><label for="keterangan">Keterangan</label></td>
    <td><input type="text" name="keterangan" class="form-control" id="keterangan" style="width: 500px" value="<?php echo $data['keterangan']; ?>" required></td>
  </tr>
  </table>
  <br>

  <button type="submit" class="btn btn-primary btn-md" style="width: 100px">
        <span class="glyphicon glyphicon-floppy-disk"></span>&nbsp Simpan</button>
        <a href="surat_masuk.php" class="btn btn-danger btn-md" style="width: 100px">
        <span class="glyphicon glyphicon glyphicon-remove"></span>&nbsp Batal</a>
  
</form>
</div>
</body>
</html>