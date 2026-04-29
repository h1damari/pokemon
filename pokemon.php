<?php

//classe
class Piloto{

    //atributos
    public $nome;
    public $time;
    public $experiencia;
    public $pontosNaTemporada;
        //essas são as forças:
        public $aerodinamicaCarro; //pode ser dividida em bad, mid, good
        public $pesoCarro; //800kg apenas o carro, peso do piloto e combustível somam.
        public $habilidadeNasCurvas; //definidas de 1 a 5
        public $habilidadeDefesa; //definidas de 1 a 5

    //métodos
    function corrida(){
            
    }

}

//Programa Principal

$piloto1 = new Piloto();
    $piloto1->nome = "Lewis Hamilton"; 
    $piloto1->time = "Ferrari";
    $piloto1->experiencia = "20 anos";
    $piloto1->pontosNaTemporada = 0;
    $piloto1->aerodinamicaCarro = "bad";
    $piloto1->pesoCarro = "900kg";
    $piloto1->habilidadeNasCurvas = 5;
    $piloto1->habilidadeDefesa = 4;

$piloto2 = new Piloto();
    $piloto1->nome = "Sergio Checo Perez"; 
    $piloto1->time = "Redbull";
    $piloto1->experiencia = "14 anos";
    $piloto1->pontosNaTemporada = 0;
    $piloto1->aerodinamicaCarro = "mid";
    $piloto1->pesoCarro = "880kg";
    $piloto1->habilidadeNasCurvas = 4;
    $piloto1->habilidadeDefesa = 5;

$piloto3 = new Piloto();
    $piloto1->nome = "Max Verstappen"; 
    $piloto1->time = "Redbull";
    $piloto1->experiencia = "12 anos";
    $piloto1->pontosNaTemporada = 0;
    $piloto1->aerodinamicaCarro = "mid";
    $piloto1->pesoCarro = "870kg";
    $piloto1->habilidadeNasCurvas = 5;
    $piloto1->habilidadeDefesa = 5;