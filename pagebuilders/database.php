<!-- Daan Receveur 642199 -->
<!-- 14-01-2020 -->
<?php
$conn = null;

function createConnection()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "WebtechBP2";

    global $conn;
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

function getConnection(){
    global $conn;
    return $conn;
}

createConnection();

?>