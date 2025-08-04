<?php include 'db.php'; ?>
<a href="crear.php">Nuevo Registro</a>
<table border="1">
<tr>
  <th>ID</th>
  <th>Nombre</th>
  <th>Correo</th>
  <th>Acciones</th>
</tr>
<?php
$res = $conexion->query("SELECT * FROM usuarios");
while ($row = $res->fetch_assoc()):
?>
<tr>
  <td><?= $row["id"] ?></td>
  <td><?= $row["nombre"] ?></td>
  <td><?= $row["correo"] ?></td>
  <td>
    <a href="editar.php?id=<?= $row["id"] ?>">Editar</a> |
    <a href="eliminar.php?id=<?= $row["id"] ?>" onclick="return confirm('¿Eliminar registro?')">Eliminar</a>
  </td>
</tr>
<?php endwhile; ?>
</table>
