<?php
	include 'koneksi.php';

	$id_user=$_POST['id_user'];
	$password=$_POST['password'];
	$nama_user=$_POST['nama_user'];
	$level=$_POST['level'];

	$query=mysql_query("insert into user values('$id_user','$nama_user','$password','$level')");

	if($query){
		echo "<script> window.alert('Data Tersimpan');
				   window.location = 'user.php';
		  </script>"; //pop up pd windows
	} else{
		echo "<script> window.alert('Gagal Tersimpan');
					
		  </script>"; //pop up pd windows
	}
	// }
?>
