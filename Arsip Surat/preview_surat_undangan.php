<?php
if (empty($_GET['no_surat_undangan'])) {
	echo "<script> window.alert('Tidak Ada Data Yang Akan Di Ditampilkan');
	</script>";
}
$no_surat_undangan=$_GET['no_surat_undangan'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Undangan Masuk</title>
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
		$query = mysql_query("select * from undangan_masuk where no_surat_undangan='$no_surat_undangan'") or die (mysql_error());
		$data = mysql_fetch_array($query);
		$ys = substr($data['tgl_surat_undangan'],0,4);
		$yt = substr($data['tgl_undangan'],0,4);
		$ms = substr($data['tgl_surat_undangan'],5,2);
		$mt = substr($data['tgl_undangan'],5,2);
		$ds = substr($data['tgl_surat_undangan'],8,2);
		$dt = substr($data['tgl_undangan'],8,2);

		if($ms == "01"){
			$nms = "Januari";
		} elseif($ms == "02"){
			$nms = "Februari";
		} elseif($ms == "03"){
			$nms = "Maret";
		} elseif($ms == "04"){
			$nms = "April";
		} elseif($ms == "05"){
			$nms = "Mei";
		} elseif($ms == "06"){
			$nms = "Juni";
		} elseif($ms == "07"){
			$nms = "Juli";
		} elseif($ms == "08"){
			$nms = "Agustus";
		} elseif($ms == "09"){
			$nms = "September";
		} elseif($ms == "10"){
			$nms = "Oktober";
		} elseif($ms == "11"){
			$nms = "November";
		} elseif($ms == "12"){
			$nms = "Desember";
		}

		if($mt == "01"){
			$nmt = "Januari";
		} elseif($mt == "02"){
			$nmt = "Februari";
		} elseif($mt == "03"){
			$nmt = "Maret";
		} elseif($mt == "04"){
			$nmt = "April";
		} elseif($mt == "05"){
			$nmt = "Mei";
		} elseif($mt == "06"){
			$nmt = "Juni";
		} elseif($mt == "07"){
			$nmt = "Juli";
		} elseif($mt == "08"){
			$nmt = "Agustus";
		} elseif($mt == "09"){
			$nmt = "September";
		} elseif($mt == "10"){
			$nmt = "Oktober";
		} elseif($mt == "11"){
			$nmt = "November";
		} elseif($mt == "12"){
			$nmt = "Desember";
		}

		$namahari = date('l', strtotime($data['tgl_surat_undangan']));
                if($namahari == "Sunday"){
                        $namahari = "Minggu";
                    } elseif($namahari == "Monday"){
                        $namahari = "Senin";
                    } elseif($namahari == "Tuesday"){
                        $namahari = "Selasa";
                    } elseif($namahari == "Wednesday"){
                        $namahari = "Rabu";
                    } elseif($namahari == "Thursday"){
                        $namahari = "Kamis";
                    } elseif($namahari == "Friday"){
                        $namahari = "Jum'at";
                    } elseif($namahari == "Saturday"){
                        $namahari = "Sabtu";
                    }
		?>
		<center>
			<table border="1px" class="backg">
				<tr>
					<td class="tgh" colspan="4">
						<img class="logodisp" src="logo.png"/>
						<h6 class="up" id="nama1">Kementrian Agraria Dan Tata Ruang/</h6>
						<h6 class="up" id="nama">Badan Pertanahan Nasional</h6>
						<h6 class="up" id="nama">Kantor Wilayah Badan Pertanahan Nasional</h6>
						<h6 class="up" id="nama"> Daerah Istimewa Yogyakarta</h6>
						<h6 id="alamat">Jl. Brigjen Katamso Telp. (0274) 377747, 374674 (TU/Fax) Yogyakarta 
						Kode Pos 55152</h6>
					</td>
				</tr>
				<tr>
					<td colspan="4" class="tgh">
						<b>LEMBAR UNDANGAN</b>
					</td>
				</tr>
				<tr>
					<td width="150px" class="right">No. Agenda/Registrasi</td>
					<td width="150px" class="left">: <?php echo $data['no_agenda'];?></td>
					<td width="150px" class="right">Tingkat Keamanan</td>
					<td width="150px" class="left"> : </td>
				</tr>
				<tr>
					<td class="right">Tgl. Undangan</td>
					<td class="left"> : <?php echo $namahari.", ".$dt." ".$nmt." ".$yt;?></td>
					<td class="right">Tgl. Penyelesaian</td>
					<td class="left"> : </td>
				</tr>
				<tr style="border : none;">
					<td  class="right bottom" >Tgl. dan No Surat</td>
					<td  colspan="3" class="left bottom">: <?php echo $ds." ".$nms." ".$ys." & ".$data['no_surat_undangan'];?></td>
				</tr>
				<tr style="border: none;">
					<td class="right bottom top" >Dari</td>
					<td colspan="3" class="left bottom top">: <?php echo $data['pengirim'];?></td>
				</tr>
				<tr style="border: none;">
					<td class="right bottom top" >Tempat dan Waktu</td>
					<td colspan="3" class="left bottom top justify">: <?php echo $data['tempat'];?>, <?php echo $data['waktu'];?> WIB</td>
				</tr>
				<tr style="border: none;">
					<td class="right bottom top" >Ringkasan Isi</td>
					<td colspan="3" class="left bottom top justify">: <?php echo $data['perihal'];?></td>
				</tr>
			</table>

			<table class="backg">
				<tr>
					<td style="border-top: none;" width="50%" class="tgh">Undangan</td>
					<td style="border-top: none;" width="35%" class="tgh">Diteruskan kepada : </td>
					<td style="border-top: none;" width="15%" class="tgh">Paraf</td>
				</tr>
				<tr>
					<td rowspan="9"></td>
					<td>1. Kepala Bagian Tata Usaha</td>
					<td></td>
				</tr>
				<tr>
					<td>2. Kepala Bidang Infrastruktur Pertanahan</td>
					<td></td>
				</tr>
				<tr>
					<td>3.	Kepala Bidang Hubungan Hukum Pertanahan</td>
					<td></td>
				</tr>
				<tr>
					<td>4.	Kepala Bidang Penataan Pertanahan</td>
					<td></td>
				</tr>
				<tr>
					<td>5.	Kepala Bidang Pengadaan Tanah</td>
					<td></td>
				</tr>
				<tr>
					<td>6.	Kepala Bidang Penanganan Masalah dan Pengendalian Pertanahan</td>
					<td></td>
				</tr>
				<tr>
					<td>7.	Penanggungjawab / Koordinator</td>
					<td></td>
				</tr>
				<tr>
					<td>8.	Sekretaris</td>
					<td></td>
				</tr>
				<tr>
					<td>9.	Lain – lain ........</td>
					<td></td>
				</tr>
				<tr>
					<td class="tgh" colspan="5"><i>Catatan : Dilarang memisahkan sehelai suratpun yang tergabung dalam berkas ini.</i></td>
				</tr>
			</table>
		</center>
	</head>
	</html>
