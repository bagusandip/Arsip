<?php
	include "koneksi.php";

	$no_agenda = $_POST['no_agenda'];
    $no_surat_tugas = $_POST['no_surat_tugas'];
    $no_surat_tugas_1 = $_POST['no_surat_tugas_1'];
    $tgl_surat = $_POST['tgl_surat'];
    $tgl_keberangkatan = $_POST['tgl_keberangkatan'];
    $tgl_keberangkatan_1 = $_POST['tgl_keberangkatan_1'];
	$perihal = $_POST['perihal'];
	$tujuan = $_POST['tujuan'];
	$keterangan = $_POST['keterangan'];
	
	
	$query = mysql_query("update surat_tugas set no_agenda='$no_agenda', no_surat_tugas='$no_surat_tugas', tgl_surat='$tgl_surat', tgl_keberangkatan='$tgl_keberangkatan', tgl_keberangkatan_1='$tgl_keberangkatan_1', perihal='$perihal', tujuan='$tujuan', keterangan='$keterangan' where no_surat_tugas ='$no_surat_tugas_1'") or die (mysql_error());
	
	if($query) {
		 echo "<script> window.alert('Data Berhasil Diubah');
                                window.location = 'surat_tugas.php';
                       </script>";
	}
	else {
		echo "gagal diubah";
	}
?>