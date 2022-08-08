<?php
	// session_start();
	// if(! isset($_SESSION['username'])){
	// 	header("Location: index.php");
	// }else{
	include 'koneksi.php';

	$no_agenda=$_POST['no_agenda'];
	$no_surat_keluar=$_POST['no_surat_keluar'];
	$tgl_surat=$_POST['tgl_surat'];
	$tgl_berangkat=$_POST['tgl_berangkat'];
	$perihal=$_POST['perihal'];
	$tujuan=$_POST['tujuan'];
	$keterangan=$_POST['keterangan'];
	

	$query=mysql_query("insert into surat_keluar values('$no_agenda','$no_surat_keluar','$tgl_surat', '$tgl_berangkat','$perihal','$tujuan','$keterangan')");

	if($query){
		echo "<script> window.alert('Data Tersimpan');
				   window.location = 'surat_keluar.php';
		  </script>"; //pop up pd windows
	} else{
		echo "<script> window.alert('Gagal Tersimpan');
					window.location = 'tambah_surat_keluar.php';
		  </script>"; //pop up pd windows
	}
	// }
?>
