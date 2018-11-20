<?php
require_once("conn.php");
$stmt = $conn->prepare("SELECT * FROM reserva");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
$json= json_encode($result);
echo $json;
?>