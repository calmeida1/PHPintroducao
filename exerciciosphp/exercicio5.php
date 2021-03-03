<html>
    <head>
        <title>Exercicio4 </title>
    </head>
 <body>
    <form action="" method="get">
        Máximo e mínimo:  <input type="number" name="numero" /><br />
        <input type="submit" name="submit" value="Testar" />
    </form> 
</html>
    <?php

    //retornar o valor maximo e minimo

    function maxMin($valores){
        $max = max($valores);
        $min = min($valores);
        return array($max, $min);

    }

    $valores = array(3, 2, 1, 9, 8, 22);
    $result = maxMin($valores);
    echo "Valor maximo = $result[0] e valor minimo = $result[1]";

    ?>
 </body>
</html>