<?php

//
// Введение
//
echo <<<EOF
Привет!

Формируем список задач!

EOF;

//
// Ввод учетных данных
//
echo <<<EOF

Необходимо ввести учетные данные!


EOF;

$name = readline('Введите Ваше имя: '); 
$age = readline('Введите Ваш возраст: '); 

//
// Инициализация 
//
$outStr = '';
$header = "\n$name, сегодня у Вас запланировано 3 приоритетных задачи на день:\n";
$footer = "Примерное время выполнения плана = ";
$Q1 = "\nКакая задача стоит перед вами сегодня? ";
$Q2 = "Сколько примерно времени эта задача займет? ";

//
// Ввод данных
//
$A1Task = (string) readline( $Q1 ); 
$A1Time = (int) readline( $Q2 );

$A2Task = (string) readline( $Q1 ); 
$A2Time = (int) readline( $Q2 ); 

$A3Task = (string) readline( $Q1 ); 
$A3Time = (int) readline( $Q2 ); 

//
// Подготовка буфера вывода
//
$outStr .= $header;

$outStr .= "- $A1Task ({$A1Time}ч)\n";
$outStr .= "- $A2Task ({$A2Time}ч)\n";
$outStr .= "- $A3Task ({$A3Time}ч)\n";

$totalTime = $A1Time + $A2Time + $A3Time;
$outStr .= $footer . $totalTime . 'ч';

//
// Вывод буфера
//
echo "$outStr\n";