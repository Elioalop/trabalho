<?php
    if(isset($_POST['submit']))
    {
        include_once('config.php');

        $nome = $_POST['nome'];
        $matricula = $_POST['matricula'];
        $curso = $_POST['curso'];

        $result = mysqli_query($conexao, "INSERT INTO reservas(nome,matricula,curso) VALUES ('$nome','$matricula','$curso')");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulário | GN</title>
</head>
<body>

    <div class="header">
        <h1>Refeitório IF</h1>
    </div>

    <div class="box">
        <form method="POST" action="index.php" >

                <legend><b>Reserva</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="matricula" id="matricula" class="inputUser" required>
                    <label for="matricula" class="labelInput">Matrícula</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="curso" id="curso" class="inputUser" required>
                    <label for="curso" class="labelInput">Curso e Serie</label>
                </div>
                    <button type="submit" name="submit">Fazer reserva</button>
                <br><br>
        </form>
    </div>
</body>
</html>