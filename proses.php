<?php 

$pengirim = $_POST['pengirim'];
$penerima = $_POST['penerima'];
$alamat_penerima = $_POST['alamat_penerima'];
$alamat_pengirim = $_POST['alamat_pengirim'];
$jenis = $_POST['jenis'];
$berat = $_POST['berat'];
$email = $_POST['email'];
$status = $_POST['status'];
$komentar = $_POST['komentar'];
$jarak = $_POST['jarak'];
$total_bayar = $_POST['total_bayar'];



echo "<head><title>My Guest Book</title></head>";
$fp = fopen("guestbook.txt", "a+");
fputs($fp, "$pengirim|$penerima|$alamat_penerima|$alamat_pengirim|$jenis|$berat|$email|$status|$komentar|$jarak|$total_bayar\n");
fclose($fp);

echo "Terima kasih atas partisipasi anda mengisi buku tamu<br>";
echo "<a href='tampilan.php'>Isi daftar antar</a><br>";
echo "<a href='lihat.php'>Lihat struk</a><br>";

 ?>



