<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Edificio Corona</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/my-login.css">
</head>

<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">

				<div class="card-wrapper">

					<div class="brand">
						<img src="img/logo-edificio.png" alt="logo" width="70" height="100">
					</div>

					<div class="card fat">
						<div class="card-body">

							<center><h4 class="card-title">Bienvenidos Inquilinos del Edificio Corona</h4></center>
							
							<form method="POST" class="my-login-validation" novalidate="">
								<div class="form-group">
									<label for="departamento">Identificador de Departamento</label>
									<input id="departamento" type="text" class="form-control" name="departamento" value="" required autofocus>
									<div class="invalid-feedback">
										El campo es obligatorio
									</div>
								</div>

								<div class="form-group">
									<label for="pass">Contraseña
										<a href="VistaRestablecerPass.php" class="float-right">
											Olvido su contraseña?
										</a>
									</label>
									<input id="pass" type="password" class="form-control" name="pass" required data-eye>
								    <div class="invalid-feedback">
								    	El campo es obligatorio
							    	</div>
								</div>

								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="remember" id="remember" class="custom-control-input">
										<label for="remember" class="custom-control-label">Recordar mi usuario</label>
									</div>
								</div>

								<div class="form-group m-0">
									<button type="submit" name="btnIngresar" class="btn btn-primary btn-block">
										Acceder
									</button>
								</div>
								<div class="mt-4 text-center">
									Es la primera vez en el sistema? <a href="VistaRegistroUsuario.php">Quiero registrarme</a>
								</div>
							</form>
							<?php
								include("ControladorLogin.php");
							?>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2021 &mdash; Stephanie Saavedra Ayarde
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="js/my-login.js"></script>

	<script>
		addEventListener('DOMContentLoaded',inicio,false);

		function inicio(){
			document.getElementById('remember').addEventListener('change', cambiocheckbox,false);
			document.getElementById('departamento').addEventListener('focus',tomarfoco1,false);
			document.getElementById('pass').addEventListener('focus',tomarfoco2,false);
			document.getElementById('departamento').addEventListener('blur',perderfoco1,false);
			document.getElementById('pass').addEventListener('blur',perderfoco2,false);
		}

		function cambiocheckbox(){
			alert("Usted Eligio que su usuario sea recordado en este dispositivo");
		}

		function tomarfoco1(){
		document.getElementById('departamento').style.color='#1489D7';
		}

		function tomarfoco2(){
		document.getElementById('pass').style.color='#1489D7';
		}

		function perderfoco1(){
		document.getElementById('departamento').style.color='#000000';
		}

		function perderfoco2(){
		document.getElementById('pass').style.color='#000000';
		}
	</script>
</body>
</html>
