<!DOCTYPE html>
<html>
<head>
    <title>Beranda Admin</title>
    <?php include 'header_admin.php' ?>
    <div class="container">
    <h2>Manajemen User<hr style="border-width: 5px; border-color: #333333"></h2>
    <div class="table-responsiv">
    <a href="tambah_user.php" class="btn btn-primary btn-md">
        <span class="glyphicon glyphicon-plus-sign"></span>&nbsp Tambah User</a>

    <h3>Daftar User</h3>
    <div class="table-responsive">          
    <table class="table table-striped table-hover">
    <thead>
      <tr style="background-color: white;">
        <th>No</th>
        <th>Id User</th>
        <th>Nama</th>
        <th>Level</th>
        <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include 'koneksi.php';
        $tampil=mysql_query("select * from user");
        ?>
            <?php
            $a=1;
            while($data = mysql_fetch_array($tampil)){
                    echo "<tr class='active'>
                        <td>{$a}</td>";
                    echo "<td>{$data['id_user']}</td>";
                    echo "<td>{$data['nama_user']}</td>";
                    echo "<td>{$data['level']}</td>";
                    
                    if ($data['id_user']==$_SESSION['id_user']) {
                        ?>
                        <td>
                            No Action
                        </td>
                        <?php
                    }else{
                        ?>
                        <td><a href="edit_user.php?id_user=<?=$data['id_user']?>" class="btn btn-success btn-sm" style="width: 80px">
                            <span class="glyphicon glyphicon-edit"></span>&nbsp Edit</a>
                            <a href="hapus_user.php?id_user=<?=$data['id_user']?>" class="btn btn-danger btn-sm" style="width: 80px">
                                <span class="glyphicon glyphicon-trash"></span>&nbsp Hapus</a>
                    </td> 
                    <?php
                    }
                    ?>
                    
        </tr>
        <?php
            $a++;
            };
        ?>
    </tbody>
    </table>
    </div>

</div>
</div>
</body>