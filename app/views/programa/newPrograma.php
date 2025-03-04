<div class="container2">
    <div class="data-container">
        <form action="/programa/create" method="post">
            <div class="form-group">
                <label for="txtCodigo">codigo:</label>
                <input type="number" name="txtCodigo" id="txtCodigo">
            </div>
            <div class="form-group">
                <label for="txtNombre">Nombre:</label>
                <input type="text" name="txtNombre" id="txtNombre">
            </div>
            <div class="form-group">
                <label for="txtCentro">Centro:</label>
                <select name="txtCentro" id="txtCentro">
                    <?php
                    if (isset($centros) && is_array($centros)) {
                        foreach ($centros as $key => $value) {
                            echo "<option value='$value->id'>$value->nombre</option>";
                        }
                    }
                    ?>
                </select>
            
            </div>
            

            <div>
                <button type="submit">Crear</button>
            </div>
        </form>
    </div>
</div>