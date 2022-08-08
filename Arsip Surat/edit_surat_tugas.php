<?php
        include 'koneksi.php';
        $no_surat_tugas=$_GET['no_surat_tugas'];
        $query = mysql_query("select * from surat_tugas where no_surat_tugas='$no_surat_tugas'") or die (mysql_error());
        $data= mysql_fetch_array($query) or die(mysql_error());     
      ?>
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
    <h2>Edit Data Surat Tugas<hr></h2>
    <ul class="breadcrumb">
        <li><a href="beranda_admin.php">Beranda</a></li>
        <li><a href="surat_tugas.php">Arsip Surat Tugas</a></li>
        <li>Edit Data Surat Tugas</li>
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
    <form  action="proses_edit_surat_tugas.php" method="post">
    <table id="tabeltambah">
     <tr>
        <td><label for="no_agenda">Nomor Agenda</label></td>
        <td><input type="number" name="no_agenda" class="form-control" id="no_agenda" style="width: 500px" value="<?php echo $data['no_agenda']; ?>"></td>
    </tr>
    <tr>
        <td><label for="no_surat_tugas">Nomor Surat</label></td>
        <td><input type="text" name="no_surat_tugas" class="form-control" id="no_surat_tugas" style="width: 500px" value="<?php echo $data['no_surat_tugas']; ?>"></td>
        <td><input type="hidden" name="no_surat_tugas_1" class="form-control" id="no_surat_tugas_1" style="width: 500px" value="<?php echo $data['no_surat_tugas']; ?>"></td>
    </tr>
    <tr>
      <td><label for="tgl_surat">Tanggal Surat</label></td>
      <td><input type="date" name="tgl_surat" class="form-control" id="tgl_surat" style="width: 200px" value="<?php echo $data['tgl_surat']; ?>"></td>
    </tr>
    <tr>
      <td><label for="tgl_keberangkatan">Tanggal Keberangkatan</label></td>
      <td><input type="date" name="tgl_keberangkatan" class="form-control" id="tgl_keberangkatan" style="width: 200px; float: left;" value="<?php echo $data['tgl_keberangkatan']; ?>">
      <label style="float: left;">s/d</label>
      <input type="date" name="tgl_keberangkatan_1" class="form-control" id="tgl_keberangkatan_1" style="width: 200px; float: left;" value="<?php echo $data['tgl_keberangkatan_1']; ?>"></td>
    </tr>
    <tr>
        <td><label for="perihal">Perihal</label></td>
        <td><textarea type="text" name="perihal" class="form-control" id="text" style="width: 500px; height: 100px" value=""><?php echo $data['perihal']; ?></textarea></td>
    </tr>
    <tr>
        <td><label for="tujuan">Tujuan</label></td>
        <td><input type="text" name="tujuan" class="form-control" id="tujuan" style="width: 500px" value="<?php echo $data['tujuan']; ?>"></td>
    </tr>
    <tr>
        <td><label for="keterangan">Keterangan</label></td>
        <td><input type="text" name="keterangan" class="form-control" id="keterangan" style="width: 500px" value="<?php echo $data['keterangan']; ?>"></td>
    </tr>
  </table>
  <br>
  <button class="btn btn-primary btn-md" style="width: 100px">
        <span class="glyphicon glyphicon-floppy-disk"></span>&nbsp Simpan</button>
        <a href="surat_tugas.php" class="btn btn-danger btn-md" style="width: 100px">
        <span class="glyphicon glyphicon glyphicon-remove"></span>&nbsp Batal</a>
  
</form>
</div>
</body>