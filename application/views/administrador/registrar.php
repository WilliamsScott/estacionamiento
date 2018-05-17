<body class="blue-grey darken-4 white-text">

	<!--       INICIO MENU DE NAVEGACION        -->
	<header></header>
	<main>
		<nav>
			<div class="nav-wrapper blue-grey darken-4">
				<a href="#!" class="brand-logo ">Logo</a>
				<ul class="right hide-on-med-and-down">
					<li>
						<a href="<?php base_url();?>adminindex">Inicio</a>
					</li>
					<li>
						<a href="badges.html">Perfil</a>
					</li>
					<li>
						<a href="collapsible.html">Salir</a>
					</li>
				</ul>
			</div>
		</nav>
		<!-- Dropdown item -->
		<ul id="camaras" class="dropdown-content">
			<li>
				<a href="#!">en vivo</a>
			</li>
			<li class="divider"></li>
			<li>
				<a href="#!">Grabaciones</a>
			</li>
			<li class="divider"></li>

		</ul>
		<ul id="Estacionamiento" class="dropdown-content  light-blue darken-4 ">
			<li>
				<a href="#!">Estacionamiento</a>
			</li>
			<li class="divider"></li>
			<li>
				<a href="#!">Editar</a>
			</li>
			<li class="divider"></li>

		</ul>
		<ul id="Registro" class="dropdown-content">
			<li>
				<a href="#!">en vivo</a>
			</li>
			<li class="divider"></li>
			<li>
				<a href="#!">Grabaciones</a>
			</li>
			<li class="divider"></li>

		</ul>
		<ul id="personal" class="dropdown-content">
			<li>
				<a href="<?php base_url();?>registrar">registrar</a>
			</li>
			<li class="divider"></li>
			<li>
				<a href="#!">Guardias</a>
			</li>
			<li class="divider"></li>

		</ul>
		<!-- Dropdown item fin -->
		<nav>
			<div class="nav-wrapper  light-blue darken-4 ">

				<ul class="center hide-on-med-and-down ">
					<li>
						<a class="dropdown-button " href="#!" data-activates="Estacionamiento">Estacionamiento
							<i class="material-icons right">arrow_drop_down</i>
						</a>
					</li>
					<li>
						<a class="dropdown-button" href="#!" data-activates="camaras">Cámaras
							<i class="material-icons right">arrow_drop_down</i>
						</a>
					</li>
					<li>
						<a class="dropdown-button" href="#!" data-activates="Registro">Registro
							<i class="material-icons right">arrow_drop_down</i>
						</a>
					</li>
					<li>
						<a class="dropdown-button" href="#!" data-activates="personal">Personal
							<i class="material-icons right">arrow_drop_down</i>
						</a>
					</li>
				</ul>
			</div>
		</nav>
		<!--       FIN MENU DE NAVEGACION        -->

		<div class="row">
			<div class="col s12 m4 offset-m4">
				<div class="card">
					<div class="card-action light-blue darken-4  center-align white-text">
						<h3>Registrar </h3>
					</div>
					<div class="card-content black-text">

						<div class="row">
							<form class="col s12">
								<div class="row">
									<div class="input-field">
										<i class="material-icons prefix">account_circle</i>
										<input id="rut_registrar" type="text" class="validate">
										<label for="rut_registrar">rut</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field ">
										<i class="material-icons prefix">account_circle</i>
										<input id="nombre_registrar" type="text" class="validate">
										<label for="nombre_registrar">nombre</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field ">
										<i class="material-icons prefix">account_circle</i>
										<input id="apellido_registrar" type="text" class="validate">
										<label for="apelido_registrar">Apellido</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field ">
										<i class="material-icons prefix">account_circle</i>
										<input id="direccion_registrar" type="text" class="validate">
										<label for="direccion_registrar">direccion</label>
									</div>

								</div>


								<div class="row">
									<div class="input-field ">
										<i class="material-icons prefix">lock</i>
										<input id="clave_login" type="password" class="validate">
										<label for="clave_login">clave</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field ">
										<i class="material-icons prefix">lock</i>
										<input id="confirmar_clave_registrar" type="password" class="validate">
										<label for="confirmar_clave_registrar">confirmar clave</label>
									</div>
								</div>
                <div class="row">
                <div class="input-field ">
									<select>

										<option value="1">Option 1</option>
										<option value="0">Option 2</option>

									</select>
									<label>Tipo de usuario</label>
								</div>
                </div>
							
								<div class="row">
									<a class="btn waves-effect light-blue darken-4  right" id="bt_login" type="submit" name="action">Registrar
										<i class="material-icons right">send</i>
									</a>
								</div>


							</form>

						</div>
					</div>

				</div>

			</div>
		</div>
		</div>
		</div>

		</div>

	</main>
	<script>
		$('select').material_select();
		$(".modal-trigger").leanModal();


		);

	</script>
