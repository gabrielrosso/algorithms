<?php

//Retorna a posição de $item no array $lista

function buscaBinaria(array $lista, int $item)
{
	$min = 0;
	$max = count($lista) - 1;
	//$etapas = 1;

	while ($min <= $max) {
		$meio = floor(($min + $max) / 2);//floor arredonda para baixo para ser inteiro
		$chute = $lista[$meio];//repare que meio é sempre a posição central do array

		if ($chute == $item) {
			return $meio; //$etapas
		}
		if ($chute > $item) {
			$max = $meio - 1;
		}
		else {
			$min = $meio + 1;
		}
		//$etapas++;	
	}
	return null;//nada na tela
}

$minha_lista = [1, 3, 5, 7, 9];

echo buscaBinaria($minha_lista, 10);
