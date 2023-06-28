<?php
    $message = "";
    
    if(isset($_POST["fecha_nacimiento"])) {
        $userDate = $_POST["fecha_nacimiento"];
        
        // Obtener la fecha actual
        $currentDate = date("Y-m-d");
        
        // Comparar las fechas
        if($userDate <= $currentDate) {
            // Calcular la edad del usuario
            $userAge = date_diff(date_create($userDate), date_create($currentDate))->y;
            
            if($userAge >= 18) {
                $message = "Es mayor de edad";
            } else {
                $message = "No es mayor de edad";
            }
        } else {
            $message = "La fecha proporcionada es futura";
        }
    }
?>
