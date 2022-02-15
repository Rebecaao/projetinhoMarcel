<?php

//include()
//require()

require_once('modulo/msgErro/msgCalculadora.php');
require_once('modulo/funcoes/funCalculadora.php');




// strtoupper() - permite converter texto para maiuscula
//strtolower() - permite converter texto para minusctula

//declaraçao de variaveis
	$valor1 = (double) 0;
	$valor2 = (double) 0;
	$resultado = (double) 0;
	$opcao = (string) null; 

	


	//validacao par avareificacao se o botao foi clicado
	if(isset($_POST["btncalc"]))
	{
		//recebendo dados do formularios
		$valor1 = $_POST['txtn1'];
		$valor2 = $_POST['txtn2'] ;
		
		

		if($_POST['txtn1'] == "" || $_POST['txtn2'] == "" )
			echo('ERRO_MSG_CAIXA_VAZIA');
		else 
		{
			//validameento para caixa vazia
			if(!isset($_POST['rdocalc']))
				echo('ERRO_MSG_OPERACAO_CALCULO');
			else{
				
				//validaçao de tratamento para a entrada de string ao inves de numeross
				if(!is_numeric($valor1) || !is_numeric($valor2))
				echo('ERRO_MSG_CARACTER_INVALIDO_TEXTO');
				else{

				//apenas podemos receber o valor quanod ele existir
				$opcao =  strtoupper($_POST['rdocalc']);
				
				//chamada da funcaoo de ecalculos matematicos, passamos pelos valores e o 
				//tipo 
				$resultado = operacaoMatematica($valor1, $valor2, $opcao);

			

		//processamento do calculo das operacoes

	
			
		 
		 
		 // if($opcao == 'SOMAR')
			// $resultado = $valor1 + $valor2;
			// elseif ($opcao == 'SUBTRAIR')
			// $resultado = $valor1 - $valor2;
			// elseif ($opcao == 'MULTIPLICAR')
			// $resultado = $valor1 * $valor2;
			// elseif ($opcao == 'DIVIDIR')
			// {
			// 	if($valor2 == 0)
			// 		echo('<script>alert("Não é possivel realizzar ima divisao onde o valor 2 seja igual a zero");</script>');
			// 	else
			// 		$resultado = $valor1 / $valor2;
			// }
			
					

				}
			}
		}
	}



	
		




?>
<html>
    <head>
        <title>Calculadora - Simples</title>
		<link rel="stylesheet" type="text/css" href="../css/mainCalculadora.css">
    </head>
	<body>
        
        <div id="conteudo">
            <div id="titulo">
                Calculadora Simples
            </div>

            <div id="form">
                <form name="frmcalculadora" method="post" action="">
						Valor 1:<input type="text" name="txtn1" value=<?php echo $valor1 ?> > <br>
						Valor 2:<input type="text" name="txtn2" value=<?php echo $valor2 ?> > <br>
						<div id="container_opcoes">
							<input type="radio" name="rdocalc" value="somar"<?=$opcao == "SOMAR" ? "checked" : null;?> >Somar <br>
							<input type="radio" name="rdocalc" value="subtrair"<?=$opcao == "SUBTRAIR" ? "checked" : null;?> >Subtrair <br>
							<input type="radio" name="rdocalc" value="multiplicar"<?=$opcao == "MULTIPLICAR" ? "checked" : null;?>>Multiplicar <br>
							<input type="radio" name="rdocalc" value="dividir"<?=$opcao == "DIVIDIR" ? "checked" : null;?> >Dividir <br>
							
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
