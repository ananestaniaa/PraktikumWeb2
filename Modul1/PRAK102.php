<title>PRAK102.php</title>

<?php
//NIM: 2110817220011
$akhir_nim = 1;

//Deklarasi Variabel
$jarijari = 4.2;
$tinggi = 5.4;
$panjang = 8.9;
$lebar = 14.7;
$sisi = 7.9;
$alasprisma = 6;
$tinggiprisma = 10;
$tinggilimas = 12;

//Deklarasi rumus bangun ruang
$tabung = 3.14 * $jarijari * $jarijari * $tinggi;
$kerucut = 1/3 * 3.14 * $jarijari * $tinggi;
$bola = 4/3 * 3.14 * $jarijari * $jarijari * $jarijari;
$prismaAlasSegitiga = 1/2 * $alasprisma * $tinggiprisma;
$prismaAlasPersegiPanjang = 1/3 * $panjang * $lebar * $tinggilimas;

//Pengkondisian if-else berdasarkan akhir nim 
//Untuk memunculkan hasil perhitungan rumus bangun ruang
//dengan 3 desimal di belakang koma
if($akhir_nim == 0 || $akhir_nim == 1) {
    echo number_format($tabung, 3) . " m3";
} else if($akhir_nim == 2 || $akhir_nim == 3) {
    echo number_format($kerucut, 3) . " m3";
} else if($akhir_nim == 4 || $akhir_nim == 5) {
    echo number_format($bola, 3) . " m3";
} else if($akhir_nim == 6 || $akhir_nim == 7) {
    echo number_format($prismaAlasSegitiga, 3) . " m3";
} else if($akhir_nim == 8 || $akhir_nim == 9) {
    echo number_format($prismaAlasPersegiPanjang, 3) . " m3";
}
?>