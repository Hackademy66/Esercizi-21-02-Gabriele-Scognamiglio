<?php
//IRONMAN//
//Testa-->Visione
//Busto-->Energia
//BraccioDX-->Attacco
//BraccioSX-->Difesa
//Gambe-->Movimento

//Testa
abstract class Testa{
    public abstract function vision();
}

class Scanner extends Testa{
    public function vision(){
        echo "*scansiona l'area in cerca di nemici*.\n";
    }
}

class Jarvis extends Testa{
    public function vision(){
        echo "*Chiede Aiuto a Chat GPT*.\n";
    }
}

//Busto
abstract class Busto{
    public abstract function energy();
}

class ArcReactor extends Busto{
    public function energy(){
        echo "*Mantiene l'armatura operativa*.\n";
    }
}

class SolarPanel extends Busto{
    public function energy(){
        echo "*Produce energia*.\n";
    }
}


//BraccioDX
abstract class BraccioDX{
    public abstract function attack();
}

class Laser extends BraccioDX{
    public function attack(){
        echo "*Emette raggio laser dal palmo della mano*.\n";
    }
}

class Pugno extends BraccioDX{
    public function attack(){
        echo "*Tira un Pugno Fortissimo*.\n";
    }
}


//BraccioSX
abstract class BraccioSX{
    public abstract function defense();
}

class Scudo extends BraccioSX{
    public function defense(){
        echo "*Generazione scudo difensivo*.\n";
    }
}

class EMP extends BraccioSX{
    public function defense(){
        echo "*Generazione di impulso Elettromagnetico*.\n";
    }
}


//Gambe
abstract class Gambe{
    public abstract function movement();
}

class SuperVelocità extends Gambe{
    public function movement(){
        echo "*Attivazione supervelocità*.\n";
    }
}

class Propulsori extends Gambe{
    public function movement(){
        echo "*Attivazione dei propulsori, SI VOLA!!!*.\n";
    }
}

//Armatura Completa
class Armor{
    //testa, busto, braccioDX, braccioSX,gambe
    public $testa;
    public $busto;
    public $braccioDx;
    public $braccioSx;
    public $gambe;

    public function __construct(Testa $testa,Busto $busto,BraccioDX $braccioDx, BraccioSX $braccioSx,Gambe $gambe){
        $this->testa = $testa;
        $this->busto = $busto;
        $this->braccioDx = $braccioDx;
        $this->braccioSx = $braccioSx;
        $this->gambe = $gambe;

    }
    public function vision(){
        $this->testa->vision();
    }
    public function energy(){
        $this->busto->energy();
    }
    public function attack(){
        $this->braccioDx->attack();
    }
    public function defense(){
        $this->braccioSx->defense();
    }
    public function movement(){
        $this->gambe->movement();
    }

}

$mk1=new Armor(new Scanner,new ArcReactor,new Laser,new Scudo,new Propulsori);

$mk1->vision();
$mk1->energy();
$mk1->attack();
$mk1->defense();
$mk1->movement();