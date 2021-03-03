<html>
    <head>
        <title>Exercicio6 </title>
    </head>
    <body>
        <form action="" method="get">
            Dia:  <input type="number" name="numero" /><br />
            <input type="submit" name="submit" value="Testar" />
        </form> 
    </html>
        <?php
            //função que receba um número e exiba o dia correspondente da semana.
            
            //var_dump($weekDays);

            $day = $_GET['numero'];
            

            function correspond($day) 
            {   
                $weekDays = array('Domingo','Segunda','Terca','Quarta','Quinta', 'Sexta' , 'Sabado');

                if($day > 7 || $day < 0){
                    echo "Numero invalido";
                }
                else
                {   
                    echo $weekDays[$day-1];
                }  
            }
            $resultado = correspond($day);
            echo $resultado;
            echo $dayArray;

        ?>
    </body>
</html>


