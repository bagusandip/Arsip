<?php
	include "koneksi.php";
	$id_disposisi= $_GET['id_disposisi'];
	
	$query = mysql_query("update disposisi_surat set status='Sudah' where id_disposisi ='$id_disposisi'") or die (mysql_error());
	
	if($query) {
		echo "<script> window.alert('Berhasil Diterima');
                                window.location = 'surat_masuk_bidang.php';
                       </script>";
	}
	else {
		echo "<script> window.alert('Data Gagal Diubah');
                                window.location = 'surat_masuk_bidang.php';
                       </script>";
	}
?>