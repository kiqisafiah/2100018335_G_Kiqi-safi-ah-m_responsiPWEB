<?php 

$pengirim = $_POST['pengirim'];
$penerima = $_POST['penerima'];
$jarak = $_POST['jarak'];
$alamat = $_POST['alamat'];
$jenis = $_POST['jenis'];
$berat = $_POST['berat']

echo "<head><title>tampilan struk</title></head>";
$fp = fopen("struk.txt", "a+");
fputs($fp, "$pengirim|$penerima|$jarak|$alamat|$jenis|$berat\n");
fclose($fp);

echo "Terima kasih atas partisipasi anda mengisi buku tamu<br>";
echo "<a href='tampilan.php'>Isi buku tamu</a><br>";
echo "<a href='lihat.php'>Lihat buku tamu</a><br>";

 ?>
