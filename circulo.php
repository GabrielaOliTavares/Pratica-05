<?php
// Importa o script forma-geometrica.php
include_once("forma-geometrica.php");
// Classe Círculo que herda Forma Geométrica
class Circulo extends FormaGeometrica {
// Atributo
private $raio = 0.0;
// Construtor da classe
public function __construct($raio) {
$this->nome = "Círculo";
$this->raio = $raio;
}
// Calcula a área do círculo
public function calcular_area() {
return pi() * pow($this->raio, 2);
}
}
?>