<?php
if(isset($_POST['Enviar'])){

$idUsuario = 1;
$servicio =$_POST['servicios'];
$descripcion= $_POST['descripcion'];
echo $servicio;


include("conexion.php");
$referencia = $_FILES['referencia']['name'];
$rutaDestino = "uploads/" . basename($referencia);

// Mover la imagen a la carpeta 'uploads'
if (move_uploaded_file($_FILES['referencia']['tmp_name'], $rutaDestino)) {
    $sql = "INSERT INTO pedidos (cliente_id, servicio, descripcion, referencia) 
    VALUES (?, ?, ?, ?)";

$stmt = $conex->prepare($sql);
$stmt->bind_param("isss", $idUsuario, $servicio, $descripcion, $rutaDestino);
$stmt->execute();

// Ejecutar la consulta
if ( $stmt->get_result()) {
echo "solicitud registrada correctamente";
} else {
echo "Error al subir la solicitud: " . $conex->error;
} 
} else {
    echo "Error al subir la referencia.";
}
header('Location: solicitud.php');
$conex->close();

}
?>