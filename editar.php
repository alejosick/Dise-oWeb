<?php include 'db.php';
$id = $_GET["id"];
$res = $conexion->query("SELECT * FROM usuarios WHERE id=$id");
$row = $res->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $conexion->query("UPDATE usuarios SET nombre='$nombre', correo='$correo' WHERE id=$id");
    header("Location: index.php");
}
?>
<form method="POST">
  <input type="text" name="nombre" value="<?= $row['nombre'] ?>" required><br>
  <input type="email" name="correo" value="<?= $row['correo'] ?>" required><br>
  <button type="submit">Actualizar</button>
</form>
