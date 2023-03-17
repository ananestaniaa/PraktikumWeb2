<?php
$daftarSmartphoneSamsung = ["S22"=>"Samsung Galaxy S22", "S22+"=>"Samsung Galaxy S22+", "SA03"=>"Samsung Galaxy A03", "SXC5"=>"Samsung Galaxy Xcover 5"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK105.php</title>
    <!-- CSS -->
    <style>
        .Samsung {
            font-weight: 800;
            background-color: red;
            padding: 15px 0px;
        }
    </style>
</head>
<body>
<table border="1">
    <tr>                        
        <td   class="Samsung">Daftar Smartphone Samsung</td>        
    </tr>        
    <tr>            
        <td><?php echo $daftarSmartphoneSamsung["S22"]; ?></td>        
    </tr>        
    <tr> 
        <td><?php echo $daftarSmartphoneSamsung["S22+"]; ?></td>        
    </tr>        
    <tr>            
        <td><?php echo $daftarSmartphoneSamsung["SA03"]; ?></td>        
    </tr>        
    <tr>            
        <td><?php echo $daftarSmartphoneSamsung["SXC5"]; ?></td>        
    </tr>    
</table>
</body>
</html>