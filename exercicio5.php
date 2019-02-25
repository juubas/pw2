<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>5</title>
    </head>
    <body>
        <?php
        $vetor=array ("Animais","Cachorro","Gato","Papagaio","Girafa","Elefante","Cavalo","Cavalcante","Isabela","Caio","Holtz");
        echo "<select>" ;
        for ($i=0; $i<=10;  $i++){
            echo "<option>" ;
            echo "<br>";
            echo $vetor[$i];
            echo "</option>";
                
        }
        echo "</select>"
        

        ?>
    </body>
</html>
