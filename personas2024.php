<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

   
</head>
<body>
    <?php
        $personas=[
            'nombre' => "Daniel",
            'apellido' => "Pereyra",
            'edad' => 29,
            'ciudad' => "Montevideo",
            'sexo' => "Masculino",
            ];
            $personas['auto']= false;
            $personas['vacaciones'] = true;

            $personas['nombre'] = "Gustavo";
            $personas['edad'] = "25";
            $personas['ciudad'] = "punta del este";
            
            if($personas['auto']){ 
                if($personas['vacaciones']){
                    echo "<p>su nombre completo es <strong>{$personas['nombre']} {$personas['apellido']}</strong> su edad es <strong>{$personas['edad']}</strong> vive en la ciudad de <strong>{$personas['ciudad']}</strong> su sexo es <strong>{$personas['sexo']}, tiene auto</strong>, <strong>esta de vacaciones</strong></p>";
                }
                else{
                    echo "<p>su nombre completo es <strong>{$personas['nombre']} {$personas['apellido']}</strong> su edad es <strong>{$personas['edad']}</strong> vive en la ciudad de <strong>{$personas['ciudad']}</strong> su sexo es <strong>{$personas['sexo']}, tiene auto</strong>, <strong>no esta de vacaciones</strong></p>";
                }
            }else{
                if($personas['vacaciones']){
                    echo "<p>su nombre completo es <strong>{$personas['nombre']} {$personas['apellido']}</strong> su edad es <strong>{$personas['edad']}</strong> vive en la ciudad de <strong>{$personas['ciudad']}</strong> su sexo es <strong>{$personas['sexo']}, no tiene auto</strong>, <strong>esta de vacaciones</strong></p>";
                    
                }
                else{
                    echo "<p>su nombre completo es <strong>{$personas['nombre']} {$personas['apellido']}</strong> su edad es <strong>{$personas['edad']}</strong> vive en la ciudad de <strong>{$personas['ciudad']}</strong> su sexo es <strong>{$personas['sexo']}, no tiene auto</strong>, <strong>no esta de vacaciones</strong></p>";

                }
            }
            // se debe poner {} en por ej: {$personas['nombre']}, de esta forma lo imprime en pantalla, sino dara error 
            ?>

</body>
</html>