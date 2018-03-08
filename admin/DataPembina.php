<html>
    <head>
        <title> Data Pembina </title>
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
                        <li><a href="DataGuru.php">Data Guru</a></li>
                        <li><a class="dipilih" href="DataPembina.php">Data Pembina</a></li>
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
						<th><b> Jenis Ekstrakurikuler </b></th>
						<th><b> Nama Pembina </b></th> 
						<th><b> Pelatih </b></th>
					</tr>
					
					<tr>
						<th> 1 </th>
						<th> Bola Basket </th>
						<th> Drs. Akhmad Wiyono M.Pd. </th>
						<th> Drs. Akhmad Wiyono M.Pd.</th>
					</tr>
					
					<tr>
						<th> 2 </th>
						<th> Bola Voli</th>
						<th> Drs. Supriyanto</th>
						<th> Drs. Supriyanto </th>
					
					</tr>
					
					<tr>
						<th> 3 </th>
						<th> Sepak Bola </th>
						<th> Drs.Moh.Dedi,MM,M.Pd.  </th>
						<th> Syahroni </th>
						
					</tr>
					
					<tr>
						<th> 4 </th>
						<th> PMR</th>
						<th> Rina Kartika,S.S.M.Pd </th>
						<th> Guru Fisika </th>
					</tr>
					
					<tr>
						<th> 5 </th>
						<th> Karya Ilmiah Remaja </th>
						<th> Muttafaqur Rohman,S.Pd</th>
						<th> - </th>
						
					</tr>
					
					<tr>
						<th> 6 </th>
						<th> Pecinta Alam </th>
						<th> Drs.Lis Dewantoro  </th>
						<th> Drs.Lis Dewantoro </th>
						
					</tr>
					
					<tr>
						<th> 7 </th>
						<th> Bulu Tangkis </th>
						<th> Bayu Abrianto,S.Pd </th>
						<th> - </th>
						
					</tr>	
                </table>
                <button type="submit" class="tombol" id="tambah">TAMBAH</button>
                <button type="submit" class="tombol" id="ubah">UBAH</button>
                <button type="submit" class="tombol" id="hapus">HAPUS</button>
            </div>
        </div>
    </body>
</html>