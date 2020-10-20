<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula02 POO</title>
    </head>
    <body>
        <?php
         require 'Caneta.php';
         
         // Criando um novo objeto c1 do tipo Caneta, atravez da classe Caneta
         $c1 = new Caneta();
         
         //definindo valor dos atributos
         $c1->cor = "Azul";
         $c1->ponta = 0.5;
                           
         //chamando método
         $c1->tampar();
         //$c1->rabiscar();
                  
         print_r($c1);
         echo "<br/>";
         
         // Criando um novo objeto c2 do tipo Caneta, atravez da classe Caneta
         $c2 = new Caneta();
         
         $c2->cor = "Vermelho";
         $c2->ponta = 1.0;
         $c2->carga = 50;
         
         $c2->destampar();         
         print_r($c2);
        ?>
    </body>
</html>
