<?php 
	include('../sesiones/verificar_sesion.php');
	// Variables de configuración
	$titulo="Catálogo de Usuarios";
	$opcionMenu="A";
	// $fecha=date("Y-m-d"); 
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
			<div class="col-xs-0 col-sm-3 col-md-2 col-lg-2 vertical">
			<?php 
				include('menuv.php');
			 ?>
			</div>
			<div class="col-xs-12 col-sm-9 col-md-10 col-lg-10 cont">
			   <div class="titulo borde sombra">
			        <h3><?php echo $titulo; ?></h3>
			   </div>	
			   <div class="contenido borde sombra">
				    <div class="container-fluid">
				        <section id="alta" style="display: none">
            				<form id="frmAlta">
								<div class="row">
									<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
										<div class="form-group">
											<label for="idPersona">Seleccione a la persona:</label>
											<select  id="idPersona" class="select2 form-control " style="width: 100%">
											</select>
										</div>
									</div>
									<div class="col-xs-6 col-sm-5 col-md-5 col-lg-5">
										<div class="form-group">
											<label for="usuario">Usuario:</label>
											<input type="text" id="usuario" class="form-control " required="" placeholder="Escribe el usuario">
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
										<div class="form-group">
											<label for="contra">Contraseña:</label>
											<input type="password" id="contra" class="form-control " required="" placeholder="Escribe la contraseña">
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
										<div class="form-group">
											<label for="vContra">Verificar contraseña:</label>
											<input type="password" id="vContra" class="form-control " required="" placeholder="Vuelva a escribir la contraseña">
										</div>
									</div>

									<hr class="linea">
								</div>
								<div class="row">
									<div class="col-lg-12">
										<button type="button" id="btnLista" class="btn btn-login  btn-flat  pull-left">Lista de Usuarios</button>
										<input type="submit" class="btn btn-login  btn-flat  pull-right" value="Guardar Información">										
									</div>
								</div>
            				</form>
				        </section>

				        <section id="lista">
            
				        </section>
				    </div>
			   </div>	

			</div>			
		</div>
	</div>
	<footer class="fondo">
		<?php 
			include('../layout/pie.php');
		 ?>			

	</footer>

	<!-- Modal -->
	<div id="modalEditar" class="modal fade" role="dialog">
	  <div class="modal-dialog modal-md">

	    <!-- Modal content-->
	    <form id="frmActuliza">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Editar Datos Usuarios</h4>
	      </div>
	      <div class="modal-body">
				<input type="hidden" id="idE">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-7">
						<div class="form-group">
							<label for="nombreE">Nombre del usuario:</label>
							<select  id="nombreE" class="select2 form-control " style="width: 100%" disabled>
							</select>
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-5">
						<div class="form-group">
							<label for="usuarioE">Usuario:</label>
							<input type="text" id="usuarioE" class="form-control " required="" placeholder="Escribe el nombre de usuario">
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<div class="form-group">
							<label for="contraE">Contraseña:</label>
							<input type="password" id="contraE" class="form-control " required="" placeholder="Escribe la contraseña">
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<div class="form-group">
							<label for="vContraE">Verificar Contraseña:</label>
							<input type="password" id="vContraE" class="form-control " required="" placeholder="Vuelve a esrcribir la contraseña">
						</div>
					</div>
					<hr class="linea">
				</div>
	      </div>
	      <div class="modal-footer">
				<div class="row">
					<div class="col-lg-12">
						<button type="button" id="btnCerrar" class="btn btn-login  btn-flat  pull-left" data-dismiss="modal">Cerrar</button>
						<button type="button" id="btnMostrar" class="btn btn-login  btn-flat  pull-left" onclick="mostrarContra()" value="oculto">
						<i class="far fa-eye fa-lg" id="icoMostrar"></i>
						</button>
						<input type="submit" class="btn btn-login  btn-flat  pull-right" value="Actualizar Información">	
					</div>
				</div>
	      </div>
	    </div>
		</form>
	  </div>
	</div>
	<!-- Modal -->

	<!-- ENLACE A ARCHIVOS JS -->
	<?php include('../footer.php');?>
</body>
</html>