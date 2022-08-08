<?php
	include "koneksi.php";
	$id_user= $_POST['id_user'];
	$id_user_lama= $_POST['id_user_lama'];
    $nama_user = $_POST['nama_user'];
    $password = $_POST['password'];
	
	$query = mysql_query("update user set id_user='$id_user', nama_user='$nama_user', password='$password' where id_user ='$id_user_lama'") or die (mysql_error());
	
	if($query) {
		echo "<script> window.alert('Data Berhasil Diubah');
                                window.location = 'profil_admin.php';
                       </script>";
                       session_start(); 
                    $_SESSION['id_user']=$id_user;
	}
	else {
		echo "<script> window.alert('Data Gagal Diubah');
                                window.location = 'profil_admin.php';
                       </script>";
	}
?>