<?php
	include "koneksi.php";

	$no_agenda = $_POST['no_agenda'];
	$lampiran = $_POST['lampiran'];
	$pengirim = $_POST['pengirim'];
	$tgl_surat = $_POST['tgl_surat'];
	$tgl_terima = $_POST['tgl_terima'];
    $no_surat_masuk = $_POST['no_surat_masuk'];
    $no_surat_masuk_1 = $_POST['no_surat_masuk_1'];
	$perihal = $_POST['perihal'];
	$keterangan = $_POST['keterangan'];	
	
	$query = mysql_query("update surat_masuk set no_agenda='$no_agenda',lampiran='$lampiran', pengirim='$pengirim', tgl_surat='$tgl_surat', tgl_terima='$tgl_terima', no_surat_masuk='$no_surat_masuk', perihal='$perihal', keterangan='$keterangan' where no_surat_masuk ='$no_surat_masuk_1'") or die (mysql_error());
	
	$query_1 = mysql_query("update disposisi_surat set no_surat_masuk='$no_surat_masuk' where no_surat_masuk ='$no_surat_masuk_1'");
	if($query) {
		 echo "<script> window.alert('Data Berhasil Diubah');
                                window.location = 'surat_masuk.php';
                       </script>";
	}
	else {
		echo "gagal diubah";
	}
?>