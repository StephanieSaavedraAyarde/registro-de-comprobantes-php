<?php
    include("ConexionBDD.php");

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "DELETE FROM pagos WHERE id = $id"; 
        $result = mysqli_query($conexion, $query);

        if (!$result) {
            die("Fail"); 
        }
            
        $_SESSION['message'] = 'Los datos se eliminaron correctamente.';
        $_SESSION['message_type'] = 'danger'; 
        header('Location: index.php');  
    }

?>

