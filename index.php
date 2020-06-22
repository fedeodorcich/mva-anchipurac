<!DOCTYPE html>
<html>
<head>
	<title>Muestra Virtual Anchipurac</title>
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<meta charset="utf-8">
</head>
<body>
<!--Barra latreral izquierda-->	
<div class="bar-left">
</div>
<!--Fin de Barra latreral izquierda-->

<img src="img/mva-logo.png" class="col-md-4 img-fluid animate__animated animate__backInLeft logo">







<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">

	<?php 
	require("php/conexion.php");
	$request="SELECT * FROM obras WHERE id!='0'";
	$query=mysqli_query($conexion,$request);
	while($consulta=mysqli_fetch_array($query))
	{
		
		// Carga del contenido
		echo '<div class="carousel-item ';
		if($consulta['id']==1)
		{
			//Si es el primer elemento se le coloca la clase active
			echo 'active';
		}
		else{
			//Si no es el primer elemento no le coloca la clase active
			echo ' ';
		}
		echo '">'; 
		echo '<div class="col-md-12 row container animate__animated animate__zoomIn anim">
	<!--Imagen grande-->

	<div class="col-md-5 col-11 obra-big">
		<img src="'.$consulta['obra'].'" class="img-fluid">
	</div>
	
	<!--Contenedor de elementos laterales derecho-->

	<div class="col-md-7 col-12 only-resp">
		<!--Contenedor de elemntos laterales superior-->

		<div class="row top">

			<!--Primer Cuadro-->

			<div class="col-md-4 col-5 first-frame">
				<div class="bordered subcontent">
				<strong>Otras Obras</strong>
				<ul>';

				/*$request2="SELECT * FROM otras_obras WHERE id_obra='$consulta['id']'";
				while($consulta2=mysqli_fetch_array($request2))
				{
					//echo '<li><a href="'.$consulta2['path'].'">'.$consulta2['nombre de obra'].'</a></li>';
				}*/
				
				echo '</ul>
				</div>
			</div>

			<!--Segundo Cuadro-->

			<div class="col-md-4 col-5 second-frame ">
				<div class="bordered">
				<img class="img-fluid" src="';
				$var=$consulta['persona'];
				$queryart=mysqli_query($conexion,"SELECT * FROM artistas WHERE nombre='$var'");
				if($consultart=mysqli_fetch_array($queryart)){
					
						echo $consultart['foto'];
					
				}
				echo '"></img>
			</div>
			</div>
			
			<!--Tercer Cuadro-->

			<div class="col-md-4 col-11 third-frame">
				<div class="bordered subcontent">
					<strong>Destacados</strong>
						<ul>
							<li><a href="">1° Puesto nombre</a></li>
							<li><a href="">2° Puesto nombre</a></li>
						</ul>
				</div>
			</div>
		</div>

		<!--Contenedor de elemntos laterales inferior-->

		<div class="col-md-12 col-11 bordered bottom">
			<div class="subcontent">
			<strong>'.$consulta['title'].'</strong>
			<p style="margin-top: 10px;">'.$consulta['bio'].'</p>
			</div>
		</div>

	</div>
</div>
</div>';
	}

 ?>


   
    
  </div>

  <a id="prev" class="carousel-control-prev fino" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon colorful" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a id="next" class="carousel-control-next fino" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon colorful" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>





<div id="load-screen">
	<img src="img/mva-logo.png" class="img-fluid" id="logo-loader">
	<div class="lds-facebook"><div></div><div></div><div></div></div>
</div>


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>