<?php 

echo date('Y - m - d ', strtotime('2022-07-01'));
echo "<head><title>My Guest Book</title></head>";
$fp = fopen("guestbook.txt", "r");

echo "<table border='0'>";

while ($isi = fgets($fp)) {
    $pisah = explode('|', $isi);
    echo "<tr><td>Nama Pengirim: </td><td> $pisah[0] </td></tr>";
    echo "<tr><td>Nama Penerima: </td><td> $pisah[1] </td></tr>";
    echo "<tr><td>Alamat penerima: </td><td>: $pisah[2] </td></tr>";
    echo "<tr><td>Alamat pengirim: </td><td>: $pisah[3] </td></tr>";
    echo "<tr><td>jenis: </td><td>: $pisah[4] </td></tr>";
    echo "<tr><td>berat: </td><td>: $pisah[5] </td></tr>";
    echo "<tr><td>Email: </td><td>: $pisah[6] </td></tr>";
    echo "<tr><td>Status: </td><td>: $pisah[7] </td></tr>";
    echo "<tr><td>Komentar: </td><td>: $pisah[8] </td></tr>";
    echo "<tr><td>jarak: </td><td>: $pisah[9] </td></tr>";
    echo "<tr><td>total bayar: </td><td>: $pisah[10] </td></tr>";
    echo "<tr><td><br></td><td><br></td></tr>";
}

echo "</table>";
echo "<a href='prjek.php'> Isi buku tamu </a>";

?>
