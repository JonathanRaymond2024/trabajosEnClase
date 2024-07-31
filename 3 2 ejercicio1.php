<?php
    $personas=[
        'nombre' => "Juan",
        'edad' => 25,
        'ciudad' => "Madrid",  
        ];
        
        echo    "<table border='1'>
                    <tr>
                        <td>Nombre</td> <td>{$personas['nombre']}</td>
                    </tr>
                    <tr>
                        <td>Edad</td> <td>{$personas['edad']}</td>
                    </tr>
                    <tr>
                        <td>Ciudad</td> <td>{$personas['ciudad']}</td>
                    </tr>
                </table>";
?>