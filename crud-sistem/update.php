<?php
    include 'connect.php';

    $id = $_GET['updateid'];
    $sql = "SELECT * FROM `crud_data` WHERE ID=$id";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    $nome = $row['NOME'];
    $email = $row['EMAIL'];
    $telefone = $row['TELEFONE'];

    if (isset($_POST['atualizar'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        $sql = "UPDATE `crud_data` set ID='$id',NOME='$nome',EMAIL='$email',TELEFONE='$telefone' WHERE ID=$id";

        $result = mysqli_query($con,$sql);
        if ($result) {
            echo "<script> alert('Dados atualizados com sucesso!') </script>";
        }else {
            die(mysqli_error($con));
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div id="single" class="container my-5">
    <form method="POST">
        <h2>Atualizar</h2>
        <div class="mb-3">
            <label>Nome</label>
            <input type="text" class="form-control" placeholder="Digite seu nome" name="nome" autocomplete="off" value=<?php echo $nome; ?> required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="text" class="form-control" placeholder="Digite seu email" name="email" autocomplete="off" value=<?php echo $email; ?> required>
        </div>

        <div class="mb-3">
            <label>Telefone</label>
            <input type="text" class="form-control" placeholder="Digite seu telefone" name="telefone" autocomplete="off" value=<?php echo $telefone; ?> required>
        </div>
        
        <button type="submit" class="btn btn-primary" name="atualizar">atualizar</button>

        <a href="display.php">Voltar</a>
    </form>  
    </div>



    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>