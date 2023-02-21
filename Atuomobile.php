<?php

//COSTRUIAMO UNA MACCHINA. LA MACCHINA E' FORMATA DA:




// MOTORE (CHE PUO' ESSE BMW,RENOULT,FERRARI)
abstract class Motore{
    abstract function TypeOf();
    
}
class Bmw extends Motore{
    public function typeOf() {
        echo "La macchina è un BMW\n";
    }
}
class Renoult extends Motore{
    public function typeOf() {
        echo "La macchina è un RENOULT\n";
    }
}
class Ferrari extends Motore{
public function typeOf() {
echo "La macchina è un FERRARI\n";
}
}
//CARROZZERIA MAGARI PER COLORE(ROSSA,VERDE,NERA)
abstract class Carrozzeria{
    abstract function colore();
} 
class Red extends Carrozzeria{
public function colore() {
echo "Il colore è ROSSO\n";
}
}
class Green extends Carrozzeria{
public function colore() {
    echo "Il colore è VERDE\n";
}
}
class Black extends Carrozzeria{
public function colore(){
    echo "Il colore è NERO\n";
}
}
//CILINDRATA (1800,2000,2500)
abstract class Cilindrata{
    abstract function potenza();
    
}
class C1800 extends Cilindrata{
public function potenza() {
echo "La sua cilindrata è 1800\n";
}
}
class C2000 extends Cilindrata {
public function potenza() {
echo "La sua cilindrata è 2000\n";
}
}
class C2500 extends Cilindrata {
public function potenza() {
echo "La sua cilindrata è 2500\n";
}
}
//DOVE USARLA(STRADA,FUORI STRADA)
abstract class DoveUsarla{
    abstract function uso();
}
class Road extends DoveUsarla{
public function uso() {
echo "Consigliabile utilizzarla per la STRADA\n";
}
}
class OffRoad extends DoveUsarla{
public function uso() {
echo "FUORI STRADA rende molto di più\n";
}
}
//MACCHINA E I SUOI ATTRIBUTI:
// MOTORE, CARROZZERIA, CILINDRATA, DOVE USARLA
class Macchina {
    public $motore;
    public $carrozzeria;
    public $cilindrata;
    public $uso;
    public function __construct(Motore $motore, Carrozzeria $carrozzeria, Cilindrata $cilindrata, DoveUsarla $uso) {
        $this->motore = $motore;
        $this->carrozzeria = $carrozzeria;
        $this->cilindrata = $cilindrata;
        $this->uso = $uso;
    }
    public function motore(){
        $this->motore->typeOf();
    }
    public function carrozzeria(){
        $this->carrozzeria->colore();
    }
    public function cilindrata(){
        $this->cilindrata->potenza();
    }
    public function uso(){
        $this->uso->uso();
    }

}
$macchinaGabriele = new Macchina( new Renoult , new Green, new C1800, new Road );
$macchinaGabriele->motore();
$macchinaGabriele->carrozzeria();
$macchinaGabriele->cilindrata();
$macchinaGabriele->uso();