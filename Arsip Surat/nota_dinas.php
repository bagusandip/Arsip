<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nota Dinas</title>
    <script>
        function GantiField() {
            jenis = document.forms[0].jenis_cari.value;
            var x = document.getElementById('kata_kunci');
            if(jenis=="no_agenda"){
                x.setAttribute("type", "number");
            }
            if(jenis=="no_surat_nota_dinas"){
                x.setAttribute("type", "text");
            }
            if(jenis=="tgl_surat"){
                x.setAttribute("type", "date");
            }
            if(jenis=="perihal"){
                x.setAttribute("type", "text");
            }
            if(jenis=="tujuan"){
                x.setAttribute("type", "text");
            }
        }

        function GantiQuery() {
            var jeniscari = document.forms[0].jenis_cari.value;
            var katacari = document.forms[0].kata_kunci.value;
            if (jeniscari == "pilih" && katacari == "" || jeniscari == "pilih" && katacari == null) 
            {
                $sql = "select * from nota_dinas";
            }
            if (jeniscari !== "pilih" && katacari !== "" || jeniscari !== "pilih" && katacari !== null) {
                    $sql = "select * from nota_dinas where "+jenis_cari+" like '%"+katacari+"%'";
            }
        }

        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("myBtn").style.display = "block";
            } else {
                document.getElementById("myBtn").style.display = "none";
            }
        }
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <style>
    #myBtn {
      display: none;
      position: fixed;
      bottom: 20px;
      right: 30px;
      z-index: 99;
      font-size: 25px;
      border: none;
      outline: none;
      background-color: #555;
      color: white;
      cursor: pointer;
      padding: 15px;
      border-radius: 4px;
  }

  #myBtn:hover {
      background-color: #E53935;
  }
</style>
<?php include 'header_admin.php';  ?>
<button onclick="topFunction()" id="myBtn" title="Ke Atas"><span class="glyphicon glyphicon-arrow-up"></span></button>
	<div class="container">
	<h2>Arsip Nota Dinas<hr style="border-width: 5px; border-color: #333333"></h2>
    <ul class="breadcrumb">
        <li><a href="beranda_admin.php">Beranda</a></li>
        <li>Arsip Nota Dinas</li>
    </ul>
	<div class="table-responsiv">
    <form method="POST" action="">
    <div class="form-group">
        <label class="col-sm-2">Kategori</label>
        <div class="col-sm-3">
            <select class="form-control" id="jenis_cari" onchange="GantiField()" name="jenis_cari">
                <option value="pilih">-Pilih-</option>
                <option value="no_agenda">Nomor Agenda</option>
                <option value="no_surat_nota_dinas">Nomor Surat</option>
                <option value="tgl_surat">Tanggal Surat</option>
                <option value="perihal">Perihal</option>
                <option value="tujuan">Tujuan</option>
            </select>
        </div>
    </div>
    <br><br><br>
    <div class="form-group">
            <label class="col-sm-2" for="">Kata Kunci</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" value="<?php if(isset($_POST['kata_kunci'])) echo $_POST['kata_kunci'];?>" id="kata_kunci" name="kata_kunci">
            </div>
        </div>
        <br><br>
        <button type="submit" class="btn btn-success" name="filter">Filter Surat</button>
</form><br><br>
	<a href="tambah_nota_dinas.php" class="btn btn-primary btn-md">
		<span class="glyphicon glyphicon-plus-sign"></span>&nbsp Tambah Data</a>
        &nbsp 
        <a href="export_excel_notadinas.php" class="btn btn-warning btn-md"> 
          <span class="glyphicon glyphicon-save-file"></span>&nbsp Export Excel</a>

	<h3>Daftar Arsip Nota Dinas</h3>
	<!-- tabel surat -->
	<div class="table-responsive">   
        <h4>Tampilkan Banyak Baris Data</h4>
            <select name="state" id="maxRows" class="form-control" style="width:158px;">
                <option value="30">30</option>
                <option value="20">20</option>
                <option value="10">10</option>
                <option value="5">5</option>
            </select><br>
  	<table class="table table-striped table-hover table-bordered" id="mytable">
    <thead>
      <tr style="background-color: white;">
        <th width="100px">No. Agenda</th>
        <th width="130px">Nomor Surat</th>
        <th width="120px">Tanggal Surat</th>
        <th>Perihal</th>
        <th width="160px">Tujuan</th>
        <th width="100px">Aksi</th>
      </tr>
    </thead>
    <tbody>
         <?php

             include 'koneksi.php';
             $sql = "select * from nota_dinas order by no_agenda";
        if (isset($_POST['filter'])) {
            $a=$_POST['jenis_cari'];
            $b=$_POST['kata_kunci'];
        
        
            if ($a == "pilih" && $b == "" || $a == "pilih" && $b == null) 
            {
                $sql = "select * from nota_dinas order by no_agenda";
            }
            if ($a !== "pilih" && $b !== "" || $a !== "pilih" && $b !== null) {
                    $sql = "select * from nota_dinas where $a like '%$b%' order by no_agenda";
            }
        }
           $tampil=mysql_query($sql);

            while($data = mysql_fetch_array($tampil)){
                 $tanggal_surat= date("d-m-Y", strtotime($data['tgl_surat']));
                     echo "<tr class='active'>
                        <td>{$data['no_agenda']}</td>";
                    echo "<td>{$data['no_surat_nota_dinas']}</td>";
                    echo "<td>$tanggal_surat</td>";
                    echo "<td>{$data['perihal']}</td>";
                    echo "<td>{$data['tujuan']}</td>";
                    ?>
                    <td>
                    <a href="preview_nota_dinas.php?no_surat_nota_dinas=<?=$data['no_surat_nota_dinas']?>" target="_blank" class="btn btn-info btn-sm" style="width: 90px; margin-bottom: 3px;">
                            <span class="glyphicon glyphicon-print"></span>&nbsp Print</a><br>
                        <a href="edit_nota_dinas.php?no_surat_nota_dinas=<?=$data['no_surat_nota_dinas']?>" class="btn btn-success btn-sm" style="width: 90px; margin-bottom: 3px;">
                            <span class="glyphicon glyphicon-edit"></span>&nbsp Edit</a>
                        <a onclick="return confirm('Yakin Ingin Menghapus Data ?')" href="hapus_nota_dinas.php?no_surat_nota_dinas=<?=$data['no_surat_nota_dinas']?>" class="btn btn-danger btn-sm" style="width: 90px; margin-bottom: 3px;">
                            <span class="glyphicon glyphicon-trash"></span>&nbsp Hapus</a></td>
                    </tr> 
                    <?php
            };
            ?>
    </tbody>
 	</table>
        <div class="pagination-container">
            <nav>
                <ul class="pagination"></ul>
            </nav>
        </div>
    </div>
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script>
    var table = '#mytable'
    $(document).ready(function () {
        $('#maxRows').on('change', function() {
            getPagination('#mytable',$(this).val());
        });
    getPagination('#mytable',30);
});

    function getPagination(table,noRows) {

 $('.pagination').html('');
    var trnum = 0;
    var maxRows = noRows;
    var totalRows = $(table + ' tbody tr').length;
    $(table + ' tr:gt(0)').each(function() {
      trnum++;
      if (trnum > maxRows) {
        $(this).hide();
    }
    if (trnum <= maxRows) {
        $(this).show();
      }
    });
    if (totalRows > maxRows) {
      var pagenum = Math.ceil(totalRows / maxRows);
      for (var i = 1; i <= pagenum;) {
        $('.pagination').append('<li class"wp" data-page="' + i + '">\
          <span>' + i++ + '<span class="sr-only">(current)</span></span>\
          </li>').show();
      }
    }
    $('.pagination li:first-child').addClass('active');
    $('.pagination li').on('click', function() {
      var pageNum = $(this).attr('data-page');
      var trIndex = 0;
      $('.pagination li').removeClass('active');
      $(this).addClass('active');
      $(table + ' tr:gt(0)').each(function() {
        trIndex++;
        if (trIndex > (maxRows * pageNum) || trIndex <= ((maxRows * pageNum) - maxRows)) {
          $(this).hide();
      } else {
          $(this).show();
        }
      });
    }); 
}
</script>
 	</div>

</div>
</div>
</body>