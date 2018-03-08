
<html>
	<head>
		<title>Pendaftaran Ekskul</title>
			<link href="css/stlye.css" rel="stylesheet" type="text/css" media="all" />
	</head>
	
	<body>
	<form method="POST" action="Editekskul.php">
	<br><br>
	<div class = "isi2">
			
		<table class = "tabel5">
			<tr>
				<th><b>PENDAFTARAN EKSTRA KULIKULER </b></th>
			</tr>
		</table>
		 <?php
           include('Simpan.php');
            ?>
		<!--<table class="tabel6">
			<tr>
				<td>Nama Lengkap </td>
				<td>: &nbsp;&nbsp;<input type="text" name="nama" maxlength="30" size="40"></td>
			</tr>
			
			<tr>
				<td>Tempat Lahir </td>
				<td>: &nbsp;&nbsp;<input type="text" name="tempat" maxlength="30" size="40"></td>
			</tr>
			
			<tr>
				<td>Tanggal Lahir </td>
				<td>: &nbsp;&nbsp;<input type="text" name="tanggal" maxlength="30" size="40"></td>
			</tr>
			
			<tr>
				<td>Kelas </td>
				<td>: &nbsp;&nbsp;<input type="text" name="kelas" maxlength="30" size="40"></td>
			</tr>
			
			<tr>
				<td>Jurusan </td>
				<td>: &nbsp;&nbsp;<input type="text" name="jurusan" maxlength="30" size="40"></td>
			</tr>
			
			<tr>
				<td>No.Hp </td>
				<td>: &nbsp;&nbsp;<input type="text" name="nohp" maxlength="30" size="40"></td>
			</tr>
			
			<tr>
				<td>Ekskul Pilihan </td>
				<td>: &nbsp;&nbsp;<input type="text" name="pilihekskul" maxlength="30" size="40"></td>
			</tr>
			
			<tr>
				<td>Ekskul Wajib </td>
				<td>: &nbsp;&nbsp;<input type="text" name="wajib" maxlength="30" size="40"></td>
			</tr>
			
			<tr>
				<td>Prestasi</td>
				<td>: &nbsp;&nbsp;<input type="text" name="prestasi" maxlength="30" size="40"></td>
			</tr>
			
			<tr>
				<td>Alamat </td>
				<td>: &nbsp;&nbsp;<input type="text" name="alamat" maxlength="30" size="40"></td>
			</tr>
			
			<tr>
				<td>Alasan </td>
				<td>: &nbsp;&nbsp;<input type="text" name="alasan" maxlength="30" size="40"></td>
			</tr>
		</table>-->
	<td>
		<a href="Editekskul.php"><input type="submit" class="Input-btn" name="edit" value="Edit"/></a>
		</td>
	</div>
	</body>
</html>