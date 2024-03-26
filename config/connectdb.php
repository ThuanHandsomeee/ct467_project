<?php
function connectDB()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ct467_project";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        echo "Connection ok: ";
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}

?>