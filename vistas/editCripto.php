<?php
if(isset($_GET['editarCripto']))
{
    include('../controladores/conectDB-local.php');

    $valor = $_GET['editarCripto'];
    $insertconsult = "select * from criptomoneda where CriptomonedaId = $valor";
    $result = sqlsrv_query($con, $insertconsult);
    $registro = sqlsrv_fetch_array($result);
}
?>

<html>
<h1>Editar criptomoneda</h1>
<form action="" method="POST">
    <div class="form-control">
        <label for="txtCripto">Nombre de criptomoneda</label>
        <input type="text" name="criptoName" value='<?php echo $registro[1]; ?>'>
    </div>
    <div class="form-control">
        <label for="txtTpCambio">Valor en dolares</label>
        <input type="text" name="criptoValue" value='<?php echo $registro[2]; ?>'>
    </div>
    <div class="form-control">
        <input type="submit" name="saveCrip" id="">
    </div>
</form>

<button onclick="window.location='../index.php'">Cancelar</button>
</html>
