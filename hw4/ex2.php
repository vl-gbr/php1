<?php 
/*
	Разработайте функцию с объявленными типами аргументов и возвращаемого значения, 
	принимающую в качестве аргумента массив целых чисел. 
	
	Результатом работы функции должен быть массив, содержащий три элемента: 
	>	max — наибольшее число, 
	>	min — наименьшее число, 
	>	avg — среднее арифметическое всех чисел массива;
*/

//
// Исходные
$intArr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];


/**
 * @param array $iArr 
 * @return null|array 
 */
function arrCalc( array $iArr ): null|array {

	$min = $max = $avg = 0;

	$min = min($iArr);
	$max = max($iArr);
	$avg = array_sum($iArr)/count($iArr);

	return [ 
		'max' => $max,
		'min' => $min,
		'avg' => $avg,
	];
}

print_r( arrCalc( $intArr ) );
