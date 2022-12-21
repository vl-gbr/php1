<?php 
/*
	Подготовьте два массива одинаковой размерности, но не менее 10 элементов, 
	с произвольными числовыми значениями. 
	
	Разработайте скрипт для запуска из командной строки, 
	выполняющий перемножение элементов двух массивов и выводящий результат в консоль с помощью print_r. 
	
	Умножение должно выполняться только между элементами соответствующих индексов, 
	то есть нулевой элемент первого массива умножается на нулевой элемент второго массива;
*/

//
// Инициализация массивов
//
$arrA = [];
$arrB = [];
$arrAxB = [];
$len = 10;
$min = 0;
$max = 1000;

for ($i = 0; $i < $len; $i ++){
	$arrA[] = mt_rand($min, $max);
	$arrB[] = mt_rand($min, $max);
	//echo "$arrA[$i] \t $arrB[$i] \n";
}

// Проверка 
if (count($arrA) != $len || count($arrB) != $len) {
	die('err01 -- Ошибка инициализации массивов');
}

// Вычисления 
for ($i = 0; $i < $len; $i ++){
	$arrAxB[] = $arrA[$i]*$arrB[$i];
}

// Проверка 
if (count($arrAxB) != $len) {
	die('err02 -- Ошибка вычисления');
}

// Вывод результата
echo PHP_EOL;
print_r($arrAxB);

// Без проверок...
//$arrA = $arrB = $arrAxB = [];
//for ($i = 0; $i < $len; $i ++){
//	$arrA[] = mt_rand($min, $max);
//	$arrB[] = mt_rand($min, $max);
//	//echo "$arrA[$i] \t $arrB[$i] \n";
//	$arrAxB[] = $arrA[$i]*$arrB[$i];
//}

//// Вывод результата
//echo PHP_EOL;
//print_r($arrAxB);
