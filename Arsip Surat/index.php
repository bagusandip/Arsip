<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css.css">

	<style type="text/css">
		.form_login{
			background-color: #efefef;
			border-radius: 3px;
			margin: auto;
			width: 400px;
			box-shadow: 0px 15px 16px 0px rgba(0,0,0,0.2);
			padding: 30px;
		}
		.btn-ab{
			color:#fff;background-color:#3c3c3c;border-color:#122b40;
		}
		.btn-ab:hover{
			color:#fff;background-color:#ff0400;border-color:#ff0400;
		}
	</style>
</head>
<body style="background-image: url('bg.jpg');">
	
	<div class="container">
		<div class="center">
			<br><br><form class="form_login" action="proses_login.php" method="post">
			<center>
				<h3>Aplikasi Pengarsipan Surat</h3><br>
				<img id="logo" src="logo.png" style="width:150px;height:150px;">
				<h4>Kementerian Agraria dan Tata Ruang/Badan Pertanahan Nasional</h4><br>
			</center>

				
				<input type="text" name="id" class="form-control" placeholder="Masukkan ID User"><br>
				<input type="password" name="password" class="form-control" placeholder="Masukkan Password"><br>
				<br><button class="btn btn-ab btn-block btn-lg" type="submit">Login</button>
				<br>
			</form>
		</div>
	</div>
</div>
</body>
</html>