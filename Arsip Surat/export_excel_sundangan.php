<?php 
require_once "PHPExcel/PHPExcel.php"; 
/*start - BLOCK PROPERTIES FILE EXCEL*/
$file = new PHPExcel ();
$file->getProperties ()->setCreator ( "Bagus" );
$file->getProperties ()->setLastModifiedBy ( "Bagus" );
$file->getProperties ()->setTitle ( "Data Arsip Surat Undangan Masuk" );
$file->getProperties ()->setSubject ( "Surat Masuk" );
$file->getProperties ()->setDescription ( "Data Arsip Surat Undangan Masuk" );
$file->getProperties ()->setKeywords ( "BPN" );
$file->getProperties ()->setCategory ( "Surat" );
/*end - BLOCK PROPERTIES FILE EXCEL*/

$style_col = array(
  'font' => array('bold' => true),
  'alignment' => array(
    'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
    'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER
),
  'borders' => array(
    'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),
    'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),
    'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),
    'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN)
)
);

$style_row = array(
	'alignment' => array(
	'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
    'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER
),
	'borders' => array(
    'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),
    'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),
    'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),
    'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN)
)
);

/*start - BLOCK SETUP SHEET*/
$file->createSheet ( NULL,0);
$file->setActiveSheetIndex ( 0 );
$sheet = $file->getActiveSheet ( 0 );
$sheet->setTitle ( "Data Arsip Surat Undangan Masuk" );
/*end - BLOCK SETUP SHEET*/

/*start - BLOCK HEADER*/
$sheet->mergeCells('A1:I1');
$sheet->setCellValue('A1', "DATA ARSIP SURAT UNDANGAN MASUK");
$sheet->getStyle('A1')->getFont()->setBold(TRUE);
$sheet->getStyle('A1')->getFont()->setSize(15);
$sheet->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$sheet->mergeCells('A2:I2');
$sheet->setCellValue('A2', "KANTOR WILAYAH BADAN PERTANAHAN NASIONAL DAERAH ISTIMEWA YOGYAKARTA TAHUN ".date("Y"));
$sheet->getStyle('A2')->getFont()->setBold(TRUE);
$sheet->getStyle('A2')->getFont()->setSize(15);
$sheet->getStyle('A2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$sheet	->setCellValue ( "A4", "Nomor Urut" )
->setCellValue ( "B4", "Nomor Surat" )
->setCellValue ( "C4", "Tanggal Surat" )
->setCellValue ( "D4", "Pengirim" )
->setCellValue ( "E4", "Tanggal Acara" )
->setCellValue ( "F4", "Waktu" )
->setCellValue ( "G4", "Tempat" )
->setCellValue ( "H4", "Perihal" )
->setCellValue ( "I4", "Keterangan" );

$sheet->getStyle("A4")->applyFromArray($style_col);
$sheet->getStyle("B4")->applyFromArray($style_col);
$sheet->getStyle("C4")->applyFromArray($style_col);
$sheet->getStyle("D4")->applyFromArray($style_col);
$sheet->getStyle("E4")->applyFromArray($style_col);
$sheet->getStyle("F4")->applyFromArray($style_col);
$sheet->getStyle("G4")->applyFromArray($style_col);
$sheet->getStyle("H4")->applyFromArray($style_col);
$sheet->getStyle("I4")->applyFromArray($style_col);
/*end - BLOCK HEADER*/

/*start - BLOK AUTOSIZE*/
$sheet ->getColumnDimension('A')->setWidth(11);
$sheet ->getColumnDimension ( "B" )->setWidth(14);;
$sheet ->getColumnDimension ( "C" )->setWidth(12);
$sheet ->getColumnDimension ( "D" )->setWidth(14);
$sheet ->getColumnDimension ( "E" )->setWidth(14);
$sheet ->getColumnDimension ( "F" )->setWidth(8);
$sheet ->getColumnDimension ( "G" )->setWidth(14);
$sheet ->getColumnDimension ( "H" )->setWidth(24);
$sheet ->getColumnDimension ( "I" )->setWidth(11);

$sheet ->getStyle("A")->getAlignment()->setWrapText(true);
$sheet ->getStyle("B")->getAlignment()->setWrapText(true);
$sheet ->getStyle("D")->getAlignment()->setWrapText(true);
$sheet ->getStyle("E")->getAlignment()->setWrapText(true);
$sheet ->getStyle("G")->getAlignment()->setWrapText(true);
$sheet ->getStyle("H")->getAlignment()->setWrapText(true);
$sheet ->getStyle("I")->getAlignment()->setWrapText(true);
/*end - BLOG AUTOSIZE*/

/* start - BLOCK MEMASUKAN DATABASE*/
include 'koneksi.php';
$result=mysql_query("SELECT * FROM undangan_masuk order by no_agenda");
$nomor=4;
while($row=mysql_fetch_array($result)){
	$nomor++;
	$sheet	->setCellValue ( "A".$nomor, $row["no_agenda"] )
	->setCellValue ( "B".$nomor, $row["no_surat_undangan"] )
	->setCellValue ( "C".$nomor, $row["tgl_surat_undangan"] )
	->setCellValue ( "D".$nomor, $row["pengirim"] )
	->setCellValue ( "E".$nomor, $row["tgl_undangan"] )
	->setCellValue ( "F".$nomor, $row["waktu"] )
	->setCellValue ( "G".$nomor, $row["tempat"] )
	->setCellValue ( "H".$nomor, $row["perihal"] )
	->setCellValue ( "I".$nomor, $row["keterangan"] );
	$sheet ->getStyle("A".$nomor)->applyFromArray($style_row);
	$sheet ->getStyle("B".$nomor)->applyFromArray($style_row);
	$sheet ->getStyle("C".$nomor)->applyFromArray($style_row);
	$sheet ->getStyle("D".$nomor)->applyFromArray($style_row);
	$sheet ->getStyle("E".$nomor)->applyFromArray($style_row);
	$sheet ->getStyle("F".$nomor)->applyFromArray($style_row);
	$sheet ->getStyle("G".$nomor)->applyFromArray($style_row);
	$sheet ->getStyle("H".$nomor)->applyFromArray($style_row);
	$sheet ->getStyle("I".$nomor)->applyFromArray($style_row);
}
/* end - BLOCK MEMASUKAN DATABASE*/

/* start - BLOCK MEMBUAT LINK DOWNLOAD*/
header ( 'Content-Type: application/vnd.ms-excel' );
	//namanya adalah keluarga.xls
header ( 'Content-Disposition: attachment;filename="surat_undangan_masuk"'.date("d/m/Y").'".xls' );
header ( 'Cache-Control: max-age=0' );
$writer = PHPExcel_IOFactory::createWriter ( $file, 'Excel5' );
$writer->save ( 'php://output' );
/* start - BLOCK MEMBUAT LINK DOWNLOAD*/

?>