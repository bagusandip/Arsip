<?php
	include "koneksi.php";

	$no_agenda = $_POST['no_agenda'];
	$no_surat_undangan = $_POST['no_surat_undangan'];
	$no_surat_undangan_1 = $_POST['no_surat_undangan_1'];
	$tgl_surat_undangan = $_POST['tgl_surat_undangan'];
	$pengirim = $_POST['pengirim'];
	$tgl_undangan = $_POST['tgl_undangan'];
    $waktu = $_POST['waktu'];
    $tempat = $_POST['tempat'];
	$perihal = $_POST['perihal'];
	$keterangan = $_POST['keterangan'];	
	
	$query = mysql_query("update undangan_masuk set no_agenda='$no_agenda',no_surat_undangan='$no_surat_undangan', tgl_surat_undangan='$tgl_surat_undangan', pengirim='$pengirim', tgl_undangan='$tgl_undangan', waktu='$waktu', tempat='$tempat', perihal='$perihal', keterangan='$keterangan' where no_surat_undangan ='$no_surat_undangan_1'") or die (mysql_error());
	
	if($query) {
		 echo "<script> window.alert('Data Berhasil Diubah');
                                window.location = 'undangan_masuk.php';
                       </script>";
	}
	else {
		echo "Gagal Diubah";
	}
?>