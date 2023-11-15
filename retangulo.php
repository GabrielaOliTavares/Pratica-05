<?php
// Importa o script forma-geometrica.php
include_once("forma-geometrica.php");
// Classe Retângulo que herda Forma Geométrica
class Retangulo extends FormaGeometrica {
// Atributos
private $base = 0.0;
private $altura = 0.0;
// Construtor da classe
public function __construct($base, $altura) {
$this->nome = "Retângulo";
$this->base = $base;
$this->altura = $altura;
}
// Calcula a área do retângulo
public function calcular_area() {
return $this->base * $this->altura;
}
}
?>