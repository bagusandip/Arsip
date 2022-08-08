<?php
  session_start();
  if(!isset($_SESSION['id_user'])){
    header("Location: login.php");
  }
?>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css.css">
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<?php
        include'koneksi.php';
        $id_user=$_SESSION['id_user'];
        $nama = mysql_query("select nama_user from user where level='User' and id_user='$id_user'") or die (mysql_error());
        $masuk = mysql_fetch_array($nama);
    ?>
<body style="background-image: url('bg.jpg');">
	<br>
	<div class="container">
  <nav class="navbar navbar-inverse" style="border-radius: 0px; box-shadow: 0 5px 5px rgba(0, 0, 0, 0.3);">
  <div class="container-fluid">
    <div class="navbar-header">
      <img id="logo" src="logo.png" style="width:50px; height:50px;">
    </div>
    <ul class="nav navbar-nav">
      
      <li><a href="beranda_bidang.php" style="font-size: 18px;">Beranda</a></li>
      <li><a href="surat_masuk_bidang.php" style="font-size: 18px;">Surat Masuk Bidang</a></li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#"  style="font-size: 18px;">
      <span class="glyphicon glyphicon-user"></span> <?php echo $masuk['nama_user']; ?>
      <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li style="margin-top: 10px"><a href="profil_bidang.php"><span class="glyphicon glyphicon-user"></span>&nbsp Profil</a></li>
        <li class="divider"></li>
        <li style="margin-top: 10px; margin-bottom: 10px"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp Logout</a></li>
      </ul>
    </li>
    </ul>
  </div>
</nav>
</div>