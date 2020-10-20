<?php

class Caneta {

    //atributos em php
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    //métodos em php
    public function rabiscar() {
        if ($this->tampada == true) {
            echo "<p>Erro não posso rabiscar";
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
