<?php 
	require("php/conexion.php");
	$request="SELECT * FROM obras WHERE id!=0";
	$query=mysqli_query($conexion,$request);
	while($consulta=mysqli_fetch_array($query))
	{
		echo '<div class="col-md-12 row container" style="padding: 0 5em;">
	<!--Imagen grande-->

	<div class="col-md-4">
		<img src="'.$consulta['obra'].'" class="img-fluid">
	</div>
	
	<!--Contenedor de elementos laterales derecho-->

	<div class="col-md-8">
		<!--Contenedor de elemntos laterales superior-->

		<div class="row">

			<!--Primer Cuadro-->

			<div class="col-md-3 bordered first-frame">
				<strong>Otras Obras</strong>
				<ul>';

				$request2="SELECT * FROM otras_obras WHERE id_obra='$consulta/'id'/'"
				while($consulta2=mysqli_fetch_array($request2))
				{
					//echo '<li><a href="'.$consulta2['path'].'">'.$consulta2['nombre de obra'].'</a></li>';
				}
				
				echo '</ul>
			</div>

			<!--Segundo Cuadro-->

			<div class="col-md-3 bordered second-frame">
				<img class="img-fluid" src="img/prueba.png"></img>
			</div>
			
			<!--Tercer Cuadro-->

			<div class="col-md-3 bordered third-frame">
				<strong>Destacados</strong>
				<ul>
					<li><a href="">1° Puesto nombre</a></li>
					<li><a href="">2° Puesto nombre</a></li>
				</ul>
			</div>
		</div>

		<!--Contenedor de elemntos laterales inferior-->

		<div class="col-md-10 bordered bottom">
			<strong>Biografía / Memoria Conceptual</strong>
			<p style="margin-top: 10px;">'.$consulta['bio'].'</p>
		</div>

	</div>
</div>';
	}

 ?>