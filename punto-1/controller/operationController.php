<?php
    $result = 0;
    
    if(isset($_POST["first_number"]) && isset($_POST["second_number"]) && isset($_POST["num_operation"])){
        $firstNumber = $_POST["first_number"];
        $secondNumber = $_POST["second_number"];
        $operation = $_POST["num_operation"];
        $result = 0;

        switch($operation){
            case "SUMA":
                $result = $firstNumber + $secondNumber;
                break;
            case "RESTA":
                $result = $firstNumber - $secondNumber;
                break;
            case "MULTIPLICACION":
                $result = $firstNumber * $secondNumber;
                break;
            case "DIVISION":
                $result = $firstNumber / $secondNumber;
                break;
            default:
                $result = "ingrese";
        }
    }
?>
