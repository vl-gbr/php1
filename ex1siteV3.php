<?php
//
// Подготовка данных
$title = 'Главная страница - страница обо мне';
$h1 = 'Информация обо мне';
$date = '2018';

//
// Чтение шаблона
$outStr = file_get_contents('ex1site3tpl.html');

//
// Обработка шаблона
$outStr = str_replace( "{{ title }}", $title, $outStr);
$outStr = str_replace( "{{ h1 }}", $h1, $outStr);
$outStr = str_replace( "{{ date }}", $date, $outStr);

//
// Вывод буфера
echo $outStr;