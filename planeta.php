<?php
class Planeta{
 public $nome;
public $tipo;
 public $temperatura;
public $gravidade;
   public $luas;
public $distanciaSol;
 public $velocidade;

function aumentarTemperatura($graus){
$this->temperatura=$this->temperatura+$graus;
echo "temperatura +".$graus."\n";
 }
function diminuirTemperatura($graus){
 $this->temperatura=$this->temperatura-$graus;
echo "temperatura -".$graus."\n";
}
 public function alterarVelocidade($valor){
$this->velocidade=$valor;
echo "velocidade: ".$this->velocidade." km/s\n";
}}

$objectPlaneta=new Planeta();
$objectPlaneta->nome="Marte";
$objectPlaneta->tipo="Rochoso";
$objectPlaneta->temperatura=-63;
$objectPlaneta->gravidade=3.71;
$objectPlaneta->luas=2;
$objectPlaneta->distanciaSol=228;
$objectPlaneta->velocidade=24.1;

$objectPlaneta->aumentarTemperatura(5);
$objectPlaneta->diminuirTemperatura(3);
$objectPlaneta->alterarVelocidade(25);

echo "Nome: ".$p->nome."\n";
echo "Tipo: ".$p->tipo."\n";
 echo "Temperatura final: ".$p->temperatura." C\n";
echo "Gravidade: ".$p->gravidade." m/s2\n";
echo "Luas: ".$p->luas."\n";
?>
