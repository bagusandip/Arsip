<?php
	// session_start();
	// if(! isset($_SESSION['username'])){
	// 	header("Location: index.php");
	// }else{
	include 'koneksi.php';

	$no_surat_masuk=$_POST['no_surat_masuk'];
	$tujuan=$_POST['tujuan'];
	$isi=$_POST['isi'];
	$sifat=$_POST['sifat'];
	

	$query=mysql_query("insert into disposisi_surat values('','$no_surat_masuk','$tujuan','$isi','$sifat','Belum')");

	if($query){
		echo "<script> window.alert('Data Tersimpan');
				   		 window.location = 'surat_masuk.php'; 
				   		  </script>"; //pop up pd windows
	} else{
		echo "<script> window.alert('Gagal Tersimpan');
					
		  </script>"; //pop up pd windows
	}
	// }
?>
