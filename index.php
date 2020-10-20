<!DOCTYPE html>

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
         $c1->modelo = "Compactor";
         $c1->cor = "Vermelho";
         //$c1->ponta = 1.0;
         //$c1->carga = 60;
         //$c1->tampada = true;
         $c1->rabiscar();
         $c1->destampar();
         print_r($c1);
        ?>
    </body>
</html>
