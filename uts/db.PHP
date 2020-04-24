<?php
$wilayah = $_POST['wilayah'];
$positif = $_POST['positif'];
$rawat = $_POST['rawat'];
$sembuh = $_POST['sembuh'];
$meninggal = $_POST['meninggal'];
$operator = $_POST['operator'];
$nim = $_POST['nim'];

switch ($_POST['wilayah']) {
	case "dki":
		$wilayah = "DKI Jakarta";
		break;
	
	case "jabar":
		$wilayah = "Jawa Barat";
		break;
	
	case "banten":
		$wilayah = "Banten";
		break;
		
	case "jateng":
		$wilayah = "Jawa Tengah";
		break;
	
	default :
		$wilayah = "Tidak Dipilh";
		break;
}

$hari = array ( 1 =>    'Senin',
			'Selasa',
			'Rabu',
			'Kamis',
			'Jumat',
			'Sabtu',
			'Minggu'
		);


?>
<p align="center">
Data Pemantauan COVID-19 wilayah <?php echo " ".$wilayah ?><br>
per <?php  date_default_timezone_set('Asia/Jakarta'); echo $hari[date('N')]; echo ", "; echo date('d-m-Y H:i:s A');?> <br>
Operator : <?php echo " ".$operator ?> | NIM : <?php echo " ".$nim ?>
</p>
<table border="2" align=center>
	<tr>
		<td width=100 align=center>Positif</td>
		<td width=100 align=center>Dirawat</td>
		<td width=100 align=center>Sembuh</td>
		<td width=100 align=center>Meninggal</td>
	</tr>
	<tr>
		<td width=100 align=center><?php echo " ".$positif ?></td>
		<td width=100 align=center><?php echo " ".$rawat ?></td>
		<td width=100 align=center><?php echo " ".$sembuh ?></td>
		<td width=100 align=center><?php echo " ".$meninggal ?></td>
	</tr>
	
</table>