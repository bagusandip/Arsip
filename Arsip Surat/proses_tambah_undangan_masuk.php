<?php
	// session_start();
	// if(! isset($_SESSION['username'])){
	// 	header("Location: index.php");
	// }else{
	include 'koneksi.php';

	$no_agenda=$_POST['no_agenda'];
	$no_surat_undangan=$_POST['no_surat_undangan'];
	$tgl_surat_undangan=$_POST['tgl_surat_undangan'];
	$pengirim=$_POST['pengirim'];
	$tgl_undangan=$_POST['tgl_undangan'];
	$waktu=$_POST['waktu'];
	$tempat=$_POST['tempat'];
	$perihal=$_POST['perihal'];
	
	

	$query=mysql_query("insert into undangan_masuk values('$no_agenda','$no_surat_undangan','$tgl_surat_undangan','$pengirim','$tgl_undangan','$waktu','$tempat','$perihal','')");

	if($query){
		echo "<script> window.alert('Data Tersimpan');
				   window.location = 'undangan_masuk.php';
		  </script>"; //pop up pd windows
	} else{
		echo "<script> window.alert('Gagal Tersimpan');
					window.location = 'tambah_undangan_masuk.php';
		  </script>"; //pop up pd windows
	}
	// }
?>
