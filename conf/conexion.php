<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:bdtienda.database.windows.net,1433; Database = dbtienda", "administrador", "@transformiceABC");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "administrador", "pwd" => "@transformiceABC", "Database" => "dbtienda", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:bdtienda.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>
