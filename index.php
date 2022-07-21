<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>website profile</title>
	<link rel="stylesheet" href="desainkq.css">
</head>
<body>
	<section class="sec">
		<header>
			<a href="=#"><img src="pengiriman.png" width="100" height="100" class="logo"></a>
			<ul>
				<li><a href="#content">Home</a></li>
				<li><a href="#Prodact">Prodact</a></li>
				<li><a href="#jasapengirim">jasa pengiriman</a></li>
				<li><a href="#content">Contact</a></li>
			</ul>
		</header>
	
	<div class="content">
		<div class="textBox">
			<h2>That's What<br><span>i like</span></h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			</p>
			</br>
			<a href="#">View All Produce</a>
		</div>
		<div class="imgBox">
			<img src="treckblue.png" class="pepsi">
		</div>
	</div>
	<ul class="thumb">
		<li><img src="treckblue.png" onclick="imgSlider('treckblue.png');changeBgColor('#0062be')"></li>
		<li><img src="treckred.jpg" onclick="imgSlider('treckred.jpg');changeBgColor('#e60c2c')"></li>
		<li><img src="treckblack.jpg" onclick="imgSlider('treckblack.jpg');changeBgColor('#1e1e1e')"></li>
	</ul>
	<ul class="sci">
		<li><a href="https://www.facebook.com/JNEPusat"><img src="facebook.png"></a></li>
		<li><a href="https://twitter.com/JNE_ID"><img src="twitter.png"></a></li>
		<li><a href="https://www.instagram.com/jne_id/?__coig_restricted=1"><img src="instagram.png"></a></li>
	</ul>
	</section>

	<section id="Prodact"><!--</section>-->
     <section class="Prodact">
        <img src="camera1.jpeg" alt="taman budaya" align="left" width="100" height="200">

        <img src="camera2.jpeg" alt="taman budaya" align="right" width="100" height="200">

        <img src="camera3.jpeg" alt="taman budaya" align="right" width="100" height="200">

        <img src="camera4.jpeg" alt="taman budaya" align="left" width="100" height="200">
      </section>
      </section>

      <section id="jasapengirim"><!--</section>-->
     <section class="jasapengirim">
     	<div align="center"><strong><font size="6" face="Courier New, Courier, mono">JASA PENGIRIMAN </font></strong></div>
			<form name="form1" method="post" action="proses.php">
				<table width="58%" border="0" align="center">
					<tr>
						<td>Nama pengirim</td>
						<td><input name="pengirim" type="text" id="pengirim"></td>
					</tr>

					<tr>
						<td>Nama penerima</td>
						<td><input name="penerima" type="text" id="penerima"></td>
					</tr>

					<tr>
						<td>Alamat penerima </td>
						<td><input name="alamat_penerima" type="text" id="alamat_penerima"></td>
					</tr>

					<tr>
						<td>Alamat pengirim </td>
						<td><input name="alamat_pengirim" type="text" id="alamat_pengirim"></td>
					</tr>

					<tr>
						<td>jenis barang  </td>
						<td><input name="jenis" type="text" id="jenis"></td>
					</tr>

					<tr>
						<td>berat barang </td>
						<td><input name="berat" type="text" id="berat"></td>
					</tr>

					<tr>
						<td>E-Mail</td>
						<td><input name="email" type="text" id="email"></td> </tr>
					</tr>

					<tr>
						<td>Status</td>
						<td>
							<select name="status" id="status">
								<option>Menikah</option>
								<option>Single</option>
							</select>
						</td>
					</tr>

					<tr>
						<td>Komentar</td>
						<td><textarea name="komentar" id="komentar"></textarea></td> </textarea>
					</tr>
					<tr>
						<td>Jarak</td>
						<td><input name="jarak" type="text" id="jarak"></td>
					</tr>

					<tr>
						<td>Total bayar</td>
						<td><input name="total_bayar" type="text" id="total_bayar"></td>
					</tr>
					

					<tr>
						<td></td>
						<td><input type="submit" name="Submit" value="Kirim"><input type="reset" name="Submit2" value="Batal">
					</td>
					</tr>


				</table>
			</form>
		<div align="center"><strong><a href="lihat.php">::Lihat strukt pembayaran::
		</a></strong></div>

	<script type="text/javascript">
		function imgSlider(anything){
			document.querySelector('.pepsi').src = anything;
		}
		function changeBgColor(color){
			const sec = document.querySelector('.sec');
			sec.style.background = color;
		}
		var biayajarak = jarak * 5000;
		var potonganjarak = "";
		if (biayajarak > 5000){
			potonganjarak = biayajarak * 0.1
		}else {
			potonganjarak = 0
		};

		var biayaberat = berat * 50000;
		var potonganberat = "";
		if(biayaberat > 1000000){
			potonganberat = biayaberat * 0.05

		}else{
			potonganberat = 0
		}

		var total_potongan = potonganjarak + potonganberat;
		var biaya_pengiriman = (biayajarak + biayaberat) - total_potongan;

	</script>

</body>
</html>