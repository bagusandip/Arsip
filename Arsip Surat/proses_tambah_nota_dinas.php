<?php
	// session_start();
	// if(! isset($_SESSION['username'])){
	// 	header("Location: index.php");
	// }else{
	include 'koneksi.php';

	$no_agenda=$_POST['no_agenda'];
	$no_surat_nota_dinas=$_POST['no_surat_nota_dinas'];
	$tgl_surat=$_POST['tgl_surat'];
	$perihal=$_POST['perihal'];
	$tujuan=$_POST['tujuan'];
	

	$query=mysql_query("insert into nota_dinas values('$no_agenda','$no_surat_nota_dinas','$tgl_surat','$perihal','$tujuan')");

	if($query){
		echo "<script> window.alert('Data Tersimpan');
				   window.location = 'nota_dinas.php';
		  </script>"; //pop up pd windows
	} else{
		echo "<script> window.alert('Gagal Tersimpan');
					window.location = 'tambah_nota_dinas.php';
		  </script>"; //pop up pd windows
	}
	// }
?>
