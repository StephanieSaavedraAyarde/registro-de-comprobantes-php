<?php
  include("ConexionBDD.php");

  if  (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM pagos WHERE id=$id";
    $result = mysqli_query($conexion, $query);
  }

  if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $inquilino= $_POST['inquilino'];
    $month= $_POST['month'];
    $year= $_POST['year'];
    $total= $_POST['total'];

    $query = "UPDATE pagos set idInquilino = '$inquilino', months = '$month', years = '$year', total = '$total' WHERE id=$id";
    mysqli_query($conexion, $query);
    $_SESSION['message'] = 'El registro se actualizo correctamente';
    $_SESSION['message_type'] = 'warning';
    header('Location: index.php');
  }
?>

<?php include('includes/header.php'); ?>
<main class="container p-4">
    <div class="brand">
		<img src="img/logo-edificio.png" alt="logo" width="70" height="70">
	</div>
    <center>
        <h2 style="color: #1489D7">Editar su registro de Pago</h2>
    </center>
    <br>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-7">
                <div >
                    <div class="card card-body">
                        <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
                            <div class="form-group">
                                <p>
                                    <input type="text" name="inquilino" class="form-control" placeholder="Departamento" autofocus>
                                </p>
                                <p>
                                    <input type="text" name="month" class="form-control" placeholder="Mes pagado" autofocus>
                                </p>
                                <p>
                                    <input type="text" name="years" class="form-control" placeholder="Año pagado" autofocus>
                                </p>
                                <p>
                                    <input type="text" name="total" class="form-control" placeholder="Total" autofocus>
                                </p>
                            </div>
                            <button class="btn btn-primary" name="update" style="background-color: #1489D7; border-color: #1489D7; color: white;">
                                Actualizar Registro
                            </button>
                            <a href="index.php" class="btn btn-primary" style="background-color: #1489D7; border-color: #1489D7; color: white;">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <img src="img/inquilinos.svg" alt="logo" width="600" height="600">
            </div>
        </div>
    </div>