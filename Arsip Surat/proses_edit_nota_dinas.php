<?php
	include "koneksi.php";

	$no_agenda = $_POST['no_agenda'];
    $no_surat_nota_dinas = $_POST['no_surat_nota_dinas'];
    $no_surat_nota_dinas_1 = $_POST['no_surat_nota_dinas_1'];
    $tgl_surat = $_POST['tgl_surat'];
	$perihal = $_POST['perihal'];
	$tujuan = $_POST['tujuan'];
	
	
	$query = mysql_query("update nota_dinas set no_agenda='$no_agenda', no_surat_nota_dinas='$no_surat_nota_dinas', tgl_surat='$tgl_surat', perihal='$perihal', tujuan='$tujuan' where no_surat_nota_dinas ='$no_surat_nota_dinas_1'") or die (mysql_error());
	
	if($query) {
		 echo "<script> window.alert('Data Berhasil Diubah');
                                window.location = 'nota_dinas.php';
                       </script>";
	}
	else {
		echo "gagal diubah";
	}
?>