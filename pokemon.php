<?php

//classe
class Piloto{

    //atributos
    public $nome;
    public $time;
    public $experiencia; //em anos
    public $pontosNaTemporada;
        //essas são as forças:
        public $aerodinamicaCarro; //pode ser dividida em bad, mid, good
        public $habilidadeNasCurvas; //definidas de 1 a 5
        public $habilidadeDefesa; //definidas de 1 a 5

    //métodos
    function corrida(){
        echo $this->nome . " largou na corrida!\n";
    }

    function temporada(){
        $this->pontosNaTemporada += 25;
        echo $this->nome . " ganhou 25 pontos na temporada!\n";
    }

    function aumentarHabilidadeDefesa(){
        echo $this->nome . " melhorou a defesa de posição! (talvez)\n";
    }

    function aumentarHabilidadeCurvas(){
        echo $this->nome . " melhorou a sua habilidade de fazer curvas mais rápidas!\n";
    }

    function aumentarExperiencia(){
        $this->experiencia += 1;
        echo $this->nome . " ganhou mais 1 ano de experiência!\n";
    }

    function mostrarDados(){
        echo "--------------------------\n";
        echo "Nome: " . $this->nome . "\n";
        echo "Time: " . $this->time . "\n";
        echo "Pontos: " . $this->pontosNaTemporada . "\n";
        echo "Experiência: " . $this->experiencia . "\n";   
        echo "Aerodinâmica: " . $this->aerodinamicaCarro . "\n";
        echo "Defesa: " . $this->habilidadeDefesa . "\n";
        echo "Curvas: " . $this->habilidadeNasCurvas . "\n";
    }

}

//Programa Principal

$piloto1 = new Piloto();
    $piloto1->nome = "Lewis Hamilton"; 
    $piloto1->time = "Ferrari";
    $piloto1->experiencia = 20;
    $piloto1->pontosNaTemporada = 0;
    $piloto1->aerodinamicaCarro = "bad";
    $piloto1->habilidadeNasCurvas = 5;
    $piloto1->habilidadeDefesa = 4;

$piloto2 = new Piloto();
    $piloto2->nome = "Sergio Checo Perez"; 
    $piloto2->time = "Redbull";
    $piloto2->experiencia = 14;
    $piloto2->pontosNaTemporada = 0;
    $piloto2->aerodinamicaCarro = "mid";
    $piloto2->habilidadeNasCurvas = 4;
    $piloto2->habilidadeDefesa = 5;

$piloto3 = new Piloto();
    $piloto3->nome = "Max Verstappen"; 
    $piloto3->time = "Redbull";
    $piloto3->experiencia = 12;
    $piloto3->pontosNaTemporada = 0;
    $piloto3->aerodinamicaCarro = "mid";
    $piloto3->habilidadeNasCurvas = 5;
    $piloto3->habilidadeDefesa = 5;

$piloto3->corrida();
$piloto3->temporada();
$piloto3->aumentarExperiencia();
$piloto3->aumentarHabilidadeCurvas();
$piloto3->aumentarHabilidadeDefesa();

$piloto1->mostrarDados();
$piloto2->mostrarDados();
$piloto3->mostrarDados();
