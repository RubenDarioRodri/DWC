<?php
require_once("conn.php");
$stmt = $conn->prepare("SELECT fechaReserva,reserva.id,persona.nombre,estado_has_idioma.nombre FROM reserva,reserva_has_estado,estado,estado_has_idioma,cliente,persona WHERE estado.id=estado_has_idioma.idEstado and estado.id=reserva_has_estado.idEstado and reserva.id=idReserva and persona.id=idCliente;");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
$json= json_encode($result);
echo $json;
?>