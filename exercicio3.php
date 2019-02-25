<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>3</title>
    </head>
    <body>
        <?php
        $soma=0;
        
        for ($i=0; $i<=30; $i++) {
        $vetor = $i;
        
        $soma= $soma + $vetor;
        }
        
        echo "O maior número é ". $vetor. " na posição ".($i-1)."<br><br>";
        echo "A soma de todos os valores é ". $soma. "<br><br>";
        echo "O valor da média é ". ($soma/30);
        
        ?>
    </body>
</html>