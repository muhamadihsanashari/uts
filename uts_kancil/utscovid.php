<html>
<head>
	<title>Data Pemantauan COVID-19</title>
</head>

<body>
<form action="db.php" method="post">
	<h1>Masukkan Data COVID-19</h1>
		<p>Wilayah : <br>
			<select name="wilayah">
				<option value="">- Pilih Wilayah -</option>
				<option value="dki">DKI Jakarta</option>
				<option value="jabar">Jawa Barat</option>
				<option value="banter">Banten</option>
				<option value="jateng">Jawa Tengah</option>
			</select>
		</p>
		
		<p>Jumlah Positif : <br>
			<input type="text" name="positif" width="10">
		</p>
		
		<p>Jumlah Dirawat : <br>
			<input type="text" name="rawat" width="10">
		</p>
		
		<p>Jumlah Sembuh : <br>
			<input type="text" name="sembuh" width="10">
		</p>
		
		<p>Jumlah Meninggal : <br>
			<input type="text" name="meninggal" width="10">
		</p>
		
		<p>Nama Operator : <br>
			<input type="text" name="operator" width="10">
		</p>
		
		<p>NIM : <br>
			<input type="text" name="nim" width="10">
		</p>
		
		<p>
			<input type="submit" value="simpan" name="simpan">
		</p>
</form>
</body>
</html>