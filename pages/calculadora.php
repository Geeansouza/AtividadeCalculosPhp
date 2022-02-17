<?php
	
	/**********************************************************************/
	//incude ou require =permite fazer a importação de arquivos no php 
	
	//include()
	//require()
	/**********************************************************************/
	//Utilizando a opção com _once, o servidor realiza uma restriçção para -
	//importar somente uma vez o arquivo (melhor opção)
	
	//require _once()
	//include_once()
	/*********************************************************************/

	//import do arquivo de funções para calculos matemáticos
	require_once('moduloCalculadora/calculo.php');
	//import do arquivo de funções 
	require_once('moduloCalculadora/config.php');
	
	
     //declaração de variáveis 
	 $valor1 = (double)0;
	 $valor2 = (double)0;
	 $resultado = (double)0;
	 $opcao = (string)null;

	//validação para verificar se o botão foi clicado
	if(isset($_POST['btncalc'])){

		//receber dados do formulário
		$valor1 = $_POST['txtn1'];
		$valor2 = $_POST['txtn2'];
		

		//validação de tratamento de erro para caixa vazia
		if($_POST['txtn1'] == ""|| $_POST['txtn2'] == ""){
			echo(ERRO_MSG_CAIXA_VAZIA);
		}elseif(!is_numeric($valor1) || !is_numeric($valor2)) {
			echo(ERRO_MESG_CARACTER_INVALIDO_TEXTO);
		}else{
		   $resultado = tabuada($valor1, $valor2);
		}
	}

?>
<html>
    <head>
        <title>Calculadora - Simples</title>
		<link rel="stylesheet" type="text/css" href="../css/styleCalculadora.css">
    </head>
	<body>
        
        <div id="conteudo">
            <div id="titulo">
                Calculadora Simples
            </div>

            <div id="form">
                <form name="frmcalculadora" method="post" action="calculadora.php">
						Valor 1:<input type="text" name="txtn1" value="<?=$valor1;?>" > <br>
						Valor 2:<input type="text" name="txtn2" value="<?=$valor2;?>" > <br>
						<div id="container_opcoes">
							<input type="radio" name="rdocalc" value="somar"<?=$opcao == 'SOMAR'?'checked':null;?> >Somar <br>
							<input type="radio" name="rdocalc" value="subtrair"<?=$opcao == 'SUBTRAIR'?'checked':null;?> >Subtrair <br>
							<input type="radio" name="rdocalc" value="multiplicar" <?=$opcao == 'MULTIPLICAR'?'checked':null;?> >Multiplicar <br>
							<input type="radio" name="rdocalc" value="dividir" <?=$opcao == 'DIVIDIR'?'checked':null;?> >Dividir <br>
							
							<input type="submit" name="btncalc" value ="Calcular" >
							
						</div>	
						<div id="resultado">
						 <?=$resultado;?>
						</div>
						
					</form>
            </div>       
           
        </div>
        
		
	</body>

</html>