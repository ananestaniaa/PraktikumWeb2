<title>PRAK103.php</title>

<?php
//Deklarasi Variabel
$Celcius = 37.841;

//Deklarasi Rumus
$Fahrenheit = ($Celcius * 9/5) + 32;
$Reamur = $Celcius * 4/5;
$Kelvin = $Celcius + 273.15;

//Menampilkan hasil perhitungan rumus dengan 4 desimal di belakang koma
echo "Fahrenheit (F) :".number_format($Fahrenheit, 4)."<br>";    
echo "Reamur (R): ".number_format($Reamur, 4)."<br>";    
echo "Kelvin (K) :".number_format($Kelvin, 4)."<br>";
?>