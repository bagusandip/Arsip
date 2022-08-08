<?php
        include 'koneksi.php';
        $id_user= $_GET['id_user'];
        $query = mysql_query("select * from user where id_user='$id_user'") or die (mysql_error());
        $data= mysql_fetch_array($query) or die(mysql_error());     
      ?>
<!DOCTYPE html>
<html>
<head>
	<title>Beranda Admin</title>
	<?php include 'header_admin.php' ?>

	<div class="container">
	<h2>Edit User<hr></h2>
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
	<form  action="proses_edit_user.php" method="post">
	<table id="tabeltambah">
	<tr>
		<td><label for="id_user">Id User</label></td>
		<td><input type="text" name="id_user" class="form-control" id="id_user" style="width: 300px" value="<?php echo $data['id_user']; ?>"></td>
        <td><input type="hidden" name="id_user_1" class="form-control" id="id_user_1" style="width: 300px" value="<?php echo $data['id_user']; ?>"></td>
	</tr>
	<tr>
		<td><label for="nama_user">Nama</label></td>
		<td><input type="text" name="nama_user" class="form-control" id="nama_user" style="width: 300px" value="<?php echo $data['nama_user']; ?>"></td>
	</tr>
  <tr>
    <td><label for="password">Password User</label></td>
    <td><input type="text" name="password" class="form-control" id="password" style="width: 300px" value="<?php echo $data['password']; ?>"></td>
  </tr>
  </table>
  <br>
  <button type="submit" class="btn btn-primary btn-md" style="width: 100px">
        <span class="glyphicon glyphicon-save-file"></span>&nbsp Simpan</button>
        <a href="user.php" class="btn btn-danger btn-md" style="width: 100px">
        <span class="glyphicon glyphicon glyphicon-remove"></span>&nbsp Batal</a>
  
</form>
</div>
</body>