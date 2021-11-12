<?php

    include 'connect.php';

    if (isset($_GET['deleteid'])) {
        $id = $_GET['deleteid'];

        $sql = "DELETE FROM `crud_data` WHERE id=$id";
        $result = mysqli_query($con,$sql);
        if ($result) {
            echo "<script> alert('Dados excluídos com sucesso!') </script>";
        }else {
            die(mysqli_error($con));
        }
    }

?>

<a href="display.php"> < Voltar</a>