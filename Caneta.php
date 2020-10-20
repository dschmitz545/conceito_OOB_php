<?php

class Caneta {

    //atributos em php
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;
    
    //método construtor - exe:01
    //public function __construct() {
    //    $this->modelo = "BIC";
    //    $this->cor = "Verde";
    //    $this->ponta = 0.8;
    //    $this->carga = 50;
    //    $this->tampada = false;
    //}
    
    //metodo construtor - exe:02
    //public function Caneta() {
    //    $this->modelo = "BIC";
    //    $this->cor = "Verde";
    //    $this->ponta = 0.8;
    //    $this->carga = 50;
    //    $this->tampada = false;
    //}
    
    //metodo construtor - exe:03
    public function Caneta($m, $c, $p, $ca, $t) {
        $this->modelo = $m;
        $this->cor = $c;
        $this->ponta = $p;
        $this->carga = $ca;
        $this->tampada = $t;
    }

    //métodos acessores em php
    public function getModelo(){
        return $this->modelo;
    }
    
    public function setModelo($m) {
        $this->modelo = $m;        
    }
    
    public function getPonta(){
        return $this->ponta;
    }
    
    public function setPonta($p){
        $this->ponta = $p;
    }
    
    function getCor() {
        return $this->cor;
    }

    function getCarga() {
        return $this->carga;
    }

    function getTampada() {
        return $this->tampada;
    }

    function setCor($cor) {
        $this->cor = $cor;
    }

    function setCarga($carga) {
        $this->carga = $carga;
    }

    function setTampada($tampada) {
        $this->tampada = $tampada;
    }

        //métodos
    public function rabiscar() {
        if ($this->tampada == true) {
            echo "<p>Erro! Não posso rabiscar";
        } else {
            echo "<p>Estou rabiscando</p>";
        }
    }

    public function tampar() {
        $this->tampada = true;
    }

    public function destampar() {
        $this->tampada = false;
    }

}
