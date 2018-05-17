<body class="blue-grey darken-4 white-text">

 <!--       INICIO MENU DE NAVEGACION        -->
	<header></header>
	<main>
	<nav>
    <div class="nav-wrapper blue-grey darken-4">
      <a href="#!" class="brand-logo ">Logo</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="<?php base_url();?>adminindex">Inicio</a></li>
        <li><a href="badges.html">Perfil</a></li>
        <li><a href="collapsible.html">Salir</a></li>
      </ul>
    </div>
  </nav>
<!-- Dropdown item -->
	<ul id="camaras" class="dropdown-content">
  <li><a href="#!">en vivo</a></li>
	<li class="divider"></li>
  <li><a href="#!">Grabaciones</a></li>
  <li class="divider"></li>

</ul>
<ul id="Estacionamiento" class="dropdown-content  light-blue darken-4 ">
  <li><a href="#!">Estacionamiento</a></li>
	<li class="divider"></li>
  <li><a href="#!">Editar</a></li>
  <li class="divider"></li>
 
</ul>
<ul id="Registro" class="dropdown-content">
  <li><a href="#!">en vivo</a></li>
	<li class="divider"></li>
  <li><a href="#!">Grabaciones</a></li>
  <li class="divider"></li>

</ul>
<ul id="personal" class="dropdown-content">
  <li><a href="<?php base_url();?>registrar">registrar</a></li>
	<li class="divider"></li>
  <li><a href="#!">Guardias</a></li>
  <li class="divider"></li>

</ul>
<!-- Dropdown item fin -->
<nav>
  <div class="nav-wrapper  light-blue darken-4 ">
   
    <ul class="center hide-on-med-and-down ">
		<li><a class="dropdown-button " href="#!" data-activates="Estacionamiento">Estacionamiento<i class="material-icons right">arrow_drop_down</i></a></li>
		<li><a class="dropdown-button" href="#!" data-activates="camaras">Cámaras<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a class="dropdown-button" href="#!" data-activates="Registro">Registro<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a class="dropdown-button" href="#!" data-activates="personal">Personal<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
</nav>

	</main>
 <!--       FIN MENU DE NAVEGACION        -->

<script>
    $('select').material_select();
    $(".modal-trigger").leanModal();
 
		$('.Estacionamiento').dropdown();
  
    
</script>