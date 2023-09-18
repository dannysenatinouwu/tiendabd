<?php
$serverName = "tcp:bdtienda.database.windows.net,1433";
$connectionOptions = array(
    "Database" => "dbtienda",
    "Uid" => "administrador",
    "PWD" => "@transformiceABC"
);

// Intentar establecer la conexión
$conn = sqlsrv_connect($serverName, $connectionOptions);

if (!$conn) {
    die("La conexión a SQL Server falló: " . sqlsrv_errors());
}
?>
