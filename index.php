<?php

class Movie {
    public $genere;
    public $durata;
    public $regista;
    public $produzione;
    public $anno;
    public $rate = 0;

    function __construct($_genere, $_durata, $_regista, $_produzione, $_anno){
        $this->genere = $_genere;
        $this->durata = $_durata;
        $this->regista = $_regista;
        $this->produzione = $_produzione;
        $this->anno = $_anno;
    }

    function setLike($_voto){
        if($_voto > 0 && $_voto < 11){
            if(!$this->rate){
                $this->rate = $_voto;
            }
        }
            
    }

    function getMovie(){
        var_dump('genere: ');
        foreach($this->genere as $i){
            var_dump($i);
        }
        var_dump('durata: ' . $this->durata . '<br>');
        
        var_dump('regia: ' . $this->regista . '<br>');
        
        var_dump('prodotto da: ' . $this->produzione . '<br>');
        
        var_dump('anno: ' . $this->anno . '<br>');
        
        var_dump('rate it: ' . $this->rate);
    }
};

$bladeRunner = new Movie(['fantascienza','thriller','noir'], '124', 'Ridley Scott', 'Michael Deeley', '1982');
$shining = new Movie(['horror','thriller'], '144', 'Stanley Kubrick', 'Stanley Kubrick', '1980');

$bladeRunner->getMovie();
$shining->getMovie();