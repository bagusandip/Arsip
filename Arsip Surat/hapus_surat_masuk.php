<?php
include'koneksi.php';
$no_surat_masuk=$_GET['no_surat_masuk'];
$query = mysql_query("delete from surat_masuk where no_surat_masuk = '$no_surat_masuk'");
$query_2 = mysql_query("delete from disposisi_surat where no_surat_masuk = $_GET[no_surat_masuk]");

if ($query != "")
{
    echo "<script> window.alert('Data Berhasil Dihapus');
                   window.location = 'surat_masuk.php';
          </script>"; 
}
?>