<?php

//
// Введение
//
echo <<<EOF
Привет!

Необходимо ввести учетные данные!


EOF;

//
// Ввод данных
//

$name = readline('Введите Ваше имя: '); 
$age = readline('Введите Ваш возраст: '); 

//
// Вывод результата
//
echo "\nВас зовут $name, Ваш возраст $age лет.\n";