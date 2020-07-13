<?php
class Arbol{
public $altura;
public $cantidadHojas;
public $antigüedad;
public $tipo;
function crecer(){
    echo " son la altura,";
}
function crearHojas(){
    echo "cantidadHojas,";
}
function fotosintesis(){
    echo "antigüedad,";
    echo "tipo";
}
}
$p1=new Arbol();
$p2=new Arbol();
$p3=new Arbol();
$p4=new Arbol();
$p1->altura=15;
echo $p1->altura ;
echo "<br>";
$p2->cantidadHojas=8;
echo $p2->cantidadHojas ;
echo "<br>";
$p3->antigüedad=16;
echo $p3->antigüedad ;
echo "<br>";
$p4->tipo=2;
echo $p4->tipo ;
echo "<br>";
$p1->crecer();
$p2->crearHojas();
$p3->fotosintesis();
?>