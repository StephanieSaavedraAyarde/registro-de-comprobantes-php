<?php include("ConexionBDD.php"); ?>

    <?php include('includes/header.php'); ?>

        <main class="container p-4">
            <div class="brand">
				<img src="img/logo-edificio.png" alt="logo" width="70" height="70">
			</div>
            <center>
            <h2 style="color: #1489D7">Historial de Pagos Registrados</h2>
            </center>
            <br>
            
            <div class="row">
                <div class="row">
                    <a href="RegistroPago.php" class="btn btn-primary" style= "color: white; background-color:#1489D7;">Nuevo Registro</a>
                </div>
                <div class="col-md-12">
                    <br>
                    <table class="table table-border">

                        <thead>
                            <tr>
                                <th align="center">ID</th>
                                <th align="center">Departamento</th>
                                <th align="center">Mes</th>
                                <th align="center">Año</th>
                                <th align="center">Total</th>
                                <th align="center">Comprobante</th>
                                <th align="center">Acción</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                        $query = "SELECT *  FROM pagos";
                        $result_usuario = mysqli_query($conexion, $query);

                        while($row = mysqli_fetch_assoc($result_usuario)){ ?>
                                <tr>
                                    <td align="center">
                                        <?php echo $row['id']; ?>
                                    </td>
                                    <td align="center">
                                        <?php echo $row['idInquilino']; ?>
                                    </td>
                                    <td align="center">
                                        <?php echo $row['months']; ?>
                                    </td>
                                    <td align="center">
                                        <?php echo $row['years']; ?>
                                    </td>
                                    <td align="center">
                                        <?php echo $row['total']; ?>
                                    </td>
                                    <td align="center">
                                        <img width="100" src="data:image/png; ?>;base64,<?php echo  base64_encode($row['img']); ?>">
                                    
                                    <td>
                                        <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-primary" style= "color: white; background-color:#FFD700; border-color:#FFD700">Editar</a>
                                        <a href="ControladorEliminarPago.php?id=<?php echo $row['id'] ?>" class="btn btn-primary" style= "color: white; background-color:red; border-color:RED">Eliminar</a>
                                    </td>
                                </tr>
                                
                                <?php } ?>

                        </tbody>

                    </table>

                </div>

            </div>

        </main>

