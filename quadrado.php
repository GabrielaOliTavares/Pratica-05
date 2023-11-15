<?php
// Importa o script forma-geometrica.php
include_once("forma-geometrica.php");
// Classe Quadrado que herda Forma Geométrica
class Quadrado extends FormaGeometrica {
// Atributo
private $base = 0.0;
// Construtor da classe
public function __construct($base) {
$this->nome = "Quadrado";
$this->base = $base;
}

// Calcula a área do quadrado
public function calcular_area() {
return $this->base * $this->base;
}
}
?>