
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

    <nav id="banner"  oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
  		<img src="Images/Logo.png" alt="No encontrado" width="6%">
  		<ul>
  			<li><a href="index.html"><img src="Images/Casa.png" alt="Noimg"><strong>Inicio</strong></a></li>
  			<li><a href="DatosIndice.html"><img src="Images/Datos.png" alt="Noimg"><strong>Datos</strong></a></li>
  			<li><a href="Consejos.html"><img src="Images/Consejos.png" alt="Noimg"><strong>Consejos</strong></a></li>
  			<li><a href=""><img src="Images/Mas.png" alt="Noimg"><strong>Mucho más</strong></a>
  				<ul>
  					<li><a href="DatosCuriosos.html">Datos curiosos</a></li>
  					<li><a href="ArticuloEspecial.html">Especiales</a></li>
  					<li><a href="Principal.html#linkQuien">Conocenos</a></li>
  					<li><a href="Rescatar.php">Rescatar</a></li>
  				</ul>
  			</li>
  		</ul>
  	</nav>

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
