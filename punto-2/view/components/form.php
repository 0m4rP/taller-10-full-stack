<?php include "./controller/ageController.php"; ?>


<form  method="post" action="">
    <h2>Calculadora de edad</h2>
    <div class="form_row">
        <div>
            <label for="user-age">
                Edad
            </label>
            <input 
            id="user-age" 
            type="text"
            name="user_age"
            placeholder="25"
            >
        </div>
    </div>
    <button>calcular</button>
</form>