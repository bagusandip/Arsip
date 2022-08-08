<?php
include'koneksi.php';
$query = mysql_query("delete from disposisi_surat where id_disposisi = $_GET[id_disposisi]");

if ($query != "")
{
    echo "<script> window.alert('Data Berhasil Dihapus');
                   window.location = 'surat_masuk.php';
          </script>"; 
}
?>