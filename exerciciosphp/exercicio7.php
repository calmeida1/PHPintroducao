<html>
 <head>
  <title>Exercicio7</title>
 </head>
 <body>
 <form action="" method="get">
  Lado 1:  <input type="number" name="numero1" /><br />
  Lado 2:  <input type="number" name="numero2" /><br />
  Lado 3:  <input type="number" name="numero3" /><br />
  <input type="submit" name="submit" value="Testar" />
 </form> 
</html>
<?php 

    $lado1 = $_GET['numero1'];
    $lado2 = $_GET['numero2'];
    $lado3 = $_GET['numero3'];

    $valoresOrdenados = array($lado1, $lado2, $lado3);

    //funcao informando triangulos

    sort($valoresOrdenados);

    if(($valoresOrdenados[0]+$valoresOrdenados[1]) > $valoresOrdenados[2]){
        if(($valoresOrdenados[0] == $valoresOrdenados[2]))
        echo "equilatero";
        elseif(($valoresOrdenados[0] == $valoresOrdenados[1]) || ($valoresOrdenados[1] == $valoresOrdenados[2]))
        echo "isoceles";
        else {
            echo "escaleno";
        }
    }
    else {
        echo "Valores invalidos";
    }


?>
 </body>
</html>