<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <?php
    $Dias = array(
        'Lunes'=>"09:00 a 22:00",
        'Martes'=>"09:00 a 22:00",
        'Miercoles'=>"09:00 a 22:00",
        'Jueves'=>"09:00 a 22:00",
        'Viernes'=>"09:00 a 22:00", 
        'Sabado'=>"10:00 a 22:00", 
        'Domingo'=>"10:00 a 22:00"
    );

    var_dump ($Dias ["Miercoles"]);
    
    foreach ($Dias as $dia => $hora){

        echo "$dia: de $hora <br>";
    }
    ?>


</body>
</html>
