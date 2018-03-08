<?php
	$Nama = $_POST["Nama"];
	$Tempat_Lahir = $_POST["Tempat_Lahir"];
	$Tanggal_Lahir = $_POST["Tanggal_Lahir"];
	$Kelas = $_POST["Kelas"];
	$Jurusan = $_POST["Jurusan"];
	$No_Hp= $_POST["No_Hp"];
	$Pilihekskul = $_POST["Pilihekskul"];
	$Wajib = $_POST["Wajib"];
	$Prestasi = $_POST["Prestasi"];
	$Alamat = $_POST["Alamat"];
	$Alasan= $_POST["Alasan"];
	
	$data = array	("Nama"=>"$Nama",
					"Tempat_Lahir"=>"$Tempat_Lahir",
					"Tanggal_Lahir"=>"$Tanggal_Lahir",
					"Kelas"=>"$Kelas",
					"Jurusan"=>"$Jurusan",
					"No_Hp"=> "$No_Hp",
					"Pilihekskul"=>"$Pilihekskul",
					"Wajib"=>"$Wajib",
					"Prestasi"=>"$Prestasi",
					"Alamat"=>"$Alamat",
					"Alasan"=>"$Alasan");
echo "<table class='tabel7'>";
foreach($data as $a=> $b )
{
 echo 	"<tr>
			<td>$a</td>
			<td>$b</td>
		</tr>";
}
echo "</table>";

?>