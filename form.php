<form method="POST">
	<H1><B>APLIKASI PENDAFTARAN SEDERHAMA</B></H1>
	<table>
		<tr>
			<td>nama</td>

			<td>:</td>

			<td><input type="text" name="nama" length="35" required="harus diisi!" placeholder="Maksimal 35 Karakter"></td>

		</tr>

		<tr>

			<td>nim</td>

			<td>:</td>

			<td><input type="text" name="nim" length="10" required="Harus diisi!" placeholder="Maksimal 10 Karakter"></td>

		</tr>

		<tr>
			<td>
				<H3>kelas</H3>
				<form action="">
				<input type="radio" name="kelas" value="D3MI-41-01">D3MI-41-01
				<br>
				<input type="radio" name="kelas" value="D3MI-41-02">D3MI-41-02
				<br>
				<input type="radio" name="kelas" value="D3MI-41-03">D3MI-41-03
				<br>
				<input type="radio" name="kelas" value="D3MI-41-04">D3MI-41-04
				<br>
			</form>
			</td>
		</tr>

		<tr>
			<td>
				<H3>jenis_kelamin</H3>
				<form action="">
				<input type="radio" name="gender" value="Laki-laki">Laki-laki
				<br>
				<input type="radio" name="gender" value="Perempuan">Perempuan
				<br>
				</form>
			</td>
		</tr>

		<tr>
			<td>
				<H3>hobi</H3>
				<form action="" method="post">
				<input type="checkbox" name="hobi" value="Berenang">Berenang<br>
				<input type="checkbox" name="hobi" value="Futsal">Futsal<br/>
				<input type="checkbox" name="hobi" value="Mancing">Mancing<br/>
				<input type="checkbox" name="hobi" value="Balap">Balap<br/>
			</td>
		</tr>

		<tr>
			<td>
				<H3>fakultas</H3>
				<select name="fakultas">
					<option value="-">-</option>
					<option value="FKB">FKB</option>
					<option value="FIT">FIT</option>
					<option value="FEB">FEB</option>
					<option value="FIK">FIK</option>
					<option value="FTE">FTE</option>
			</select>
		</td>
		</tr>

		<tr>
			<td>
				<textarea rows="4" cols="30" >
				</textarea>
			</td>
		</tr>
			<td>password
				<input type="password" name="password" length="20" required="Harus diisi" placeholder="Maksimal 20 Karakter">


		<td>
			<input type="submit" name="submit" value="KIRIM">
		</td>

	</table>
</form>
<?php 
	if(isset($_POST['submit']))
	include 'registrasi.php';
?>
</form>