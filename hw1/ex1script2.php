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
$header = "$name, сегодня у Вас запланировано 3 приоритетных задачи на день:\n";
$footer = "Примерное время выполнения плана = ";
$Q1 = "Какая задача стоит перед вами сегодня? ";
$Q2 = "Сколько примерно времени эта задача займет? ";

//
// Ввод данных
//
$A1Task = readline( $Q1 ); 
$A1Time = (int) readline( $Q2 );

$A2Task = readline( $Q1 ); 
$A2Time = (int) readline( $Q2 ); 

$A3Task = readline( $Q1 ); 
$A3Time = (int) readline( $Q2 ); 

//
// Подготовка буфера вывода
//
$outStr .= "\n" . $header;

$outStr .= "- $A1Task ({$A1Time}ч)\n";
$outStr .= "- $A2Task ({$A2Time}ч)\n";
$outStr .= "- $A3Task ({$A3Time}ч)\n";

$totalTime = $A1Time + $A2Time + $A3Time;
$outStr .= "{$footer} {$totalTime}ч";

//
// Вывод буфера
//
echo "$outStr\n\n";

//
// Вариант 2

$i=1;
$result = 0;

$task = "task$i";
$time = "time$i";
$$task = readline($Q1);
$$time = (int) readline($Q2);
$result += $$time;
$i++;

$task = "task$i";
$time = "time$i";
$$task = readline($Q1);
$$time = (int) readline($Q2);
$result += $$time;
$i++;

$task = "task$i";
$time = "time$i";
$$task = readline($Q1);
$$time = (int) readline($Q2);
$result += $$time;
$i++;

echo "\n";
echo "
$header
- $task1 ({$time1}ч)
- $task2 ({$time2}ч)
- $task3 ({$time3}ч)
$footer {$result}ч\n
";