		<section class="contenedor iconos fondo">
			<ul class="nav-pills pull-right menu-bar">
				<li class="list-unstyled">
					<a href="#" class="color  borde" id="menuV">
						<i class="fas fa-bars"></i>
					</a>
				</li>
				<li class="list-unstyled modulo">
					<a href="#" class="color borde">
						<i class="far fa-user-circle"></i>
					</a>
				</li>
				<li class="list-unstyled modulo">
					<a href="#" class="color borde" onclick="cambiar_contra()">
						<i class="fas fa-unlock-alt"></i>
					</a>
				</li>
				<li class="list-unstyled modulo">
					<a href="../inicio/index.php" class="color borde">
						<i class="fas fa-home"></i>
					</a>
				</li>
				<li class="list-unstyled modulo">
					<a href="#" onclick="salir();" class="color borde">
						<i class="fas fa-sign-out-alt"></i>
					</a>
				</li>
				<li class="list-unstyled">
					<p  class="user fondo">
						<?php echo $_SESSION["nCompleto"];?>
					</p>
				</li>
				<!-- <h2 class="fondo aparece der">Pablo Adrian Perez Briseño</h2> -->

			</ul>

			<!-- <h2 class="fondo aparece  izq">Pablo Adrian Perez Briseño</h2> -->
			<h2 class="fondo aparece  empresa">HOSPITAL GENERAL DE LINARES</h2>
			
		</section>