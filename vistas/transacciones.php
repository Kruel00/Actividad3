<html>
<div class="include-tittle">
    <h1>Lista de transacciones</h1>
</div>

</html>

<?php
$insertconsult = "select * from transaccion";
$result = sqlsrv_query($con, $insertconsult);
echo
"<table id='transac'>
        <tr>
            <td align='center'>ID de Transaccion</td>
            <td align='center'>Criptomoneda</td>
            <td align='center'>Tipo de transaccion</td>
            <td align='center'>Cantidad</td>
            <td align='center'>Precio de divisa</td>
            <td align='center'>Sub-Total</td>
            <td align='center'>comision</td>
            <td align='center'>Total</td>
            <td align='center'>Editar</td>
            <td align='center'>Borrar</td>
        </tr>
        <tr>
    ";

while ($row = sqlsrv_fetch_array($result)) {
    $consultaCripto = "select nombre from criptomoneda where CriptomonedaId = $row[1]";
    $tipocrip = sqlsrv_query($con, $consultaCripto);
    $moneda = sqlsrv_fetch_array($tipocrip);
    $mn = $moneda['nombre'];
    if ($row[2]) {
        $cto = "Compra";
    } else {
        $cto = "Venta";
    }

    echo
    "<td align='center'>$row[0]</td>
            <td align='center'>$mn</td>
            <td align='center'>$cto</td>
            <td align='center'>$row[3]</td>
            <td align='center'>$$row[4]</td>
            <td align='center'>$$row[5]</td>
            <td align='center'>$$row[6]</td>
            <td align='center'>$$row[7]</td>
            <td align='center'><a href='vistas/editTransac.php?editarTransac=$row[0]'>Editar</a></td>
            <td align='center'><a href='index.php?borrarTransac=$row[0]'>Borrar</a></td>
            </tr>";
}
echo "
    </table>"

?>