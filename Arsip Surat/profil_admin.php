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
    <h2>Profil</h2>
<br>
    

</div>

<div class="container">
<div class="col-md-14">
<div class="panel panel-default">
  <div class="panel-body" style="font-size: 15px;box-shadow: 0 5px 5px rgba(0, 0, 0, 0.3);">
<form>
    <div class="form-inline">
  <div class="form-group" style="margin-right: 60px">
    <label for="id_user">Id User:</label><br>
    <input type="text" class="form-control" id="id_user" style="width: 300px" value="<?php echo $data['id_user']; ?>" readonly>
  </div>
  <div class="form-group">
    <label for="nama">Nama:</label><br>
    <input type="text" class="form-control" id="nama" style="width: 300px" value="<?php echo $data['nama_user']; ?>" readonly>
  </div>
  </div><br>
  <div class="form-inline">
  <div class="form-group" style="margin-right: 60px">
    <label for="password">Password:</label><br>
    <input type="password" class="form-control" id="password" style="width: 300px" value="<?php echo $data['password']; ?>" readonly>
  </div>
  
  </div>
  <br>
  <a href="edit_profil_admin.php" class="btn btn-success btn-md">
        <span class="glyphicon glyphicon glyphicon-edit"></span>&nbsp Edit Profil</a>
  
</form>

</div>
</div>
</div>
</div>
</body>



