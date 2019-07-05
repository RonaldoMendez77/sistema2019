<?php 
	include('../sesiones/verificar_sesion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include('../header.php');?>
</head>
<body>
	<header>
		<?php 
			include('../layout/encabezado.php');
		 ?>
	</header><!-- /header -->	
	<div class="container-fluid" >
		<div class="row" id="cuerpo" style="display:none">
			<div class="col-xs-0 col-sm-3 col-md-2 col-lg-2">
				<?php 
					include('../layout/menuv.php');
				?>
			</div>

			<div class="col-xs-12 col-sm-9 col-md-10 col-lg-10 cont">
			   <div class="titulo borde sombra">
			        <h3 class="titular">Panel Inicial</h3>
			   </div>	
			   <div class="contenido borde sombra" style="padding-right:18px;">
					<section id="panel">

					</section>
					<section id="misDatos">

					</section>
					<section id="miFoto">

					</section>
					<section id="miContra">

					</section>
				</div>
			</div>			
		</div>
	</div>
	<footer class="fondo">
		<?php 
			include('../layout/pie.php');
		 ?>			

	</footer>
	<?php include('../footer.php');?> 
</body>
</html>