<?php
include'koneksi.php';
$no_surat_undangan=$_GET['no_surat_undangan'];
$query = mysql_query("delete from undangan_masuk where no_surat_undangan = '$no_surat_undangan'");

if ($query != "")
{
    echo "<script> window.alert('Data Berhasil Dihapus');
                   window.location = 'undangan_masuk.php';
          </script>"; 
}
?>