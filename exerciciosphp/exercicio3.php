<html>
    <head>
        <title>Exercicio3 </title>
    </head>
 <body>
    <form action="" method="get">
        Temperatura Celsius:  <input type="number" name="numero" /><br />
        <input type="submit" name="submit" value="Testar" />
    </form> 
</html>
    <?php
        //funcao que converte celsius para fahreiheit
        $celsius = $_GET['numero'];

        function transform($celsius) 
        {
            return $fahreinheit = $celsius*(9/5) + 32;
        }
        $resultado = transform($celsius);
        echo "$celsius graus celsius são $resultado\n graus fahreinheit";


    ?>
 </body>
</html>