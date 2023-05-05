<?php include('ConexionBDD.php'); ?>

    <?php include('includes/header.php'); ?>

        <main class="container p-4">
            <div class="brand">
				<img src="img/logo-edificio.png" alt="logo" width="70" height="70">
			</div>
            <center>
            <h2 style="color: #1489D7">Historial de Pagos Registrados de todos los inquilinos</h2>
            </center>
            <br>
            <div class="row">
                <div class="col-md-12">

                    <table class="table table-border">

                        <thead>
                            <tr>
                                <th align="center">Mes</th>
                                <th align="center">Año</th>
                                <th align="center">Total Pagado</th>
                                <th align="center">Imagen del Comprobante</th>
                                <th align="center">Identificador Inquilino</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                        $query = "SELECT *  FROM pagos";
                        $result_usuario = mysqli_query($conexion, $query);
                        while($row = mysqli_fetch_assoc($result_usuario)){ ?>
                                <tr>
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
                                    </td>
                                    <td align="center">
                                        <?php echo $row['idInquilino']; ?>
                                    </td>
                                </tr>
                                
                                <?php } ?>

                        </tbody>

                    </table>

                </div>

            </div>

        </main>

