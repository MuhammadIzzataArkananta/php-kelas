<h1>SMKN 2 Buduran</h1>
<p>Belajar php</p>
<form action="" method="post">
    nama:
    <input type="text" name="nama" placeholder="Masukkan Nama">
    <input type="submit" name="tombol" value="kirim">
</form>
<a href="?coba=rpl">klik</a>
<?php 

if (isset($_POST["nama"])){
    $isi = $_POST["nama"];
    echo "<h2>$isi</h2>";
}

$angka = 0.5 * 5 * 10;
echo var_dump($angka);
echo "<h1> $angka</h1>";

function Persegi($s){
    $sisi = $s * $s;
    return $sisi;
}

function Lingkaran($r){
    $luas = 3.14 * $r * $r;
    return $luas;
}

function Segitiga($a, $t){
    $luas = 1/2 * $a * $t;
    return $luas;
}

function Tabung($r, $t){
    $volume = 3.14 * $r * $r * $t;
    return $volume;
}

function Kubus($s){
    $volume = $s * $s * $s;
    return $volume;
}

?>
