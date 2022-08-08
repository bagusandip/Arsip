<?php
	// session_start();
	// if(! isset($_SESSION['username'])){
	// 	header("Location: index.php");
	// }else{
	include 'koneksi.php';

	$no_agenda=$_POST['no_agenda'];
	$lampiran=$_POST['lampiran'];
	$pengirim=$_POST['pengirim'];
	$tgl_surat=$_POST['tgl_surat'];
	$tgl_terima=$_POST['tgl_terima'];
	$no_surat=$_POST['no_surat'];
	$perihal=$_POST['perihal'];
	

	$query=mysql_query("insert into surat_masuk values('$no_agenda','$lampiran','$pengirim','$tgl_surat','$tgl_terima','$no_surat','$perihal','')");

	if($query){
		echo "<script> window.alert('Data Tersimpan');
				   window.location = 'surat_masuk.php';
		  </script>"; //pop up pd windows
	} else{
		echo "<script> window.alert('Gagal Tersimpan');
					window.location = 'tambah_surat_masuk.php';
		  </script>"; //pop up pd windows
	}
	// }
?>
