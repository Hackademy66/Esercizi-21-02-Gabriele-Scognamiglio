<?php
//BATMOBILE//
//parte anteriore --> attacco
abstract class ParteAnteriore{
    public abstract function attack();
}
//parte posteriore --> difesa
abstract class PartePosteriore{
    public abstract function defense();
}


//Classi Figlie di parte anteriore
class LanciaMissili extends ParteAnteriore{
    public function attack(){
        echo "è un lanciamissili ma in realtà spara reti.\n";
    }
}

class Gatling extends ParteAnteriore{
    public function attack(){
        echo "è una gatling ma in realta spara tazer.\n";
    }
}

//Classi Figlie di parte posteriore
class BucciaDiBanana extends PartePosteriore{
    public function defense(){
        echo "Sembrano buccie di banana...e in realtà lo sono.\n";
    }
}

class Fumogeno extends PartePosteriore{
    public function defense(){
        echo "Oscura la vistà degli inseguitori.\n";
    }
}


class Batmobile{
    //attributi
    public $attacco;
    public $difesa;

    //funzione costruttore
    //Dependency Injection
    public function __construct(ParteAnteriore $ParteAnteriore, PartePosteriore $PartePosteriore){
        $this->attacco=$ParteAnteriore;
        $this->difesa=$PartePosteriore;

    }
}

//Object Composition
$batmobile = new Batmobile(new Gatling, new BucciaDiBanana);
$batmobile2 = new Batmobile(new LanciaMissili, new Fumogeno);

print_r($batmobile);
print_r($batmobile2);





