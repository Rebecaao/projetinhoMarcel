<?php
//************************************
//**arquivo de funcoes matematicas que poderia ser utilizado dentro do projeto
//autor:Rebeca
//data:04/01/21
//versao:1.0


function operacaoMatematica($numero1, $numero2, $operacao)
	{
		//declaracaao das variaveis locais da function (todas as variiaaveis recebem os dados do parametro function)
		$num1 = (double) $numero1;
		$num2 = (double) $numero2;
		$tipoCalc = (string) $operacao;
		$result = (double) 0;

		switch($tipoCalc)
		{
		   case("SOMAR"):
			$result = $num1 + $num2;
			   break;
		   
		   case("SUBTRAIR"):
			$result = $num1 -$num2;
		   break;
		   
		   case("MULTIPLICAR"):
			$result = $num1 * $num2;
		   break;

		   case("DIVIDIR"):
			   if($num2 == 0)
                   echo('ERRO_MSG_DIVISAO_ZERO'
                
                
                );
			   else
			   $result = $num1 / $num2;
				
				break;
		
		}
		//round permite limitar casas apos a virgula
		$result = round($result, 2);
		return $result;

	}

?>