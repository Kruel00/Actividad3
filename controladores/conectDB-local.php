<?php
$servername = "SQL5102.site4now.net";
$database = "db_a7cb02_financierachavez";
$username = "db_a7cb02_financierachavez_admin";
$pass = "Cast0rena!@#";
$conectionInfo = array("Database" => $database, "UID" => $username, "PWD" => $pass, 'CharacterSet' => 'UTF-8');
$con = sqlsrv_connect($servername, $conectionInfo);
?>