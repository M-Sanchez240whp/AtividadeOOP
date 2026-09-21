<?php
class Planta{
public $nome;
 public $especie;
public $cor;
    public $altura;
 public $idade;
public $folhas;
 public $agua;

function crescer($centimetros){
$this->altura=$this->altura+$centimetros;
echo "cresceu ".$centimetros." cm\n";
 }

 public function regar($quantidade){
$this->agua += $quantidade;
 echo "recebeu ".$quantidade." ml de agua\n";
}

function criarFolhas($quantidade){
 $this->folhas=$this->folhas+$quantidade;
echo "criou ".$quantidade." folhas\n";
}}

$objectPlanta=new Planta();
$objectPlanta->nome="Girassol";
$objectPlanta->especie="Helianthus annuus";
$objectPlanta->cor="Amarela";
$objectPlanta->altura=60;
$objectPlanta->idade=90;
$objectPlanta->folhas=12;
$objectPlanta->agua=300;

$objectPlanta->crescer(10);
$objectPlanta->regar(100);
$objectPlanta->criarFolhas(4);

echo "Nome: ".$objectPlanta->nome."\n";
echo "Altura: ".$objectPlanta->altura." cm\n";
echo "Agua: ".$objectPlanta->agua." ml\n";
echo "Folhas: ".$objectPlanta->folhas."\n";
?>
