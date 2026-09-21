<?php
class Animal {
 public $nome;
public $especie;
 public $cor;
public $idade;
    public $peso;
public $alimento;
 public $agua;

function comer($quantidade){
echo $this->nome." comeu ".$quantidade." g de ".$this->alimento."\n";
}
 public function beber($quantidade) {
$this->agua=$this->agua+$quantidade;
echo "bebeu ".$quantidade." ml\n";
 }
function ganharPeso($quantidade){
 $this->peso += $quantidade;
echo "ganhou ".$quantidade." kg\n";
}}

$animalObject = new Animal();
$animalObject->nome="Bolt";
$animalObject->especie="Golden Retriever";
$animalObject->cor="Dourado";
$animalObject->idade=3;
$animalObject->peso=28;
$animalObject->alimento="racao";
$animalObject->agua=900;

$animalObject->comer(150);
$animalObject->beber(500);
$animalObject->ganharPeso(2);

echo "Nome: ".$animalObject->nome."\n";
echo "Especie: ".$animalObject->especie."\n";
echo "Alimento: ".$animalObject->alimento."\n";
echo "Agua final: ".$animalObject->agua." ml\n";
echo "Peso final: ".$animalObject->peso." kg\n";
?>
