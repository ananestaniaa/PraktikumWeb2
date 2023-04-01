<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK203.php</title>
</head>
<body>
    <form action="" method="post">
        Nilai <input type="number" name="suhu"></input></br>
        Dari : </br>
        <input type="radio" name="suhuawal" value="Celcius">Celcius<br>
        <input type="radio" name="suhuawal" value="Fahrenheit">Fahrenheit<br>
        <input type="radio" name="suhuawal" value="Reamur">Reamur<br>
        <input type="radio" name="suhuawal" value="Kelvin">Kelvin<br>
        Ke : </br>
        <input type="radio" name="suhuakhir" value="Celcius">Celcius<br>
        <input type="radio" name="suhuakhir" value="Fahrenheit">Fahrenheit<br>
        <input type="radio" name="suhuakhir" value="Reamur">Reamur<br> 
        <input type="radio" name="suhuakhir" value="Kelvin">Kelvin<br>
        
        <input type="submit" name="submit" value="Konversi"></input>
    </form> 
</body>
</html>

<?php
if (isset($_POST["submit"])) {    
    $suhu = $_POST['suhu'];    
    $suhuawal = $_POST['suhuawal'];    
    $suhuakhir = $_POST['suhuakhir'];    
    if ($suhuawal == "Celcius") {        
        if ($suhuakhir == "Celcius") {
            echo "<h2>Hasil Konversi : $suhu &deg;C</h2>";        
        } elseif ($suhuakhir == "Fahrenheit") {            
            echo "<h2>Hasil Konversi : " . ($suhu * 1.8 + 32) ." &deg;F</h2>";        
        } elseif ($suhuakhir == "Reamur") {                    
            echo "<h2>Hasil Konversi : " . ($suhu * 0.8) . "&deg;R</h2>";
        } elseif ($suhuakhir == "Kelvin") {            
            echo "<h2>Hasil Konversi : " . ($suhu + 273.15) . "&deg;K</h2>";        
        }
    } elseif ($suhuawal == "Fahrenheit") {        
        if ($suhuakhir == "Celcius") {            
            echo "<h2>Hasil Konversi : " . ($suhu - 32) / 1.8 ." &deg;C</h2>";        
        } elseif ($suhuakhir == "Fahrenheit") {            
            echo "<h2>Hasil Konversi : $suhu &deg;F</h2>";        
        } elseif ($suhuakhir == "Reamur") {            
            echo "<h2>Hasil Konversi : " . ($suhu - 32) / 2.25 ." &deg;R</h2>";        
        } elseif ($suhuakhir == "Kelvin") {             
            echo "<h2>Hasil Konversi : " . ($suhu + 459.67) /1.8 . " &deg;K</h2>";        
        }
    } elseif ($suhuawal == "Reamur") {        
        if ($suhuakhir == "Celcius") {             
            echo "<h2>Hasil Konversi : " . ($suhu * 1.25) . "&deg;C</h2>";        
        } elseif ($suhuakhir == "Fahrenheit") {
            echo "<h2>Hasil Konversi : " . ($suhu * 2.25 + 32) ." &deg;F</h2>";        
        } elseif ($suhuakhir == "Reamur") {            
            echo "<h2>Hasil Konversi : $suhu &deg;R</h2>";        
        } elseif ($suhuakhir == "Kelvin") {             
            echo "<h2>Hasil Konversi : " . ($suhu + 273.15) /0.8 . " &deg;K</h2>";        
        }
    } elseif ($suhuawal == "Kelvin") {        
        if ($suhuakhir == "Celcius") {            
            echo "<h2>Hasil Konversi : " . ($suhu - 273.15) . "&deg;C</h2>";        
        } elseif ($suhuakhir == "Fahrenheit") {                       
            echo "<h2>Hasil  Konversi :  " . ($suhu  * 1.8 - 459.67) . " &deg;F</h2>";        
        } elseif ($suhuakhir == "Reamur") {             
            echo "<h2>Hasil Konversi : " . ($suhu - 273.15) *0.8 . " &deg;R</h2>";        
        } elseif ($suhuakhir == "Kelvin") {            
            echo "<h2>Hasil Konversi : $suhu &deg;K</h2>";        
        }    
    }
}
?>