<?php
include'koneksi.php';
$no_surat_tugas=$_GET['no_surat_tugas'];
$query = mysql_query("delete from surat_tugas where no_surat_tugas = '$no_surat_tugas'");

if ($query != "")
{
    echo "<script> window.alert('Data Berhasil Dihapus');
                   window.location = 'surat_tugas.php';
          </script>"; 
}
?>