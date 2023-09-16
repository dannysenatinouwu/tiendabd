<?php
    $host = "localhost";
    $user = "root";
    $clave = "";
    $bd = "bd_tienda";
    $conexion = mysqli_connect($host,$user,$clave,$bd);
    if (mysqli_connect_errno()){
        echo "No se pudo conectar a la base de datos";
        exit();
    }
    mysqli_select_db($conexion,$bd) or die("No se encuentra la base de datos");
    mysqli_set_charset($conexion,"utf8");
    
?>


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
$connectionInfo = array("UID" => "administrador", "pwd" => "{your_password_here}", "Database" => "dbtienda", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:bdtienda.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>