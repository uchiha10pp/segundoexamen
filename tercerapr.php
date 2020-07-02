<?php 
/* Escriba una clase Calculadora que acepte dos valores como argumentos, y pueda sumarlos, restarlos, multiplicarlos, o dividirlos según requerimiento.• Por ejemplo: $mycalc = new MiCalculadora(12, 6); echo $mycalc- >sumar(); // Muestra 18 echo $mycalc- >multiplicar(); // Muestra 72 * */

	puclic class calculadora
	{
		$valor1;
		$valor2;
		$resultado;

		public function sumar($valor1, $valor2)
		{
			$resultado = $valor1 + $valor2;
		}

		public function restar($valor1, $valor2)
		{
			$resultado = $valor1 - $valor2;
		}


	}
	$operar = new calculadora();
		$operar->sumar(12,6);
		$operar->echo(sumar(12,6));
 ?>