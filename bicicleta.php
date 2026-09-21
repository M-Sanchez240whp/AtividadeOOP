<?php
class Bicicleta{
public $marca;
 public $modelo;
public $cor;
 public $velocidade;
public $marchas;
    public $marchaAtual;
public $roda;

function acelerar($valor){
$this->velocidade=$this->velocidade+$valor;
echo "acelerou ".$valor." km/h\n";
}
public function frear($valor){
 $this->velocidade=$this->velocidade-$valor;
echo "freou ".$valor." km/h\n";
 }
function trocarMarcha($marcha){
$this->marchaAtual=$marcha;
 echo "marcha ".$marcha."\n";
}}

$objectBicicleta=new Bicicleta();
$objectBicicleta->marca="Oggi";
$objectBicicleta->modelo="Hacker Sport";
$objectBicicleta->cor="Cinza";
$objectBicicleta->velocidade=0;
$objectBicicleta->marchas=21;
$objectBicicleta->marchaAtual=1;
$objectBicicleta->roda=29;

$objectBicicleta->acelerar(20);
$objectBicicleta->acelerar(10);
$objectBicicleta->frear(5);
$objectBicicleta->trocarMarcha(4);

echo "velocidade final ".$objectBicicleta->velocidade."km/h\n";
echo "marcha atual ".$objectBicicleta->marchaAtual;
?>
