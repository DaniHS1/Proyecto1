
<?php
  include("conexion.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ver Datos</title>
    <link rel="stylesheet" type="text/css" href="EstilosConsejos.css">
  </head>
  <body>

    <table>
      <tr>
        <td>id</td>
        <td>Nombre</td>
        <td>Email</td>
        <td>Fecha de nacimiento</td>
        <td>Telefono</td>
      </tr>
      <?php
        $sql="SELECT * FROM usarios";
        $resultado=mysqli_query($con, $sql);
        while ($mostrar = mysqli_fetch_array($resultado)) {
      ?>
        <tr>
          <td><?php echo $mostrar['idUsuarios'] ?></td>
          <td><?php echo $mostrar['nombre'] ?></td>
          <td><?php echo $mostrar['correo'] ?></td>
          <td><?php echo $mostrar['fecha_nacimiento'] ?></td>
          <td><?php echo $mostrar['telefono'] ?></td>
        </tr>
      <?php
        }
      ?>
    </table>

  </body>
</html>
