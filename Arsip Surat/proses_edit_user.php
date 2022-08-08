<?php
	include "koneksi.php";

    $id_user = $_POST['id_user'];
    $id_user_1 = $_POST['id_user_1'];
    $nama_user = $_POST['nama_user'];
	$password = $_POST['password'];

	
	$query = mysql_query("update user set id_user='$id_user', nama_user='$nama_user', password='$password' where id_user='$id_user_1'") or die (mysql_error());
	
	if($query) {
		 echo "<script> window.alert('Data Berhasil Diubah');
                                window.location = 'user.php';
                       </script>";
	}
	else {
		 echo "<script> window.alert('Data Gagal Diubah');
                                window.location = 'user.php';
                       </script>";
	}
?>