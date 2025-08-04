<?php include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $conexion->query("INSERT INTO usuarios (nombre, correo) VALUES ('$nombre', '$correo')");
    header("Location: index.php");
}
?>
<form method="POST">
  <input type="text" name="nombre" placeholder="Nombre" required><br>
  <input type="email" name="correo" placeholder="Correo" required><br>
  <button type="submit">Guardar</button>
</form>
