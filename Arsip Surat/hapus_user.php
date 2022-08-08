<?php
include'koneksi.php';
$query = mysql_query("delete from user where id_user = $_GET[id_user]");

if ($query != "")
{
    echo "<script> window.alert('Data Berhasil Dihapus');
                   window.location = 'user.php';
          </script>"; 
}
?>