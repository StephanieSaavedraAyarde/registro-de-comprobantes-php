<?php
    include("ConexionBDD.php");

    if(isset($_POST['btnRegistro'])){
        if(strlen($_POST['nombre']) >= 1 && strlen($_POST['telefono']) >= 1 &&
           strlen($_POST['departamento']) >= 1 && strlen($_POST['piso']) >= 1 && strlen($_POST['pass']) >= 1){

            $nombre = $_POST['nombre'];
            $telefono = $_POST['telefono'];
            $departamento = $_POST['departamento'];
            $piso = $_POST['piso'];
            $pass = $_POST['pass'];

            $consulta = "INSERT INTO `inquilino`(`nombre`, `telefono`, `departamento`, `piso`, `pass`)
                         VALUES ('$nombre','$telefono','$departamento','$piso','$pass')";

            $resultado = mysqli_query($conexion,$consulta);

            if($departamento == "ADMIN"){
                session_start();
                $_SESSION['id'] = $data['id'];
                header('Location: indexAdmin.php');
            } else{
                if($resultado){
                    header('Location: index.php');
                }else{ 
                    ?>
                        <script>
                            alert("Hubo un error al guardar los datos que ingreso");
                        </script>
                    <?php
                }
            }
            
        }else {
            ?>
                <script>
                    alert("Complete los campos requeridos");
                </script>
            <?php
        } 
    }
?>