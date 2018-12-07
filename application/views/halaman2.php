<!DOCTYPE html>
<html>
<head>
	<title>ini baruna</title>
</head>
<body>
	<header>
		<center>
		<p>
			<a name="logo">
				<img src="<?php echo base_url ("assets/img/html5.png"); ?>" width="200px" height="200px" alt="gambar html">
			</a>
		</p>
				<h1>HTML 5</h1>
		</center>

		 <nav>
		 	<a name="daftarisi">
		 		<h3>Daftar Isi</h3>
		 	</a>
		 	<ul>
		 		<li>
		 			<a href="#logo">Menuju ke Logo</a>
		 		</li>
		 		<li>
		 			<a href="#daftarisi">Daftar Isi</a>
		 		</li>
		 		<li>
		 			<a href="#menujuform">Menuju Form</a>
		 		</li>
		 		<li>
		 			<a href="#menujutabel">Menuju Tabel</a>
		 		</li>	
		 	</ul>
		 	<hr width="100%">
		</nav>

		<main>
			<a name="menujuform">
				<h3>FORM</h3>
			</a>
				<section>
					<form action="halaman2.html" method="get">
					<p>	
						<label>Nama:</label>
							<input type="text" name="username" placeholder="username"/>
					</p>
					<p>
						<label>Email:</label>
							<input type="Email" name="email" placeholder="email"/>
					</p>
					<p>
						<label>Tanggal Lahir:</label>
							<input date="tanggal lahir" name="tanggal lahir" placeholder="tanggal lahir"/>
					</p>
						
						<label>Jenis Kelamin:</label> 
   						<input type="radio" name="hobi1" value="HTML"/>Laki -laki
   						<input type="radio" name="hobi1" value="HTML"/>Perempuan
   						<input type="radio" />Waria
   					<p>	
   						<label>Hobi:</label>
   						<input type="checkbox" name="hobi1" value="HTML"/>Berkendara
   						<input type="checkbox" name="hobi1" value="HTML"/>Bermain Musik
   						<input type="checkbox" />Belajar
   						<br>
   						<br>
   						<td>
   							<button type="submit">Simpan</button>
   						</td>
   						<td>
   							<button type="submit">Reset</button>
   						</td>
   						<hr width="100%">
   					</p>
   						
				</section>
			
		<section>
		<a name="menujutabel">	
			<h3>TABEL</h3>
		</a>
				<table border="1">
					<tr>
						<td style="text-align: center;">NO</td>
						<td style="text-align: center;">Nama</td>
						<td style="text-align: center;">Kuliah</td>
						<td style="text-align: center;">Gereja</td>
						<td style="text-align: center;">Motor</td>
					</tr>
					<tr>
						<td style="text-align: center;">1</td>
						<td style="text-align: center;">Baruna Marines</td>
						<td style="text-align: center;">Unla</td>
						<td style="text-align: center;">MY</td>
						<td style="text-align: center;">Zx10rr</td>
					</tr>
					<tr>
						<td style="text-align: center;">2</td>
						<td style="text-align: center;">Gradi</td>
						<td style="text-align: center;">Unikom</td>
						<td colspan="2" style="text-align: center;">MY</td>
						
					</tr>
					<tr>
						<td style="text-align: center;">3</td>
						<td style="text-align: center;">Tita</td>
						<td rowspan="2">Unpar Marnat</td>
						<td style="text-align: center;">MY</td>
						<td style="text-align: center;">Ducati Panigale</td>
					</tr>
					<tr>
						<td style="text-align: center;">4</td>
						<td style="text-align: center;">Tirta</td>
						<td style="text-align: center;">MY</td>
						<td style="text-align: center;">Honda Sp1</td>
					</tr>
				</table>
				<hr width="100%">
		</section>
</main>
		
<footer>
	Baruna, 5 Desember 2018 &copy; Baruna IT
</footer>
	</header>
</body>
</html>