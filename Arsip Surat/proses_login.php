<?php
include 'koneksi.php';
session_start();
$id = $_POST['id'];
$password = $_POST['password'];
$sql = mysql_query("select * from user where id_user='$id' AND password='$password'");
$num = mysql_num_rows($sql);
$data = mysql_fetch_array($sql);

if($num==1)
{
	if ($data['level']=="Admin") {
		$_SESSION['id_user']= $id;
		echo "<script>
				   window.location = 'beranda_admin.php';
		</script>"; 
	}elseif ($data['level']=="User"){
		$_SESSION['id_user']= $id;
		echo "<script>
				   window.location = 'beranda_admin.php';
		</script>"; 
	}
}else{
	echo "<script> window.alert('Login Gagal');
				   window.location = 'index.php';
		  </script>"; 
}
?>