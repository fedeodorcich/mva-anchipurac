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
				<strong>Destacados</strong>
						<ul>
							<li><button type="button" class="text-primary linked" data-toggle="modal" data-target="#exampleModal1">
  									1º Puesto
								</button></li>
							<li><button type="button" class="text-primary linked" data-toggle="modal" data-target="#exampleModal2">
  									2º Puesto
								</button></li>
						</ul>
				</div>
			</div>

			<!--Segundo Cuadro-->

			<div class="col-md-4 col-5 second-frame ">
				<div class="bordered">
				<div>
				<img class="img-fluid" src="';
				$var=$consulta['persona'];
				$queryart=mysqli_query($conexion,"SELECT * FROM artistas WHERE nombre='$var'");
				if($consultart=mysqli_fetch_array($queryart)){
					
						echo $consultart['foto'];
					
				
				echo '"></img><div><span class="nombre text-center">';
				echo $consultart['nombre'].'</span></div>';
					}
				echo '</div>
			</div>	
			
			</div>
			
			<!--Tercer Cuadro-->

			<!--div class="col-md-4 col-11 third-frame">
				<div class="bordered subcontent">
					
				</div>
			</div-->
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




<!-- Modal UNO-->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content col-md-10">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Gota del Desierto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="img/gotadeagua.JPG" class="img-fluid radiuses">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>







<!-- Modal DOS -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Huella Humana</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="img/lahuellahumana.jpg" class="img-fluid radiuses">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>







<div id="load-screen"style="display: none;">
	<img src="img/mva-logo.png" class="img-fluid" id="logo-loader">
	<div class="lds-facebook">
		<div></div>
		<div></div>
		<div></div>
	</div>
</div>


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>