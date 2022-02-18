<?php

    //imports
    require_once('./mudoloMedia/calculo.php');
    require_once('./mudoloMedia/config.php');

    //Declaração de variaveis
    //nomeVar = (tipoDados) valorInicial
    $nota1 = (double)0;
    $nota2 = (double)0;
    $nota3 = (double)0;
    $nota4 = (double)0;
    $media = (double)0;

    //validação para tratar se o botão foi clicado
    if(isset($_POST['btncalc'])){

        $nota1 = $_POST['txtn1'];
        $nota2 = $_POST['txtn2'];
        $nota3 = $_POST['txtn3'];
        $nota4 = $_POST['txtn4']; 

        //Operadores logicos:

        /*
            E - (and, &&)
            OU - (or, ||)
            NAO - (!)
            Funções para validação de tipos de dados
            is_numeric() - validação para numeros 
            is_integer() - validação para numeros inteiros
            is_float() - validação para numeros reais
            is_double() - validação para numeros reais
            is_array() - validação ára vetores e matrizes
            is_object() - validação para objetos
            is_bool() - validação para valores booleanos
            is_string() - validação para valores booleanos
        */

        

        //validação para tratamento de caixa vazia

        if($_POST['txtn1']== "" || $_POST['txtn2']== "" || $_POST['txtn3']== "" || $_POST['txtn4']== ""){
              echo(ERRO_PREENCHER);
        }else if (!is_numeric($nota1)||!is_numeric($nota2)||!is_numeric($nota3)||!is_numeric($nota4)){
             echo(ERRO_APENAS_NUMEROS);
        }else{
            $media = calculoMedia($nota1, $nota2, $nota3, $nota4);
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Média</title>
       <link rel="stylesheet" type="text/css" href="./CssMedia/style.css">
       <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <meta charset="utf-8">
    </head>
	<body>

        <nav>
                <input type="checkbox" id="check">
                <label for="check" class="checkbtn">
                    <i class="fas fa-bars"></i>
                </label>
                <label class="logo">Media</label>
                <ul>
                    <li><a href="../index.php">inicio</a></li>
                    <li><a href="../Calculadora/calculadora.php">Calculadora</a></li>
                    <li><a class="active" href="">Media</a></li>
                    <li><a href="../Tabuada/tabuada.php">Tabuada</a></li>
                    <li><a href="../ParImpar/parImpar.php">Par e Impar</a></li>
                </ul>
        </nav>
        
        <div id="conteudo">
            <header id="titulo">
                Calculo de Médias
            </header>

            <div id="form">
                <form name="frmMedia" method="post" action="">
                    <div>
                        <label>Nota 1:</label>
                        <input type="text" name="txtn1" value="<?php echo ($nota1);?>"  > 
                    </div>
                    
                    <div>
                        <label>Nota 2:</label>
                        <input type="text" name="txtn2" value="<?php echo ($nota2);?>" > 
                    </div>
                    
                    <div>
                        <label>Nota 3:</label>
                        <input type="text" name="txtn3" value="<?php echo ($nota3);?>" > 
                    </div>
                    
                    <div>
                        <label>Nota 4:</label>
                        <input type="text" name="txtn4" value="<?php echo ($nota4);?>" >
                    </div>
                    <div id="button">
                        <input type="submit" name="btncalc" value ="Calcular Media" >
						
						<div id="botaoReset">
							
                            <a href="media.php">
                               <input type="submit" value="Novo Calculo">
                            </a>    
                        </div>
                    </div>
                </form>

            </div>
            <footer id="resultado">
                A média é: <?php echo ($media); ?>
            </footer>
        </div>
        
		
	</body>

</html>