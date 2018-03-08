
<html>
	<head>
		<title>Ubah Ektrakurikuler</title>
			<link href="css/stlye.css" rel="stylesheet" type="text/css" media="all" />
	</head>
	
	<body>
	<br><br>
	<div class = "isi1">
			
		<table class = "tabel5">
		<tr>
			<th><b>FORMULIR PENDAFTARAN EKSTRA KULIKULER </b></th>
		</tr>
			
		<form method="POST" action="SimpanEkskul2.php">
		<table class="tabel6">
			<tr for = "Nama">
				<td>Nama Lengkap </td>
				<td>: &nbsp;&nbsp;<input type="text" name="Nama" maxlength="30" size="40"></td>
			</tr>
			
			<tr for = "Tempat_Lahir">
				<td>Tempat Lahir </td>
				<td>: &nbsp;&nbsp;<input type="text" name="Tempat_Lahir" maxlength="30" size="40"></td>
			</tr>
			
			<tr for = "Tanggal_Lahir">
				<td>Tanggal Lahir </td>
				<td>: &nbsp;&nbsp;<input type="date" name="Tanggal_Lahir" maxlength="30" size="40"></td>
			</tr>
			
			<tr for = "Kelas">
				<td>Kelas</td>
				<td>: &nbsp;&nbsp; <select name="Kelas">
					<option value="pilihkelas"/> --Pilih Kelas-- </option>
					<option value="X"/> X </option>
					<option value="XI"/> XI </option>
					<option value="XII"/> XII </option>
				</td>
			</tr>
			
			<tr for = "Jurusan">
				<td>Jurusan</td>
				<td>: &nbsp;&nbsp;
				<input type="radio" name="Jurusan" value="IPA"/> IPA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="radio" name="Jurusan" value="IPS"/> IPS 
				</td>
			</tr>
			
			<tr for = "No_Hp">
				<td>No.Hp </td>
				<td>: &nbsp;&nbsp;<input type="text" name="No_Hp" maxlength="30" size="40"></td>
			</tr>
			
			
			<tr for ="Pilihekskul">
				<td>Ekskul Pilihan</td>
				<td>: &nbsp;&nbsp; <select name="Pilihekskul">
					<option value="Pilihekskul"/> --Pilih Ekskul-- </option>
					<option value="Teater"/> Teater</option>
					<option value="Bina Vokalia"/> Bina Vokalia </option>
					<option value="Pecinta Alam"/> Pecinta Alam </option>
					<option value="Pencak Silat"/> Pencak Silat </option>
					<option value="Karya Tulis Ilmiah"/> Karya Tulis Ilmiah </option>
					<option value="PIK Remaja"/> PIK Remaja </option>
					<option value="Baca Tulis Quran"/> bACA tULIS Quran </option>
					<option value="Bola Voli"/> Bola Voli </option>
					<option value="Sepak Bola"/> Sepak Bola </option>
					<option value="PMR"/> PMR </option>
					<option value="Bulu Tangkis"/> Bulu Tangkis </option>
					<option value="Bola Basket"/> Bola Basket </option>
					<option value="Seni Tari"/> Seni Tari </option>
					<option value="Baca Puisi"/> Baca Puisi </option>
				</td>
			</tr>
			
				
			<tr for = "Wajib">
				<td>Ekskul Wajib</td>
				<td>: &nbsp;&nbsp; <select name="Wajib">
					<option value="Pendidikan Kepramukaan"/> Pendidikan Kepramukaan</option>
				</td>
			</tr>
			
			<tr for = "Prestasi">
				<td>Prestasi yang pernah diraih</td>
				<td>: &nbsp;&nbsp;<input type="text" name="Prestasi" maxlength="30" size="40" placeholder = " untuk kelas X "></td>
			</tr>
			
			<tr for = "Alamat">
				<td>Alamat Lengkap </td>
				<td>: &nbsp;&nbsp;<input type="text" name="Alamat" maxlength="30" size="40"></td>
			</tr>
			
			<tr for = "Alasan">
				<td> Alasan </td>
				<td>: &nbsp;&nbsp; <textarea name="Alasan"></textarea></td>
			</tr>
			
			<td>
				<input type="submit" class="Input-btn1" name="simpan" value="Simpan"/>
			</td>
			
			<td>
				<input type="reset" class="Input-btn2" name="reset" value="Reset"/>
			</td>
	
		</table>
		</form>
