<?php
	include "koneksi.php";

	$no_agenda = $_POST['no_agenda'];
    $no_surat_keluar = $_POST['no_surat_keluar'];
    $no_surat_keluar_1 = $_POST['no_surat_keluar_1'];
    $tgl_surat = $_POST['tgl_surat'];
    $tgl_berangkat = $_POST['tgl_berangkat'];
	$perihal = $_POST['perihal'];
	$tujuan = $_POST['tujuan'];
	$keterangan = $_POST['keterangan'];
	
	
	$query = mysql_query("update surat_keluar set no_agenda='$no_agenda', no_surat_keluar='$no_surat_keluar', tgl_surat='$tgl_surat', tgl_berangkat='$tgl_berangkat', perihal='$perihal', tujuan='$tujuan', keterangan='$keterangan' where no_surat_keluar ='$no_surat_keluar_1'") or die (mysql_error());
	
	if($query) {
		 echo "<script> window.alert('Data Berhasil Diubah');
                                window.location = 'surat_keluar.php';
                       </script>";
	}
	else {
		echo "gagal diubah";
	}
?>