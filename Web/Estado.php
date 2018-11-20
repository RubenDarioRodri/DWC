<?php
require_once("conn.php");
$statement = $conn->prepare("SELECT idEstado,nombre FROM estado_has_idioma ");
$statement->execute();
$results = $statement->fetchAll(PDO::FETCH_ASSOC);
$json = json_encode($results);
echo $json;