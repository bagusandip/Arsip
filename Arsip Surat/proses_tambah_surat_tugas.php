<?php
	// session_start();
	// if(! isset($_SESSION['username'])){
	// 	header("Location: index.php");
	// }else{
	include 'koneksi.php';

	$no_agenda=$_POST['no_agenda'];
	$no_surat_tugas=$_POST['no_surat_tugas'];
	$tgl_surat=$_POST['tgl_surat'];
	$tgl_keberangkatan=$_POST['tgl_keberangkatan'];
	$tgl_keberangkatan_1=$_POST['tgl_keberangkatan_1'];
	$perihal=$_POST['perihal'];
	$tujuan=$_POST['tujuan'];
	$keterangan=$_POST['keterangan'];
	

	$query=mysql_query("insert into surat_tugas values('$no_agenda','$no_surat_tugas','$tgl_surat','$tgl_keberangkatan','$tgl_keberangkatan_1','$perihal','$tujuan','$keterangan')");

	if($query){
		echo "<script> window.alert('Data Tersimpan');
				   window.location = 'surat_tugas.php';
		  </script>"; //pop up pd windows
	} else{
		echo "<script> window.alert('Gagal Tersimpan');
					window.location = 'tambah_surat_tugas.php';
		  </script>"; //pop up pd windows
	}
	// }
?>
