<?php 
/*
	Разработайте скрипт для запуска из командной строки, генерирующий персонализированные поздравления 
	с днём рождения.

	Подготовьте два массива: 
	в первом храните пожелания (счастья, здоровья и т.д.), 
	во втором эпитеты (бесконечного, крепкого и т.д.). 
	
	При запуске запросите имя именинника и после ввода сгенерируйте текст поздравления, 
	включающий три пожелания. Комбинации эпитетов и пожеланий должны быть случайными. 
	
	В результате необходимо получить строку, по следующему примеру: 
	«Дорогой Илон Маск, от всего сердца поздравляю тебя с днем рождения, 
	желаю космического терпения, бесконечного здоровья и безудержного воображения!». 
	
	Для реализации используйте функции array_rand и implode;
*/

//
// Инициализация 

$wishes = [	// Желаю
	'счастья',
	'здоровья',
	'тепла',
	'успеха',
	'дома',
	'труда',
	'досуга',
	'хозяйства',
	'творчества',
	'приключения',
	'счастья от новых встреч',
	'терпения',
	'достижения работоспособности',
	'продвижения по службе',
];

$howMuches = [ // Какого
	'бесконечного',
	'горячего',
	'крепкого',
	'безудержного',
	'космического',
	'фантастического',
	'закономерного',
	'желанного',
	'нежданного',
	'любимого',
	'бескорыстного',
];

$whs = $hms = [];
$items = 3; 		// Кол-во пожеланий
$pairs = [];		// Эпитет + пожелание
$lastPair = '';	// Последнее по-порядку пожелание

// Ввести имя
do {
	$name = readline('Введите Ваше имя: '); 
} while (!$name);

//
// Проверка количества пожеланий (не менее 2х)
if ($items < 2) {
	$items = 2;
}

//
// Выбор эпитетов и пожеланий
for ($i = 0; $i < $items; $i ++){

	$wIdx = array_rand($wishes);
	$whs = $wishes[$wIdx];
	unset($wishes[$wIdx]);

	$hIdx = array_rand($howMuches);
	$hms = $howMuches[$hIdx];
	unset($howMuches[$hIdx]);

	$pairs[] = "$hms $whs";
}

$lastPair = array_pop($pairs);

//
// Вывод поздравления
echo "
Дорогой $name, 

От всего сердца поздравляю тебя с Днем рождения! 
Желаю " . implode(', ', $pairs) . " и $lastPair!
";
