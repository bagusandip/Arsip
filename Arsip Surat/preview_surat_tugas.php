<?php
if (empty($_GET['no_surat_tugas'])) {
	echo "<script> window.alert('Tidak Ada Data Yang Akan Di Ditampilkan');
	</script>";
}
$no_surat_tugas=$_GET['no_surat_tugas'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Surat Tugas</title>
	<style type="text/css">
	table {
		background: #fff;
		padding: 2px;
		border-collapse: collapse;
		width: 600px;
	}
	tr, td {
		border: table-cell;
		border: 1px  solid #444;
		padding: 3px!important;
	}
	tr,td {
		vertical-align: top!important;
	}
	.logodisp {
		float: left;
		position: relative;
		width: 120px;
	}
	.tgh {
		text-align: center;
	}
	#alamat {
		font-size: 12px;
	}
	#nama1 {
		font-size: 15px;
		font-weight: bold;
		margin: 10px 0 0 0;
	}
	#nama {
		font-size: 15px;
		font-weight: bold;
		margin: -7px 0 0 0;
	}
	.up {
		text-transform: uppercase;
		margin: 0;
		line-height: 2.2rem;
		font-size: 1.5rem;
	}
	.right {
		border-right: none !important;
	}
	.left {
		border-left: none !important;
	}
	.top{
		border-top: none;

	}
	.bottom{
		border-bottom: none;
	}
	.justify{
		text-align: justify;
	}
	@media print{
		body {
			font-size: 12px;
			color: #212121;
		}
		table {
			width: 100%;
			max-width: 100%;
			font-size: 12px;
			color: #212121;
			border-collapse: collapse;
		}
		tr, td {
			border: 1px solid;
			padding: 3px!important;

		}
		tr,td {
			vertical-align: top!important;
		}
		.logodisp {
			float: left;
			position: relative;
			width: 80px;
		}
		#nama1 {
			font-size:12px!important;
			font-weight: bold;
			text-transform: uppercase;
			margin: 0 0 0 0;
		}
		#nama {
			font-size:12px!important;
			font-weight: bold;
			text-transform: uppercase;
			margin: -7px 0 0 0;
		}
		.up {
			font-size: 14px!important;
			font-weight: normal;
		}
		#alamat {
			margin-top: 0px;
			margin-bottom: 0px;
			font-size: 10px;
		}
		.justify{
			text-align: justify;
		}
	}
</style>
<?php
session_start();
if(! isset($_SESSION['id_user'])){
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
$nama = mysql_query("select nama_user from user where level='Admin' and id_user='$id_user'") or die (mysql_error());
$masuk = mysql_fetch_array($nama);
?>
<body onload="window.print()">
	<br>
	<div class="container">
		<nav class="navbar navbar-inverse" style="border-radius: 0px; box-shadow: 0 5px 5px rgba(0, 0, 0, 0.3);">
			<div class="container-fluid">
				<div class="navbar-header">
					<img id="logo" src="logo.png" style="width:50px;height:50px;">
				</div>
				<ul class="nav navbar-nav">

					<li><a href="beranda_admin.php" style="font-size: 17px;">Beranda</a></li>
					<li><a href="surat_masuk.php" style="font-size: 17px;">Surat Masuk</a></li>
					<li><a href="surat_keluar.php" style="font-size: 17px;">Surat Keluar</a></li>
					<li><a href="surat_tugas.php" style="font-size: 17px;">Surat Tugas</a></li>
					<li><a href="nota_dinas.php" style="font-size: 17px;">Nota Dinas</a></li>
					<li><a href="undangan_masuk.php" style="font-size: 17px;">Undangan Masuk</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#" style="font-size: 17px;">
							<span class="glyphicon glyphicon-user"></span> <?php echo $masuk['nama_user']; ?>
							<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li style="margin-top: 10px"><a href="profil_admin.php"><span class="glyphicon glyphicon-user"></span>&nbsp Profil</a></li>
								<li style="margin-top: 10px"><a href="user.php"><span class="glyphicon glyphicon-cog"></span>&nbsp Managemen User</a></li>
								<li class="divider"></li>
								<li style="margin-top: 10px; margin-bottom: 10px"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp Logout</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</div>

		<?php 
		$query = mysql_query("select * from surat_tugas where no_surat_tugas='$no_surat_tugas'") or die (mysql_error());
		$data = mysql_fetch_array($query);
		$tanggal_surat= date("d-m-Y", strtotime($data['tgl_surat']));
		$tanggal_keberangkatan= date("d-m-Y", strtotime($data['tgl_keberangkatan']));
		$tanggal_keberangkatan_1= date("d-m-Y", strtotime($data['tgl_keberangkatan_1']));

		$ys = substr($data['tgl_surat'],0,4);
		
		$ms = substr($data['tgl_surat'],5,2);
		
		$ds = substr($data['tgl_surat'],8,2);


		if($ms == "01"){
			$nms = "I";
		} elseif($ms == "02"){
			$nms = "II";
		} elseif($ms == "03"){
			$nms = "III";
		} elseif($ms == "04"){
			$nms = "IV";
		} elseif($ms == "05"){
			$nms = "V";
		} elseif($ms == "06"){
			$nms = "VI";
		} elseif($ms == "07"){
			$nms = "VII";
		} elseif($ms == "08"){
			$nms = "VIII";
		} elseif($ms == "09"){
			$nms = "IX";
		} elseif($ms == "10"){
			$nms = "X";
		} elseif($ms == "11"){
			$nms = "XI";
		} elseif($m == "12"){
			$nms = "XII";
		}

		?>
		<center>
			<table border="1px" class="bottom">
				<tr style="border : none;" class="bottom">
					<td align="left" class="right bottom"><?php echo date("d/m/Y")?><br></td>
					<td align="right" class="left bottom"><?php echo $masuk['nama_user'] ?><br></td>
				</tr>
			</table>
			<table border="1px" class="backg top">
				<tr style="border : none;" class="top">
					<td width="26%" class="right bottom top" >Nomor Surat</td>
					<td width="2%" class="left right bottom top">:</td>
					<td width="78%" class="left bottom top"><?php echo $data['no_agenda']."/".$data['no_surat_tugas']."/".$nms."/".$ys ?></td>
				</tr>
				<tr style="border: none;">
					<td class="right bottom top" >Tanggal Surat</td>
					<td class="left right bottom top">:</td>
					<td class="left bottom top"><?php echo $tanggal_surat ?></td>
				</tr>
				<tr style="border: none;">
					<td class="right bottom top" >Tanggal Keberangkatan</td>
					<td class="left right bottom top">:</td>
					<td class="left bottom top"><?php echo $tanggal_keberangkatan." s/d ".$tanggal_keberangkatan_1 ?></td>
				</tr>
				<tr style="border: none;">
					<td class="right bottom top" >Perihal</td>
					<td class="left right bottom top">:</td>
					<td class="left bottom top"><?php echo $data['perihal'];?></td>
				</tr>
				<tr style="border: none;">
					<td class="right bottom top" >Bidang</td>
					<td class="left right bottom top">:</td>
					<td class="left bottom top justify"><?php echo $data['keterangan'];?></td>
				</tr>
			</table>
		</center>
	</head>
	</html>
