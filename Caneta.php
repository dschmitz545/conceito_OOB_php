<?php

class Caneta {

    //atributos em php
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    //métodos em php
    function rabiscar() {
        if ($this->tampada == true) {
            echo "<p>Erro não posso rabiscar";
        } else {
            echo "<p>Estou rabiscando</p>";
        }
    }

    function tampar() {
        $this->tampada = true;
        
    }

    function destampar() {
        $this->tampada = false;
    }

}
