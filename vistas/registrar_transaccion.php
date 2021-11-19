<?php
$insertconsult = "select * from criptomoneda";
$result = sqlsrv_query($con, $insertconsult);
$crptomonedas = array();

while ($row = sqlsrv_fetch_array($result)) {
    $moneda = [
        $row[0],
        $row[1]
    ];

    array_push($crptomonedas, $moneda);
}

?>
<html>
<div class="tittle-incl">
    <h1>Nueva transaccion</h1>
</div>

<div class="form-area">
    <form action="index.php" method="POST">
        <div class="form-control">
            <div class="form-label">
                <label for="">Seleccione criptomoneda</label>
            </div>
            <select name="cripto" id="criptomoneda">
                <?php
                foreach ($crptomonedas as $cripto) {
                    echo "<option value='$cripto[0]'> $cripto[1] </option>";
                }
                ?>
            </select>
        </div>
        <div class="form-label">
            <label for="">Tipo de transaccion</label>
        </div>
        <div class="form-control">
            <select name="tipoTransaccion" id="">
                <option value="0">Vender</option>
                <option value="1">comprar</option>
            </select>
        </div>

        <div class="form-label">
            <label for="txtCantidad">Cantidad de criptomonedas</label>
        </div>
        <div class="form-control">
            <input type="text" name="Cantidad" id="txtCantidad">
        </div>
        <input type="submit" name="regTransaccion" value="Realizar tranzaccion" id="enviarlo">
    </form>
    <div class="cancel-button">
        <button onclick="window.location='index.php'">Cancelar</button>
    </div>

</div>

</html>