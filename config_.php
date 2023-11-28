<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$conexao = mysqli_connect("localhost","admin","pingode1","reservasa");

if(!$conexao){
echo "não conectado";
}
echo "conectado";

$nome = $_POST['nome'];
$cpf = mysqli_real_escape_string($conexao,$nome);
$sql = "SELECT nome FROM reservasa.reservas WHERE nome = '$nome'";
$retorno = mysqli_query($conexao,$sql);

if(mysqli_num_rows($retorno)>0){
echo "Reserva ja feita";
}else{
$nome = $_POST['nome'];
$matricula = $_POST['matricula'];
$curso = $_POST['curso'];

$sql = "INSERT INTO reservasa.reservas(nome,matricula,curso values('$nome','$matricula','$curso')";
$resultado = mysqli_query($conexao,$sql);
echo "Reserva feita com sucesso!";
} 

?>
</body>
</html>