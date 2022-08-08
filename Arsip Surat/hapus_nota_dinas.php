<?php
include'koneksi.php';
$no_surat_nota_dinas=$_GET['no_surat_nota_dinas'];
$query = mysql_query("delete from nota_dinas where no_surat_nota_dinas = '$no_surat_nota_dinas'");

if ($query != "")
{
    echo "<script> window.alert('Data Berhasil Dihapus');
                   window.location = 'nota_dinas.php';
          </script>"; 
}
?>