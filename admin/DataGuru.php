<html>
    <head>
        <title> Data Guru </title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="script.js"></script>
    </head>
    <body>
        <div class="header">
                <h2><a class="judul" href="home.php">SMA NEGERI 1 BANYUWANGI</a></h2>
            </div>
            <div class="menu">
                <nav class="navigation">
                    <ul class="mainmenu">
                        <li><a href="home.php">Dashboard</a></li>
                        <li><a href="DataSiswa.php">Data Siswa</a></li>
                        <li><a class="dipilih" href="DataGuru.php">Data Guru</a></li>
                        <li><a href="DataPembina.php">Data Pembina</a></li>
                        <li><a href="">Akademik</a>
                            <ul class="submenu">
                                <li><a href="">Isi Soal & Jawaban</a></li>
                                <li><a href="">Lihat Soal & Jawaban</a></li>
                                <li><a href="">Hasil</a></li>
                            </ul>
                        </li>
                        <li><a href="">Ekstra Kulikuler</a>
                            <ul class="submenu">
                                <li><a href="">Pilihan Ekstra Kulikuler</a></li>
                                <li><a href="">Peserta Ekstra Kulikuler</a></li>
                                <li><a href="">Ujian Ekstra Kulikuler</a></li>
                            </ul>
                        </li>
                        <li><a href="">Data Base</a></li>
                        <li><a href="loginadmin.php">Log Out</a></li>
                    </ul>
                </nav>
            </div>
            <div class="isi">
                <table class="table1">
                        <tr>
						<th><b> No </b></th>
						<th><b> NIG </b></th>
						<th><b> Nama </b></th> 
						<th><b> Jabatan </b></th>
						<th><b> TTL </b></th>
						<th><b> Alamat </b></th>
						<th><b> No.Hp </b></th>
					</tr>
					
					<tr>
						<th> 1 </th>
						<th> 1113101377 </th>
						<th> Stefania Putri </th>
						<th> Guru Matematika </th>
						<th> BWI, 30-05-1998 </th>
						<th> Jln. Pajajaran Sewu No.13 </th>
						<th> 087755646789 </th>
					</tr>
					
					<tr>
						<th> 2 </th>
						<th> 1113101388 </th>
						<th> Raka Fernando </th>
						<th> Guru Bahasa Indo </th>
						<th> BWI, 30-05-1998 </th>
						<th> Jln. Ikan Layar </th>
						<th> 087908654897 </th>
					</tr>
					
					<tr>
						<th> 3 </th>
						<th> 1113101399 </th>
						<th> Mustika Citra  </th>
						<th> Guru Bahasa Inggris </th>
						<th> BWI, 30-05-1998 </th>
						<th> Jln. Kembang Waru </th>
						<th> 089806457345 </th>
					</tr>
					
					<tr>
						<th> 4 </th>
						<th> 1113101333 </th>
						<th> Andi Asmoro  </th>
						<th> Guru Fisika </th>
						<th> BWI, 30-05-1998 </th>
						<th> Jln. Soekarno </th>
						<th> 085789543678 </th>
					</tr>
					
					<tr>
						<th> 5 </th>
						<th> 1113101344 </th>
						<th> Yulia Sari  </th>
						<th> Guru Biologi </th>
						<th> BWI, 30-05-1998</th>
						<th> Jln. Bunga Mawar </th>
						<th> 087456789101 </th>
					</tr>
					
					<tr>
						<th> 6 </th>
						<th> 1113101322 </th>
						<th> Indri Puspita  </th>
						<th> Guru Sejarah </th>
						<th> BWI, 30-05-1998</th>
						<th> Jln. Bangkalan </th>
						<th> 082345123456</th>
					</tr>
					
					<tr>
						<th> 7 </th>
						<th> 1113101311 </th>
						<th> Heri Angga  </th>
						<th> Guru Olahraga </th>
						<th> BWI, 30-05-1998</th>
						<th> Jln. Jaya Karta </th>
						<th> 085989678543 </th>
					</tr>	
                </table>
                <button type="submit" class="tombol" id="tambah">TAMBAH</button>
                <button type="submit" class="tombol" id="ubah">UBAH</button>
                <button type="submit" class="tombol" id="hapus">HAPUS</button>
            </div>
        </div>
    </body>
</html>