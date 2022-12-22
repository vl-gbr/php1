<?php
/*
	Дан многомерный массив, представляющий собой коробку, в которую сложены предметы. 
	Помимо обычных предметов, каждая коробка может содержать другие коробки. 
	
	Необходимо написать функцию, проверяющую, есть ли предмет в цепочке коробок или нет.
	Функция должна принимать два аргумента: 
	>	стоковое название предмета для поиска (например: «Ключ») и 
	>	изначальный массив. 
	>	Возвращаемое значение — bool, где true означает наличие предмета, а false его отсутствие. 
	
	Механизм поиска должен быть реализован с применением рекурсии.
*/

//
// Исходные

$box = [
	[
		0 => 'Тетрадь',
		1 => 'Книга',
		2 => 'Настольная игра',
		3 => [
			'Настольная игра',
			'Настольная игра',
		],
		4 => [
			[
				'Ноутбук',
				'Зарядное устройство'
			],
			[
				'Компьютерная мышь',
				'Набор проводов',
				[
					'Фотография',
					'Картина'
				]
			],
			[
				'Инструкция',
				[
					'Ключ'
				]
			]
		]
	],
	[
		0 => 'Пакет кошачьего корма',
		1 => [
			'Музыкальный плеер',
			'Книга'
		]
	]
];

/**
 * @param string|null $target 
 * @param array|null $box 
 * @param bool $rSens 		# по-умолчанию не чувствительно к регистру
 * @return bool 
 */
function findOne( string|null $target, array|null $box, bool|null $rSens = false ): bool {

	$found = false;
	if (!$target) return false;
	if (!$box) return false;

	foreach ($box as $one) {
		if (is_array($one)) {
			$found = findOne($target, $one, $rSens);
		} else {
			if ($rSens){ 
				$found = ( $one == $target );
			} else {
				$found = (mb_strtolower($one) == mb_strtolower($target));
			}
		}
		if ($found) return true;
	}
	return $found;
}

//$key = 'Тетрадь';
$key = 'тетрадь';

if (findOne($key, $box)) {				// Не чувствительно к регистру
//if (findOne($key, $box, true)) { 	// Чувствительность к регистру
	echo "Искомое слово \"$key\" найдено.";
} else {
	echo "Искомое слово \"$key\" НЕ найдено.";
}