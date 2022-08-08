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
  <h2>Silahkan Cek Kembali Sebelum Data Disimpan<hr></h2>
  </div>
<body>
<div class="container">
  <form action="proses_tambah_surat_masuk.php" method="post">
  <table id="tabeltambah">
  <tr>
    <td><label for="no_agenda">Nomor Agenda</label></td>
    <td><input type="number" name="no_agenda" class="form-control" id="no_agenda" style="width: 500px" value="<?php echo $no_agenda; ?>" readonly></td>
  </tr>
  <tr>
    <td><label for="lampiran">Lampiran</label></td>
    <td><input type="text" name="lampiran" class="form-control" id="lampiran" style="width: 500px" value="<?php echo $lampiran; ?>" readonly></td>
  </tr>
  <tr>
      <td><label for="pengirim" style="margin-right: 80px">Pengirim</label></td>
      <td> <input type="text" name="pengirim" class="form-control" id="pengirim" style="width: 500px" value="<?php echo $pengirim; ?>" readonly></td>
    </tr>
    <tr>
      <td><label for="tgl_surat">Tanggal Surat</label></td>
      <td><input type="date" name="tgl_surat" class="form-control" id="tgl_surat" style="width: 200px" value="<?php echo $tgl_surat; ?>" readonly></td>
    </tr>
    <tr>
      <td><label for="tgl_terima">Tanggal Terima</label></td>
      <td><input type="date" name="tgl_terima" class="form-control" id="tgl_terima" style="width: 200px" value="<?php echo $tgl_terima; ?>" readonly></td>
    </tr>
  <tr>
    <td><label for="no_surat">Nomor Surat</label></td>
    <td><input type="text" name="no_surat" class="form-control" id="no_surat" style="width: 500px" value="<?php echo $no_surat; ?>" readonly></td>
  </tr>
  <tr>
    <td><label for="perihal">Perihal</label></td>
    <td><textarea type="text" name="perihal" class="form-control" id="perihal" style="width: 500px; height: 100px" readonly><?php echo $perihal; ?></textarea></td>
  </tr>
  </table>
  <br>

   <a href="tambah_surat_masuk.php" class="btn btn-success btn-md" style="width: 100px">
        <span class="glyphicon glyphicon glyphicon-remove"></span>&nbsp Edit</a>
  <button onclick="return confirm('Apakah Data Sudah Benar ?')" type="submit" class="btn btn-primary btn-md" style="width: 100px">
        <span class="glyphicon glyphicon-floppy-disk"></span>&nbsp Simpan</button>
       
  
</form>
</div>
</body>
</html>