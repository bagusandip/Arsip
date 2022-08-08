<?php
include'koneksi.php';
$no_surat_keluar=$_GET['no_surat_keluar'];
$query = mysql_query("delete from surat_keluar where no_surat_keluar = '$no_surat_keluar'");

if ($query != "")
{
    echo "<script> window.alert('Data Berhasil Dihapus');
                   window.location = 'surat_keluar.php';
          </script>"; 
}
?>