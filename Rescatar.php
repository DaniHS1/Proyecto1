<?php
	include("conexion.php");
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Amikos perrunos | DatosCuriosos</title>
	<link rel="stylesheet" type="text/css" href="EstilosConsejos.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
				$('#boton-guardar').click(function(){
						/*Captura de datos escrito en los inputs */
						var nom = document.getElementById("nombretxt").value;
						var cor = document.getElementById("correotxt").value;
						var fech = document.getElementById("fechatxt").value;
						var tel = document.getElementById("telefonotxt").value;
						/*Guardando los datos en el LocalStorage*/
						localStorage.setItem("Nombre", nom);
						localStorage.setItem("Correo", cor);
						localStorage.setItem("FechNa", fech);
						localStorage.setItem("Telefono", tel);
						/*Limpiando los campos o inputs*/
						var targ= "_blank";
						var linkkkk="Agradecer.html"

	        /*document.location.target = "_blank";
	        document.location.href="Agradecer.html";*/
				});
		});

	/*Funcion Cargar y Mostrar datos*/
	</script>
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
					<li><a href="ArticuloEspecial.html">Articulos Especiales</a></li>
					<li><a href="Principal.html#linkQuien">Conocenos</a></li>
					<li><a href="Rescatar.php">Rescatar</a></li>
				</ul>
			</li>
		</ul>
	</nav>


	<div id="contenido">
		<section>
			<h1>Rescatar Peludos</h1>
			<h3>Necesitamos tus datos para poder contactarte</h3>
			<form action="" method="post">
				<p>
					Nombre:_______________<input type="text" placeholder="Nombre" id="nombretxt" name="nomb" autofocus required />
				</p>
				<p>
					Correo electronico:___<input type="email" placeholder="Correo" id="correotxt" name="emailll" required />
				</p>
				<p>
					Fecha de nacimiento:_<input type="date" id="fechatxt" name="fech" required/>
				</p>
				<p>
					Teléfono:______________.<input type="tel" placeholder="Telefono" id="telefonotxt" name="telef" required/>
				</p>
				<p>
					<input type="submit" value="Enviar" id="boton-guardar" />
				</p>
			</form>
			<?php
				if($_POST){//
					$nom = $_POST['nomb'];
					$cor = $_POST['emailll'];
					$fech = $_POST['fech'];
					$tel = $_POST['telef'];

					/*mysql_query("inset into usuarios(nombre, correo, fecha_nacimiento, telefono)
					 values('$nom', '$cor', '$fech', '$tel')")or die(mysql_error());*/
					 //here
					 $insert_value = 'INSERT INTO `' . $db_name . '`.`'.$db_table_name1.'` (`nombre` , `correo` , `fecha_nacimiento`, `telefono`)
					 VALUES ("' . $nom . '", "' . $cor . '", "' . $fech . '", "' . $tel . '")';
 //here
            mysqli_select_db($con, $db_name);
            $retry_value = mysqli_query($con, $insert_value);
            if (!$retry_value) {
           		echo "error_registro";
           	}
            else
            {

 		            header ("Location: Agradecer.html");

             }
				}
			?>
		</section>

		<center>
				<span style="font-size: large;"><span class="Apple-style-span" style="color: red;"><script language="JavaScript" type="text/javascript">
				//<![CDATA[
				<!--
				today = new Date()
				if(today.getMinutes() < 10){
				pad = "0"}
				else
				pad = "";
				document.write ;if((today.getHours() >=6) && (today.getHours() <=9)){
				document.write("¡Buen día!")
				}
				if((today.getHours() >=10) && (today.getHours() <=11)){
				document.write("¡Buen día!")
				}
				if((today.getHours() >=12) && (today.getHours() <=19)){
				document.write("¡Buenas tardes!")
				}
				if((today.getHours() >=20) && (today.getHours() <=23)){
				document.write("¡Buenas noches!")
				}
				if((today.getHours() >=0) && (today.getHours() <=3)){
				document.write("¡Buenas noches!")
				}
				if((today.getHours() >=4) && (today.getHours() <=5)){
				document.write("¡Buenas noches!")
				}
				// -->
				//]]>
				</script></span></span></center>
		<footer><center><strong>Copyright 2019 © Salvar nuestros amikos</strong></center> </footer>
	</div>
</body>
</html>
