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
							<center><h4 class="card-title">Bienvenido Nuevo Inquilino</h4></center>
							
							<form method="POST" class="my-login-validation" novalidate="">

								<div class="form-group">
									<label for="nombre">Nombre Completo</label>
									<input id="nombre" type="text" class="form-control" name="nombre" required autofocus>
									<div class="invalid-feedback">
										Este campo es requerido
									</div>
								</div>

								<div class="form-group">
									<label for="telefono">Telefono</label>
									<input id="telefono" type="text" class="form-control" name="telefono" required>
									<div class="invalid-feedback">
										Este campo es requerido
									</div>
								</div>

								<div class="form-group">
									<label for="departamento">Identificador de Departamento</label>
									<input id="departamento" type="text" class="form-control" name="departamento" required>
									<div class="invalid-feedback">
										Este campo es requerido
									</div>
								</div>

								<div class="form-group">
									<label for="piso">Piso de Departamento</label>
									<input id="piso" type="text" class="form-control" name="piso" required>
									<div class="invalid-feedback">
										Este campo es requerido
									</div>
								</div>

								<div class="form-group">
									<label for="pass">Contraseña de Usuario</label>
									<input id="pass" type="password" class="form-control" name="pass" required data-eye>
									<div class="invalid-feedback">
										Este campo es requerido
									</div>
								</div>

								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="agree" id="agree" class="custom-control-input" required="">
										<label for="agree" class="custom-control-label">Estoy de acuedo con <a href="#">Terminos y Condiciones</a></label>
										<div class="invalid-feedback">
											Usted debe aceptar los terminos y condiciones
										</div>
									</div>
								</div>

								<div class="form-group m-0">
									<button type="submit" name="btnRegistro" class="btn btn-primary btn-block">
										Registrarme
									</button>
								</div>
								<div class="mt-4 text-center">
									Ya tiene una cuenta? <a href="VistaLogin.php">Login</a>
								</div>
							</form>
							<?php
								include("ControladorRegistroUsuario.php");
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
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="js/my-login.js"></script>
	<script>
		addEventListener('DOMContentLoaded',inicio,false);

		function inicio(){
			document.getElementById('agree').addEventListener('change', cambiocheckbox,false);
			document.getElementById('nombre').addEventListener('focus',tomarfoco1,true);
			document.getElementById('telefono').addEventListener('focus',tomarfoco2,false);
			document.getElementById('departamento').addEventListener('focus',tomarfoco3,true);
			document.getElementById('piso').addEventListener('focus',tomarfoco4,false);
			document.getElementById('pass').addEventListener('focus',tomarfoco5,false);
			document.getElementById('nombre').addEventListener('blur',perderfoco1,false);
			document.getElementById('telefono').addEventListener('blur',perderfoco2,false);
			document.getElementById('departamento').addEventListener('blur',perderfoco3,false);
			document.getElementById('piso').addEventListener('blur',perderfoco4,false);
			document.getElementById('pass').addEventListener('blur',perderfoco5,false);
		}

		function cambiocheckbox(){
			alert("Usted acepto los terminos y condiciones");
		}

		function tomarfoco1(){
		document.getElementById('nombre').style.color='#1489D7';
		}

		function tomarfoco2(){
		document.getElementById('telefono').style.color='#1489D7';
		}

		function tomarfoco3(){
		document.getElementById('departamento').style.color='#1489D7';
		}

		function tomarfoco4(){
		document.getElementById('piso').style.color='#1489D7';
		}

		function tomarfoco5(){
		document.getElementById('piso').style.color='#1489D7';
		}

		function perderfoco1(){
		document.getElementById('nombre').style.color='#000000';
		}

		function perderfoco2(){
		document.getElementById('telefono').style.color='#000000';
		}

		function perderfoco3(){
		document.getElementById('departamento').style.color='#000000';
		}

		function perderfoco4(){
		document.getElementById('piso').style.color='#000000';
		}

		function perderfoco5(){
		document.getElementById('pass').style.color='#000000';
		}
	</script>
</body>
</html>