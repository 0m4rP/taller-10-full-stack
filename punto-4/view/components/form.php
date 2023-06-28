<?php include "./controller/ageController.php"; ?>

<form  method="post" action="">
    <h2>Enviar datos</h2>
    <div class="form_row">
        <div>
            <label for="fecha-nacimiento">
                Fecha de nacimiento
            </label>
            <input 
            id="fecha-nacimiento" 
            type="date"
            name="fecha_nacimiento"
            >
        </div>
    </div>
    <button>Enviar</button>
</form>