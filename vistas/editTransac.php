<?php
if(isset($_GET['editarTransac']))
{
    include('../controladores/conectDB-local.php');

    $valor = $_GET['editarTransac'];
    $insertconsult = "select * from transaccion where transaccionId = $valor";
    $result = sqlsrv_query($con, $insertconsult);
    $registro = sqlsrv_fetch_array($result);


    $criptomonedas = array();
    $criptoConsult = "select * from criptomoneda";
    $criptosR = sqlsrv_query($con, $criptoConsult );

    while ($row = sqlsrv_fetch_array($criptosR)) {
        $moneda = [
            $row[0],
            $row[1],
            $row[2]
        ];
        array_push($criptomonedas,$moneda);
    }
}
?>

<html>
<h1>Editar transaccion <?php echo $valor ?></h1>
<div class="form-area">
    <form action="../index.php?updateTransac=<?php echo $valor; ?>" method="POST">
        <div class="form-control">
            <label for="">Seleccione criptomoneda</label>
            <select name="cripto" id="criptomoneda">
                <?php
                foreach ($criptomonedas as $cripto) {
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
            <input type="text" name="Cantidad" value = <?php echo $registro[3]; ?> id="txtCantidad">
        </div>
        <input type="submit" name="updateTransaccion" id="">
    </form>

    <button onclick="window.location='../index.php'">Cancelar</button>
</div>

</html>