<?php
    include("ConexionBDD.php");

    if(isset($_POST['btnIngresar'])){
        if(strlen($_POST['departamento']) >= 1 && strlen($_POST['pass']) >= 1){
            
            $departamento = $_POST['departamento'];
            $pass = $_POST['pass'];
            
            if($departamento == "ADMIN"){
                session_start();
                $_SESSION['id'] = $data['id'];
                header('Location: indexAdmin.php');
            }
            else{
                $consulta = "SELECT * from inquilino where departamento = '$departamento' and pass = '$pass'";
                $resultado = mysqli_query($conexion,$consulta);
                $array = mysqli_num_rows($resultado); 


                if($array>0){
                    $data = mysqli_fetch_array($resultado);
                    session_start();
                    $_SESSION['id'] = $data['id'];
                    header('Location: index.php');
                }else{   
                    ?>
                        <script>
                            alert("Los datos que ingreso son incorrectos o no existen");
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