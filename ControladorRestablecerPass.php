<?php  
    include("ConexionBDD.php");

    if(isset($_POST['btnRestablecer'])){
        if(strlen($_POST['departamento']) >= 1 && strlen($_POST['pass']) >= 1){
            
            $departamento = $_POST['departamento'];
            $pass = $_POST['pass'];

            $consulta = "UPDATE `inquilino` SET `pass`='$pass' WHERE departamento = '$departamento'";

            $resultado = mysqli_query($conexion,$consulta);

            if($resultado){
                header('Location: index.php');
            }else{ 
                ?>
                    <script>
                        alert("¡Error! No se pudo modificar el registro");
                    </script>
                <?php
            }
        }else {
            ?>
                <script>
                    alert("Debe llenar todos los campos requeridos");
                </script>
            <?php
            } 
    }
	
?>