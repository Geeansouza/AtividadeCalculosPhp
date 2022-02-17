<?php

//declaração de variáveis
    $valor1 =(double)0;
    $valor2 =(double)0;
    $resultado =(double)0;
	//validação para verificar se o botão foi clicado
	if(isset($_POST['btncalc'])){

		//receber dados do formulário
		$valor1 = $_POST['txtn1'];
		$valor2 = $_POST['txtn2'];

        		//validação de tratamento de erro para caixa vazia
		if($_POST['txtn1'] == ""|| $_POST['txtn2'] == ""){
			echo(ERRO_MSG_CAIXA_VAZIA);
		}else{
				if(!isset($_POST['rdocalc'])){
					echo(ERRO_MESG_OPERACAO_CALCULO);
				}else{ 
					if(!is_numeric($valor1) || !is_numeric($valor2)){
						echo(ERRO_MESG_CARACTER_INVALIDO_TEXTO);
					}else{
						//apenas podemos receber o valor do rdo se ele existir
						$resultado = Tabuada($valor1,$valor2);

			 	}
			 }

		}
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
<div id="conteudo">
            <div id="titulo">
                Calculadora Simples
            </div>

            <div id="form">
                <form name="frmtabuada" method="post" action="tabuada.php">
						Valor 1:<input type="number" name="txtn1" value="<?=$valor1;?>" > <br>
						Valor 2:<input type="number" name="txtn2" value="<?=$valor2;?>" > <br>
						<input type="submit" name="btncalc" value ="Calcular" >
				<div id="wrapper">
                <div class="scrollbar" id="resultado">
                <div class="force-overflow"><?$resultado?></div>
                </div>
						
					</form>
            </div>       
           
        </div>
    
</body>
</html>