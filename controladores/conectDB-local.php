<?php
$servername = "localhost";
$database = "FUS";
$username = "jcastorena";
$pass = "Cast0rena!@#";
$conectionInfo = array("Database" => $database, "UID" => $username, "PWD" => $pass, 'CharacterSet' => 'UTF-8');
$con = sqlsrv_connect($servername, $conectionInfo);
?>