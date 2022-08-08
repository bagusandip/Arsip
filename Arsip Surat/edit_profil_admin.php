<!DOCTYPE html>
<html>
<head>
    <title>Beranda Admin</title>
    <?php include 'header_admin.php';
    $id_user=$_SESSION['id_user'];
    include 'koneksi.php';
    $query = mysql_query("select * from user where id_user='$id_user'") or die (mysql_error());
    $data= mysql_fetch_array($query) or die(mysql_error());  
    ?>
    <div class="container">
    <h2>Edit Profil</h2>
<br>
    

</div>
<div class="container">
<div class="col-md-14">
<div class="panel panel-default">
  <div class="panel-body" style="font-size: 15px;box-shadow: 0 5px 5px rgba(0, 0, 0, 0.3);">
<form  action="proses_edit_profil_admin.php" method="post">
    <div class="form-inline">
  <div class="form-group" style="margin-right: 60px">
    <label for="id_user">Id User:</label><br>
    <input type="text" name="id_user" class="form-control" id="id_user" style="width: 300px" value="<?php echo $data['id_user']; ?>">
    <input type="hidden" name="id_user_lama" class="form-control" id="id_user" style="width: 300px" value="<?php echo $data['id_user']; ?>">
  </div>
  <div class="form-group">
    <label for="nama">Nama:</label><br>
    <input type="text" name="nama_user" class="form-control" id="nama" style="width: 300px" value="<?php echo $data['nama_user']; ?>">
  </div>
  </div><br>
  <div class="form-inline">
  <div class="form-group" style="margin-right: 60px">
    <label for="password">Password:</label><br>
    <input type="password" name="password" class="form-control" id="password" style="width: 300px" value="<?php echo $data['password']; ?>">
  </div>
  
  </div>
  <br>
  <button class="btn btn-primary btn-md" style="width: 100px">
        <span class="glyphicon glyphicon-floppy-disk"></span>&nbsp Simpan</button>
        <a href="profil_admin.php" class="btn btn-danger btn-md" style="width: 100px">
        <span class="glyphicon glyphicon glyphicon-remove"></span>&nbsp Batal</a>
  
</form>
</div>
</div>
</div>
</div>

</body>


