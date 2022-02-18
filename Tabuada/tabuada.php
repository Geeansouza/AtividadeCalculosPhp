<?php

require_once('moduloTabuada/calculo.php');

require_once('moduloTabuada/config.php');

$valor1 = (double)0;
$valor2 = (double)0;
$resultado = (double)0;

if(isset($_POST['btncalc'])){

    //receber dados do formulário
    $valor1 = $_POST['txtn1'];
    $valor2 = $_POST['txtn2'];

    if($_POST['txtn1'] == ""|| $_POST['txtn2'] == ""){
        echo(ERRO_MSG_CAIXA_VAZIA);
    }elseif(!is_numeric($valor1) || !is_numeric($valor2)) {
        echo(ERRO_MSG_CARACTER_INVALIDO_TEXTO);
    }else{
       $resultado = tabuada($valor1, $valor2);
    }
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./Css/body.css">
	<link rel="stylesheet" href="./Css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Tabuada</title>
</head>
<body>
    <header>

    </header>
    <body>

		<main>
            <nav>
                <input type="checkbox" id="check">
                <label for="check" class="checkbtn">
                    <i class="fas fa-bars"></i>
                </label>
                <label class="logo">Tabuada</label>
                <ul>
                    <li><a href="../index.php">inicio</a></li>
                    <li><a href="../Calculadora/calculadora.php">Calculadora</a></li>
                    <li><a href="../Media/media.php">Media</a></li>
                    <li><a class="active" href="">Tabuada</a></li>
                    <li><a href="../ParImpar/parImpar.php">Par e Impar</a></li>
                </ul>
        </nav>
        <div class="container">
          <div id="conteudo">
            <div id="titulo">
                Tabuada
            </div>

            <div id="form">
                <form name="frmtabuada" method="Post" action="Tabuada.php">
						Multiplicando:<input type="number" name="txtn1" value="<?=$valor1;?>" > <br>
                        Contador:<input type="number" name="txtn2" value="<?=$valor2;?>" > <br>

                        <input type="submit" name="btncalc" value ="Calcular" >
                    <!-- <footer>
						<div id="resultado">
                         <?=$resultado;?>
                        </div>
                    </footer> -->
                </form>
                <div class = "scrollbar">
                    <?=$resultado;?> 
                </div>
            </div>
                </main>
    </body>
</body>
</html>