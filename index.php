<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula02 POO</title>
    </head>
    <body>
        <pre>
            <?php
            require 'Caneta.php';

            // Criando um novo objeto c1 do tipo Caneta, atravez da classe Caneta
            $c1 = new Caneta("Bic Cristal", "Amarelo", 0.7, 100, true);

            //definindo valor dos atributos
            //$c1->setModelo("Compactor");
            //$c1->setPonta(1.2);
            echo "</br>";
            print "Eu tenho uma caneta {$c1->getModelo()} de cor {$c1->getCor()} de ponta {$c1->getPonta()} com carga de {$c1->getCarga()}% e tampada {$c1->getTampada()}";
            
            $c2 = new Caneta("Stabilo", "Verde", 1.0, 20, false);
            echo "</br>";
            print "Eu tenho uma caneta {$c2->getModelo()} de cor {$c2->getCor()} de ponta {$c2->getPonta()} com carga de {$c2->getCarga()}% e tampada {$c2->getTampada()}";
            ?>
        </pre>
    </body>
</html>
