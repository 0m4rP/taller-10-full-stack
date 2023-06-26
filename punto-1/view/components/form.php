<?php include "./controller/operationController.php"?>

<form method="post">
    <h2>Calculadora</h2>
    <div class="form_row">
        <div>
            <label for="first-number">Primer numero</label>
            <input type="text" id="first-number" name="first_number" placeholder="500"> 
        </div>
        <div>
            <label for="second-number">Segundo numero</label>
            <input type="text" id="second-number" name="second_number" placeholder="500"> 
        </div>
        <div>
            <label for="operation">Seleccione operacion</label>
                <select name="num_operation" id="operation">
                    <option value="SUMA">SUMA</option>
                    <option value="RESTA">RESTA</option>
                    <option value="MULTIPLICACION">MULTIPLICACION</option>
                    <option value="DIVISION">DIVISION</option>
                </select>
        </div>
    </div>
    <button>Calcular</button>
</form>
