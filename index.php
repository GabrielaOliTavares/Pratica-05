<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Prática 05</title>
</head>
<body>
<?php
// Importa os scripts

include_once("quadrado.php");
include_once("retangulo.php");
include_once("circulo.php");
// Cria um array com 2 quadrados, 2 retângulos e 2 círculos
$formas = array(
new Quadrado(10.0),
new Quadrado(2.0),
new Retangulo(4.0, 3.0),
new Retangulo(5.0, 2.0),
new Circulo(5.0),
new Circulo(2)
);
// Imprime o nome da forma e sua área
foreach($formas as $forma) {
echo $forma->get_nome(), " - área: ", $forma->calcular_area(), "<br>";
}
?>
</body>
</html>