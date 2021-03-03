<html>
    <head>
        <title>Exercicio4 </title>
    </head>
 <body>
    <form action="" method="get">
        Temperatura Celsius:  <input type="number" name="numero" /><br />
        <input type="submit" name="submit" value="Testar" />
    </form> 
</html>
    <?php
        //funcao que converte metros para centimetros
        $metros = $_GET['numero'];

        function transform($metros) 
        {
            return $centimetros = $metros*100;
        }
        $resultado = transform($metros);
        echo "$metros metros são $resultado\n centimetros";


    ?>
 </body>
</html>