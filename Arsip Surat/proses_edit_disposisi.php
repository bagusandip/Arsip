<?php
	include "koneksi.php";
	$id_disposisi= $_POST['id_disposisi'];
    $tujuan = $_POST['tujuan'];
    $isi = $_POST['isi'];
	$sifat = $_POST['sifat'];
	
	$query = mysql_query("update disposisi_surat set tujuan='$tujuan', isi='$isi', sifat='$sifat' where id_disposisi ='$id_disposisi'") or die (mysql_error());
	
	if($query) {
		 echo "<script> window.alert('Data Berhasil Diubah');
                                window.location = 'surat_masuk.php';
                       </script>";
	}
	else {
		echo "gagal diubah";
	}
?>