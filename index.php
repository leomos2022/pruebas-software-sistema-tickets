<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<input type="checkbox" id="checkbox">
	<header class="header">
		<h2 class="u-name">Sun <b>Energy</b>
			<label for="checkbox">
				<i id="navbtn" class="fa fa-bars" aria-hidden="true"></i>
			</label>
		</h2>
		<i class="fa fa-bell" aria-hidden="true"></i>
	</header>
	<div class="body">
		<nav class="side-bar">
			<div class="user-p">
				<img src="img/user.png" alt="Perfil de usuario">
				<h4>@usuario</h4>
			</div>
			
			 <?php
			  $user = "admin";

			  if ($user == "employee") {
			 ?>
			 <!-- Employee Navigation Bar-->
			<ul>
				<li>
					<a href="#">
						<i class="fa fa-tachometer" aria-hidden="true"></i>
						<span>Tablero</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-tasks" aria-hidden="true"></i>
						<span>Mis Tareas</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-user" aria-hidden="true"></i>
						<span>Perfil</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-bell" aria-hidden="true"></i>
						<span>Notificaciones</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-sign-out" aria-hidden="true"></i>
						<span>Cerrar Sesión</span>
					</a>
				</li>
			</ul>
			<?php } else { ?>
				<!-- Admin Navigation Bar-->
				<ul>
					<li>
						<a href="#">
							<i class="fa fa-tachometer" aria-hidden="true"></i>
							<span>Tablero</span>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-users" aria-hidden="true"></i>
							<span>Gestionar Usuarios</span>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-tasks" aria-hidden="true"></i>
							<span>Crear Tareas</span>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-bell" aria-hidden="true"></i>
							<span>Todas las Tareas</span>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-bell" aria-hidden="true"></i>
							<span>Notificaciones</span>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-sign-out" aria-hidden="true"></i>
							<span>Cerrar Sesión</span>
						</a>
					</li>
				</ul>
			<?php } ?>
		</nav>
		<section class="section-1">
			
		</section>
	</div>
</body>
</html>
