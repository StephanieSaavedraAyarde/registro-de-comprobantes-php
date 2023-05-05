<?php  
    include("ConexionBDD.php");

    if(isset($_POST['btnRestablecer'])){
        if(strlen($_POST['month']) >= 1 && 
            strlen($_POST['year']) >= 1 && 
            strlen($_POST['total']) >= 1 && 
            strlen($_POST['image']) >= 1){
            
            $idInquilino = 838;
            $id = $_POST['id'];
            $month = $_POST['month'];
            $year = $_POST['year'];
            $total = $_POST['total'];
            $image = $_POST['image'];
            $imgContent = addslashes(file_get_contents($image));

            $consulta = "UPDATE `pagos` SET `month`='$month', `year`='$year', `total`='$total', `image`='$imgContent', `idInquilino`='$idInquilino' WHERE id = '$id'";

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