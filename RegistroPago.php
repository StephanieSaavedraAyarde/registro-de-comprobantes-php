<!doctype html>
<html lang="en">

<head>
    <title>Edificio Corona</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <nav class = "navbar navbar-dark" style= "background-color:#1489D7;">
        <div class = "container">
            <a href = "index.php" class = "navbar-brand"> Edificio Corona </a> 
            <h5 class = "navbar-brand">
                <a href src="VistaLogin.php" style= "color: white;">Cerrar Sesion</a> 
            </h5>
        </div>
    </nav>
    <div class="container mt-3">
        <div class="brand">
			<img src="img/logo-edificio.png" alt="logo" width="70" height="70">
		</div>
        <center>
            <h2 style="color: #1489D7">Registro de Comprobante</h2>
        </center>
        <br>

        <div class="row">
            <div class="col-md-7">
                <?php
                    if (isset($_REQUEST['guardar'])) {
                        if (isset($_FILES['foto']['name'])) {
                            $inquilino=$_POST['inquilino'];
                            $month=$_POST['month'];  
                            $year=$_POST['year'];
                            $total=$_POST['total']; 
                            $tipoArchivo = $_FILES['foto']['type'];
                            $nombreArchivo = $_FILES['foto']['name'];
                            $tamanoArchivo = $_FILES['foto']['size'];
                            $imagenSubida = fopen($_FILES['foto']['tmp_name'], 'r');
                            $binariosImagen = fread($imagenSubida, $tamanoArchivo);
                            include_once "ConexionBDD.php";
                            $conexion = mysqli_connect("localhost","root","","edificio");

                            $binariosImagen = mysqli_escape_string($conexion, $binariosImagen);
                            $query="INSERT INTO pagos(months, years, total,img, idInquilino) VALUES 
                                ('" . $month . "','" . $year . "','" . $total . "','" . $binariosImagen . "','" . $inquilino . "');"; 
                            $res = mysqli_query($conexion, $query);
                            if ($res) {
                ?>
                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                                Registro insertado exitosamente
                            </div>
                        <?php
                        } else {
                        ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                                Error <?php echo mysqli_error($conexion); ?>
                            </div>
                <?php

                        }
                    }
                }
                ?>
                <?php if(isset ($_SESSION['message'])) {?>

                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <?=$_SESSION['message'] ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <?php session_unset(); } ?>

                <div class="card card-body" style="height: 300px;">

                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <p>
                                <input type="text" name="inquilino" class="form-control" placeholder="Identificador Inquilino" autofocus>
                            </p>
                        </div>
                        <div class="form-group">
                            <p>
                                <input type="text" name="month" class="form-control" placeholder="Mes de Pago" autofocus>
                            </p>
                        </div>
                        <div class="form-group">
                            <p>
                                <input type="text" name="year" class="form-control" placeholder="Año de pago" autofocus>
                            </p>
                        </div>
                        <div class="form-group">
                            <p>
                                <input type="text" name="total" class="form-control" placeholder="Total" autofocus>
                            </p>
                        </div>               
                                            
                        <div class="form-group">
                            <input type="file" class="form-control-file" name="foto">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" name="guardar">Registrar Pago</button>
                            <a href="index.php" class="btn btn-primary">Cancelar</a>
                        </div>
                        
                    </form>
                </div>
            </div>
            <div class="col-md-5">
			<img src="img/inquilinos.svg" alt="logo" width="600" height="600">
		</div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script>
		addEventListener('DOMContentLoaded',inicio,false);

		function inicio(){
			document.getElementById('month').addEventListener('focus',tomarfoco1,true);
			document.getElementById('year').addEventListener('focus',tomarfoco2,false);
			document.getElementById('total').addEventListener('focus',tomarfoco3,true);
			document.getElementById('month').addEventListener('blur',perderfoco1,false);
			document.getElementById('year').addEventListener('blur',perderfoco2,false);
			document.getElementById('total').addEventListener('blur',perderfoco3,false);
		}

		function tomarfoco1(){
		document.getElementById('month').style.color='#1489D7';
		}

		function tomarfoco2(){
		document.getElementById('year').style.color='#1489D7';
		}

		function tomarfoco3(){
		document.getElementById('total').style.color='#1489D7';
		}

		function perderfoco1(){
		document.getElementById('month').style.color='#000000';
		}

		function perderfoco2(){
		document.getElementById('year').style.color='#000000';
		}

		function perderfoco3(){
		document.getElementById('total').style.color='#000000';
		}
	</script>
</body>

</html>