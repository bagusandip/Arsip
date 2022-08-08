<?php
  $no_surat_masuk=$_GET['no_surat_masuk'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Beranda Admin</title>
	<?php include 'header_admin.php' ?>
  <style type="text/css">
    #tabeltambah tr td{
    padding-bottom: 20px;
    padding-left: 10px;
  }
  </style>
	<div class="container">
	<h2>Tambah Disposisi Surat<hr></h2>
</div>
</head>
<body>
<div class="container">
	<form  action="proses_tambah_disposisi.php" method="post">
	<table id="tabeltambah">
  <tr>
      <td><label>Tujuan Disposisi</label></td>
      <td><select name="tujuan" class="form-control">
    <option value="">Pilih Tujuan</option>
    <?php
    include 'koneksi.php';
    $sql = mysql_query("SELECT * FROM user where level='User'");
    if(mysql_num_rows($sql) != 0){
        while($data = mysql_fetch_assoc($sql)){
            ?>
            <option value="<?=$data['id_user']?>">
            <?php
            echo $data['nama_user'].'</option>';
        }
    }
    ?>
</select></td>
    </tr>
  <tr>
    <td><label for="isi">Isi Disposisi</label></td>
    <td><input type="text" name="isi" class="form-control" id="isi" style="width: 500px"></td>
    <td><input type="hidden" name="no_surat_masuk" class="form-control" style="width: 500px" value="<?php echo $no_surat_masuk; ?>"></td>
  </tr>
  <tr>
  		<td><label for="sel1">Sifat Disposisi</label></td>
  		<td><select class="form-control" id="sel1" name="sifat">
    <option value="Biasa">Biasa</option>
    <option value="Penting">Penting</option>
    <option value="Segera">Segera</option>
    <option value="Rahasia">Rahasia</option>
  </select></td>
  	</tr>
  </table>
  <br>
  <button class="btn btn-primary btn-md" style="width: 100px">
        <span class="glyphicon glyphicon-plus-sign"></span>&nbsp Tambah</button>
        <a href="surat_masuk.php" class="btn btn-danger btn-md" style="width: 100px">
        <span class="glyphicon glyphicon glyphicon-remove"></span>&nbsp Batal</a>
  

  

</form>
</div>
</body>