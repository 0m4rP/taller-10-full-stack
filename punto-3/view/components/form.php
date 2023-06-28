<form  method="get" action="./view/pages/user-page-info.php">
    <h2>Enviar datos</h2>
    <div class="form_row">
        <div>
            <label for="first-name">
                Nombre
            </label>
            <input 
            id="first-name" 
            type="text"
            name="first_name"
            placeholder="John"
            >
        </div>
        <div>
            <label for="last-name">
                Apellido
            </label>
            <input 
            id="last-name" 
            type="text"
            name="last_name"
            placeholder="Doe"
            >
        </div>
        <div>
            <label for="id-number">
                Cédula
            </label>
            <input 
            id="id-number" 
            type="text"
            name="id_number"
            placeholder="2511561451"
            >
        </div>
    </div>
    <button>Enviar</button>
</form>