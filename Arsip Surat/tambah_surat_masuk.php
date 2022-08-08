<!DOCTYPE html>
<html>
<head>
	<title>Beranda Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css.css">
  <script type="text/javascript" src="jquery.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $("#in").click(function(){
        $("#no_agenda2").val($("#no_agenda").val());
        $("#lampiran2").val($("#lampiran").val());
        $("#pengirim2").val($("#pengirim").val());
        $("#tgl_surat2").val($("#tgl_surat").val());
        $("#tgl_terima2").val($("#tgl_terima").val());
        $("#no_surat2").val($("#no_surat").val());
        $("#perihal2").val($("#perihal").val());
      });
    });
  </script>
  <script>
    $(document).ready(function(){
      $("#tgl_surat").change(function(){
        $("#tgl_terima").attr("min", $("#tgl_surat").val());
      });
    });
  </script>
  <style type="text/css">
  #tabeltambah tr td{
    padding-bottom: 20px;
    padding-left: 10px;
  }
</style>
</head>
<?php include 'header_admin.php' ?>

<div class="container">
	<h2>Tambah Data Surat Masuk<hr></h2>
  <ul class="breadcrumb">
    <li><a href="beranda_admin.php">Beranda</a></li>
    <li><a href="surat_masuk.php">Arsip Surat Masuk</a></li>
    <li>Tambah Data Surat Masuk</li>
  </ul>
</div>
<body>
  <div class="container">
   <form>
     <table id="tabeltambah">
      <tr>
        <td><label for="no_agenda">Nomor Agenda</label></td>
        <td><input type="number" name="no_agenda" class="form-control" id="no_agenda" style="width: 500px" required></td>
      </tr>
      <tr>
        <td><label for="lampiran">Lampiran</label></td>
        <td><input type="text" name="lampiran" class="form-control" id="lampiran" style="width: 500px" required></td>
      </tr>
      <tr>
        <td><label for="pengirim" style="margin-right: 80px">Pengirim</label></td>
        <td> <input type="text" name="pengirim" class="form-control" id="pengirim" style="width: 500px" required></td>
      </tr>
      <tr>
        <td><label for="tgl_surat">Tanggal Surat</label></td>
        <td><input type="date" name="tgl_surat" class="form-control" id="tgl_surat" style="width: 200px" required></td>
      </tr>
      <tr>
        <td><label for="tgl_terima">Tanggal Terima</label></td>
        <td><input type="date" name="tgl_terima" class="form-control" id="tgl_terima" style="width: 200px" required></td>
      </tr>
      <tr>
        <td><label for="no_surat">Nomor Surat</label></td>
        <td><input type="text" name="no_surat" class="form-control" id="no_surat" style="width: 500px" required></td>
      </tr>
      <tr>
        <td><label for="perihal">Perihal</label></td>
        <td><textarea type="text" name="perihal" id="perihal" style="width: 500px; height: 100px" required></textarea></td>
      </tr>
    </table>
    <br>
    <button type="button" id="in" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal" style="width: 100px"><span class="glyphicon glyphicon glyphicon-floppy-disk"></span>&nbsp Tambah</button> 
    <a href="surat_masuk.php" class="btn btn-danger btn-md" style="width: 100px"><span class="glyphicon glyphicon glyphicon-remove"></span>&nbsp Batal</a>
<!--   <button type="submit" name="submit" class="btn btn-primary btn-md" style="width: 100px"><span class="glyphicon glyphicon glyphicon-floppy-disk"></span>&nbsp Tambah</button>
  <a href="surat_masuk.php" class="btn btn-danger btn-md" style="width: 100px"><span class="glyphicon glyphicon glyphicon-remove"></span>&nbsp Batal</a>
-->  
</form>
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color: black">
        <button style="color: white" type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 style="color: white" class="modal-title">Silahkan Cek Kembali Sebelum Data Disimpan</h4>
      </div>
      <form action="proses_tambah_surat_masuk.php" method="post">
        <div class="modal-body">


          <table id="tabeltambah">
            <tr>
              <td><label for="no_agenda">Nomor Agenda</label></td>
              <td><input type="text" name="no_agenda" id="no_agenda2" required=""></td>
            </tr>
            <tr>
              <td><label for="lampiran">Lampiran</label></td>
              <td><input type="text" name="lampiran" id="lampiran2" required=""></td>
            </tr>
            <tr>
              <td><label for="pengirim">Pengirim</label></td>
              <td><input type="text" name="pengirim" id="pengirim2" required=""></td>
            </tr>
            <tr>
              <td><label for="tgl_surat">Tanggal Surat</label></td>
              <td><input type="date" name="tgl_surat" id="tgl_surat2" required=""></td>
            </tr>
            <tr>
              <td><label for="tgl_terima">Tanggal Terima</label></td>
              <td><input type="date" name="tgl_terima" id="tgl_terima2" required=""></td>
            </tr>
            <tr>
              <td><label for="no_surat">Nomor Surat</label></td>
              <td><input type="text" name="no_surat" id="no_surat2" required=""></td>
            </tr>
            <tr>
              <td><label for="perihal">Perihal</label></td>
              <td><textarea type="text" name="perihal" id="perihal2" style="width: 300px; height: 100px" required=""></textarea></td>
            </tr>
          </table>


        </div>
        <div class="modal-footer">

          <button type="submit" name="submit" class="btn btn-primary btn-md" style="width: 100px"><span class="glyphicon glyphicon glyphicon-floppy-disk"></span>&nbsp Simpan</button>
          <button type="button" data-dismiss="modal" class="btn btn-danger btn-md" style="width: 100px"><span class="glyphicon glyphicon glyphicon-remove"></span>&nbsp Batal</button>
        </div>
      </form>
    </div>

  </div>
</div>
</div>
</body>