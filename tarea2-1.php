<?php
class Humano{
public $altura;
public $genero;
public $edad;
public $carácter;
function hablar(){
    echo " son la altura,";
}
function correr(){
    echo "genero,";
    echo "edad,";
}
function comer(){
    echo "caracter";
}
}
$p1=new Humano();
$p2=new Humano();
$p3=new Humano();
$p4=new Humano();
$p1->altura=1.80;
echo $p1->altura ;
echo "<br>";
$p2->genero="Masculino";
echo $p2->genero ;
echo "<br>";
$p3->edad=16;
echo $p3->edad ;
echo "<br>";
$p4->carácter="Pasivo";
echo $p4->carácter ;
echo "<br>";
$p1->hablar();
$p2->correr();
$p3->comer();
?>