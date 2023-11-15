<?php
// Classe Abstrata Forma Geométrica
abstract class FormaGeometrica {
// Atributo
protected $nome = "";
// Método abstrato
public abstract function calcular_area();
// Retorna o atributo nome
public function get_nome() {
return $this->nome;
}
}
?>
