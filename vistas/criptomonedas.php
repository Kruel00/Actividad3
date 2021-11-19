<html>
<div class="tittle-incl">
    <h1>Lista de criptomonedas aceptadas</h1>
</div>

</html>

<?php
$insertconsult = "select * from criptomoneda";
$result = sqlsrv_query($con, $insertconsult);
echo
"<table id='transac'>
        <tr>
            <td align='center'>ID de criptomoneda</td>
            <td align='center'>Criptomoneda</td>
            <td align='center'>Tipo de cambio</td>
            <td align='center'>Editar</td>
            <td align='center'>Borrar</td>
        </tr>
    ";

while ($row = sqlsrv_fetch_array($result)) {
    echo
    "<tr>
            <td align='center'>$row[0]</td>
            <td align='center'>$row[1]</td>
            <td align='center'>$row[2]</td>
            <td align='center'><a href='vistas/editcripto.php?editarCripto=$row[0]'>Editar</a></td>
            <td align='center'><a href='index.php?borrarCripto=$row[0]'>Borrar</a></td>
            ";
}
echo "
        </tr>
    </table>"
?>