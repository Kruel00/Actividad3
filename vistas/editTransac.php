<html>
<h1>Editar transaccion</h1>
<div class="form-area">
    <form action="index.php" method="POST">
        <div class="form-control">
            <label for="">Seleccione criptomoneda</label>
            <select name="cripto" id="criptomoneda">
                <?php
                foreach ($crptomonedas as $cripto) {
                    echo "<option value='$cripto[0]'> $cripto[1] </option>";
                }
                ?>
            </select>
        </div>
        <div class="form-control">
            <label for="">Tipo de transaccion</label>
            <select name="tipoTransaccion" id="">
                <option value="0">Vender</option>
                <option value="1">comprar</option>
            </select>
        </div>
        <div class="form-control">
            <label for="txtCantidad">Cantidad de criptomonedas</label>
            <input type="text" name="Cantidad" id="txtCantidad">
        </div>
        <input type="submit" name="regTransaccion" id="">
    </form>

    <button onclick="window.location='index.php'">Cancelar</button>
</div>

</html>