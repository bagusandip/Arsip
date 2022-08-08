<!DOCTYPE html>
<html>
<head>
	<title>Beranda Admin</title>
	<?php include 'header_admin.php' ?>

	  <style type="text/css">
    .banner2{
      background: #1999cc;
      font-size: 25px;
      padding: 15px;
      border-radius: 5px;
      color: white;
      box-shadow: 0 5px 5px rgba(0, 0, 0, 0.3);
      
    }
    .banner3{
      background: #99cc00;
      font-size: 25px;
      padding: 15px;
      border-radius: 5px;
      color: white;
      box-shadow: 0 5px 5px rgba(0, 0, 0, 0.3);
    }
    .banner4{
      background: #ff9900;
      font-size: 25px;
      padding: 15px;
      border-radius: 5px;
      color: white;
      box-shadow: 0 5px 5px rgba(0, 0, 0, 0.3);
    }
    .banner5{
      background: brown;
      font-size: 25px;
      padding: 15px;
      border-radius: 5px;
      color: white;
      box-shadow: 0 5px 5px rgba(0, 0, 0, 0.3);
    }
    .banner6{
      background: #6a5acd;
      font-size: 25px;
      padding: 15px;
      border-radius: 5px;
      color: white;
      box-shadow: 0 5px 5px rgba(0, 0, 0, 0.3);
    }
    .t1{
      font-size: 30px;
    }
    .t2{
      font-size: 15px;
    }
  </style>
</head>
<?php
        include'koneksi.php';
        $nama = mysql_query("select nama_user, level from user where id_user='$id_user'") or die (mysql_error());
        $masuk = mysql_fetch_array($nama);
    ?>
<body>

  <div class="container">
    <div class="col-md-14">
      <div class="panel panel-default">
        <div class="panel-body" style="font-size: 20px;box-shadow: 0 5px 5px rgba(0, 0, 0, 0.3); background-color: #999999; color: white;">
          <div class="media">
            <div class="media-left">
              <img src="logo.png" class="media-object" style="width:120px;">
            </div>
            <div class="media-body media-middle">
              <h1 class="media-heading">Kantor Wilayah Badan Pertanahan Nasional Daerah Istimewa Yogyakarta</h1>
              Jl. Brigjen Katamso, Keparakan, Mergangsan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php
        include'koneksi.php';
        $query_1 = mysql_query("select count(*) from surat_masuk") or die (mysql_error());
        $data_1 = mysql_fetch_array($query_1);

        $query_2 = mysql_query("select count(*) from surat_keluar") or die (mysql_error());
        $data_2 = mysql_fetch_array($query_2);

        $query_3 = mysql_query("select count(*) from surat_tugas") or die (mysql_error());
        $data_3 = mysql_fetch_array($query_3);

        $query_4 = mysql_query("select count(*) from nota_dinas") or die (mysql_error());
        $data_4 = mysql_fetch_array($query_4);

        $query_5 = mysql_query("select count(*) from undangan_masuk") or die (mysql_error());
        $data_5 = mysql_fetch_array($query_5);
    ?>

<div class="container">
<div class="col-md-14">
<div class="panel panel-default">
  <div class="panel-body" style="font-size: 20px;box-shadow: 0 5px 5px rgba(0, 0, 0, 0.3);">
<text class="t1">Selamat Datang <?php echo $masuk['nama_user']; ?></text><br>
<text class="t2">Anda Masuk Sebagai <?php echo $masuk['level']; ?></text></div>
</div>
</div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-4">
      <div class="banner2">
        <p>
          <span class="glyphicon glyphicon-envelope"></span> Jumlah Surat Masuk
          <p style="font-size: 20px;"><?php echo $data_1['count(*)'] ?> Surat Masuk</p>
        </p> 
      </div>
    </div>
    <div class="col-lg-4">
      <div class="banner3">
        <p>
          <span class="glyphicon glyphicon-send"></span> Jumlah Surat Keluar
          <p style="font-size: 20px;"><?php echo $data_2['count(*)'] ?> Surat Keluar</p>
        </p> 
      </div>
    </div>
    <div class="col-lg-4">
      <div class="banner4">
        <p>
          <span class="glyphicon glyphicon-file"></span> Jumlah Surat Tugas
          <p style="font-size: 20px;"><?php echo $data_3['count(*)'] ?> Surat Tugas</p>
        </p>
      </div>
    </div>
  </div>

</div>
<br>
<div class="container">
  <div class="row">
    <div class="col-lg-4">
      <div class="banner5">
        <p>
          <span class="glyphicon glyphicon-file"></span> Jumlah Nota Dinas
          <p style="font-size: 20px;"><?php echo $data_4['count(*)'] ?> Surat Masuk</p>
        </p> 
      </div>
    </div>
    <div class="col-lg-4">
      <div class="banner6">
        <p>
          <span class=" glyphicon glyphicon-book"></span> Jumlah Undangan Masuk
          <p style="font-size: 20px;"><?php echo $data_5['count(*)'] ?> Surat Keluar</p>
        </p> 
      </div>
    </div>
  </div>

</div>
</body>