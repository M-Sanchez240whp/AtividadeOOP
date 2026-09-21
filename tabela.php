<?php
class ElementoQuimico {
public $nome;
 public $simbolo;
public $numeroAtomico;
  public $massaAtomica;
public $grupo;
 public $periodo;
public $estadoFisico;
 public $quantidade;

function aumentarQuantidade($valor){
$this->quantidade=$this->quantidade+$valor;
echo "aumentou ".$valor."\n";
}
 public function diminuirQuantidade($valor){
$this->quantidade=$this->quantidade-$valor;
echo "diminuiu ".$valor."\n";
 }
function mostrarNome(){echo "Nome: ".$this->nome."\n";}
 public function mostrarSimbolo(){
echo "Simbolo: ".$this->simbolo."\n";
}}

$objectTabela=new ElementoQuimico();
$objectTabela->nome="Carbono";
$objectTabela->simbolo="C";
$objectTabela->numeroAtomico=6;
$objectTabela->massaAtomica=12.011;
$objectTabela->grupo=14;
$objectTabela->periodo=2;
$objectTabela->estadoFisico="Solido";
$objectTabela->quantidade=8;

$objectTabela->aumentarQuantidade(3);
$objectTabela->diminuirQuantidade(1);
$objectTabela->mostrarNome();
$objectTabela->mostrarSimbolo();
echo "Numero atomico: ".$objectTabela->numeroAtomico."\n";
echo "Estado fisico: ".$objectTabela->estadoFisico."\n";
echo "Quantidade final: ".$objectTabela->quantidade."\n";
?>
