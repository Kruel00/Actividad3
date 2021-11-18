<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/site.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>

<body>
    <div class="top-banner">
        <h1>CRIPTOMONEDAS <?php phpversion(); ?></h1>
    </div>

    <div class="top-menu">
        <ul>
            <li><a href="index.php?nuevacripto=1">Nueva criptomeneda</a></li>
            <li><a href="index.php?nuevaTransaccion=1">Nueva transaccion</a></li>
            <li><a href="index.php?mostrarCriptomonedas=1">Criptomonedas aceptadas</a></li>
        </ul>
    </div>
    
    <div class="body-page">
        <?php
        include('controladores/conectDB-local.php');
        

        if (isset($_GET['nuevacripto'])) {
            include('vistas/registro_cripto.php');
        }

        if (isset($_GET['nuevaTransaccion'])) {
            include('vistas/registrar_transaccion.php');
        }

        if (isset($_GET['mostrarCriptomonedas'])) {
            include('vistas/criptomonedas.php');
        }

        if (isset($_GET['mostrarTransacciones'])) {
            include('vistas/transacciones.php');
        }

        if (isset($_GET['borrarTransac'])) {
            $transaccionId = $_GET['borrarTransac'];
            $borrarq = "delete from transaccion where transaccionId = $transaccionId";
            sqlsrv_query($con, $borrarq);
        }

        if (isset($_GET['editarTransac'])) {
            $SolicitudID = $_GET['editarTransac'];
            include("vistas/editTransac.php");
        }

        if (isset($_GET['borrarCripto'])) {
            $CriptomonedaId = $_GET['borrarCripto'];
            $borrarq = "delete from criptomoneda where CriptomonedaId = $CriptomonedaId";
            sqlsrv_query($con, $borrarq);
            echo "<script>location.href='index.php?mostrarCriptomonedas=1';</script>";
        }

        if (isset($_GET['editarCripto'])) {
            $SolicitudID = $_GET['editarCripto'];
            include("vistas/editCripto.php");
        }
        
        //Registrar una nueva divisa en la base de datos
        if (isset($_POST['saveCrip'])) {
            $cn = $_POST['criptoName'];
            $cv = $_POST['criptoValue'];
            $insertconsult = "insert into criptomoneda values ('$cn',$cv);";
            $result = sqlsrv_query($con, $insertconsult);
            if ($result) {
                echo "<script>location.href='index.php?mostrarCriptomonedas=1';</script>";
            } else {
                echo "<script>location.href='index.php?criptoSaved=false';</script>";
            }
        }

        if (isset($_POST['regTransaccion'])) {
                $cn = intval($_POST['cripto']);
                $tt = $_POST['tipoTransaccion'];
                $cc = floatval($_POST['Cantidad']);
                    $precioDivisa = "select tipoDeCambio from criptomoneda where CriptomonedaId = $cn;";
                    $result = sqlsrv_query($con, $precioDivisa);
                    $valor = sqlsrv_fetch_array($result);
                $pd = floatval($valor['tipoDeCambio']);
                $st = $pd * $cc;

                if($st <1000)
                {
                    $cm = $st*.05;
                }
                else
                {
                    $cm = $st*.01;
                }
                 
                if($tt == 0)
                {
                    $ttr = $st + $cm;
                }
                else
                {
                    $ttr = $st - $cm;
                }
                echo "Valores: " . "Criptomoneda=" . $cn .  " Tipo de transaccion=" . $tt . " Cantidad=" . $cc . " Precio de la divisa=" . $pd . " Sub-Total=" . $st . " Comision=" . $cm . " Total=".$ttr;
                var_dump($pd);
                $consultNewCripto = "insert into transaccion values ($cn,$tt,$cc,$pd,$st,$cm,$ttr);";
                $wrtTrans = sqlsrv_query($con, $consultNewCripto);
                echo $consultNewCripto;
                if($wrtTrans)
                {
                    echo "<script>location.href='index.php?saveTrans=true';</script>";
                }
                else
                {
                    echo "<script>location.href='index.php?saveTrans=false';</script>";
                }
        }

        include('vistas/transacciones.php');
        ?>
    </div>
    
</body>

</html>