<html>
    <head>
        <title>Exercicio1 </title>
    </head>
 <body>
    <form action="" method="get">
        Media:  <input type="number" name="numero" /><br />
        <input type="submit" name="submit" value="Testar" />
    </form> 
</html>
    <?php
        /**funcao que recebe numero indeterminado de parametros e retorna a media**/
        function media($vetor){
            return array_sum($vetor)/count($vetor);
        }
        $vetor = array(20,10,3);
        
        $resultado = media($vetor);
        echo $resultado;

    ?>
 </body>
</html>
