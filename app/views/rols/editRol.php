<div class="container2">
    <div class="data-container">
        <form action="/rol/update" method="post">
            <div class="form-group">
                <label for="txtId">ID</label>
                <input type="text" value="<?php echo $infoReal->id ?>" name="txtId" id="txtId" readonly>
            </div>
            <div class="form-group">
                <label for="txtNombre">Nombre</label>
                <input type="text" value="<?php echo $infoReal->nombre ?>" name="txtNombre" id="txtNombre">
            </div>
            <div class="form-group">
                <button type="submit">Editar</button>
            </div>
        </form>
    </div>
</div>