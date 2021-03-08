<?php

require_once 'Livro.php';
require_once 'Pessoa.php';
//require_once 'Publicação.php';

?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
    <?php
    $pessoa1 = new Pessoa('Clara', 'fem', 22);
    echo $pessoa1->get_idade(). '</br>';
    $pessoa1->fazerAniversario();
    echo $pessoa1->get_idade() .'</br>';

    $livro1 = new Livro('Meu pe de laranja lima', 'Jose', 200, $pessoa1);
    echo $livro1->detalhes();
    ?>
</body>
</html>
